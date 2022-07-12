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

    // protected $queryString = [
    //     'nombre' => ['except' => ''],
    // ];

    public $id_producto, $imagen, $descripcion, $precio, $categoria;
    public $modal = false;

    public function render()
    {
        return view('livewire.productos.index');
    }

   

}
