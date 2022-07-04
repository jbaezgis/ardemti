<?php

namespace App\Http\Livewire;

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
        'nombre' => ['except' => ''],
    ];

    public $id_producto, $imagen, $descripcion, $precio, $categoria;
    public $modal = false;

    public function render()
    {
        return view('livewire.productos');
    }

    public function crearUsuario()
    {
        $this->cleanFields();
        $this->openModal();
        $this->formType = 'Create';
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
        $this->cleanFields();
        $this->formType = 'Create';
        
    }

    public function cleanFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function editarUsuario($id)
    {
        $usuario = User::findOrFail($id);
        $this->id_usuario = $id;
        $this->name = $usuario->name;
        $this->email = $usuario->email;
        // $this->password = $usuario->password;
        // $this->rol = $usuario->getRoleNames();
        $this->openModal();
    }

    public function eliminarUsuario($id)
    {
        User::find($id)->delete();
        session()->flash('message', __('Usuario Eliminado!'));
    }

    public function saveUsuario()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ];

        if ($this->formType == 'Create')
        {
            User::updateOrCreate(['id'=>$this->id_usuario],$data)->assignRole($this->rol);
        }else{
            User::updateOrCreate(['id'=>$this->id_usuario],$data);
        }

        session()->flash('message', $this->id_usuario ? __('Usuario updated!') : __('Usuario Actualizado!'));
        $this->closeModal();
        $this->cleanFields();
        $this->formType = 'Create';
    }

}
