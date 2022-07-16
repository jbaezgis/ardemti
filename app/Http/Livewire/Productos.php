<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Carbon\Carbon;
use App\Models\Producto;

class Productos extends Component
{
    use WithPagination;
    use Actions;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public $modalFormVisible = false;
    public $modalConfirmDelete = false;
    public $modelId;
    public $id_producto, $imagen, $descripcion, $precio, $categoria, $estado, $creado_por;
    public $modal = false;
    public $search;
    

   public function rules()
   {
        return [
            'descripcion' => 'required',
            // 'slug' => ['required', Rule::unique('pages', 'slug')->ignore($this->modelId)],
            'precio' => 'required',
            'categoria' => 'required',
        ];
   }

    public function mount()
    {
        $this->resetPage();
    }

    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();

        $this->modelId = $id;
        $data = Producto::find($this->modelId);
        $this->modalFormVisible = true;
        $this->descripcion = $data->descripcion;
        $this->precio = $data->precio;
        $this->categoria = $data->categoria;
        $this->estado = $data->estado;
        $this->creado_por = auth()->id();
    }

    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDelete = true;
    }

    public function estado($id)
    {
        $this->modelId = $id;
        $data = Producto::find($this->modelId);
        $this->estado = $data->estado;
    }

    public function modelData()
    {
        return [
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'categoria' => $this->categoria,
            'estado' => $this->estado,
        ];
    }

    public function create()
    {
        $this->validate();
        Producto::create($this->modelData());
        // $this->dispatchBrowserEvent('event-notification', [
        //     'eventName' => 'New Page :D',
        //     'eventMessage' => 'A new page has been created!'
        // ]);
        $this->reset();
    }

    public function update()
    {
        $this->validate();
        Producto::where('id', $this->modelId)
            ->update($this->modelData());
        // $this->dispatchBrowserEvent('event-notification', [
        //     'eventName' => 'Updated Page :D',
        //     'eventMessage' => 'The page "' . $this->title . '" has been updated!'
        // ]);
        $this->reset();
    }

    public function delete()
    {
        Producto::destroy($this->modelId);
        // $this->dispatchBrowserEvent('event-notification', [
        //     'eventName' => 'Page Deleted :,(',
        //     'eventMessage' => 'The page "' . $this->modelId . '" has been deleted!'
        // ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.productos.index',[
            'productos' => Producto::where('descripcion', 'LIKE', "%{$this->search}%")->latest()->paginate(10),
        ]);
    }

}
