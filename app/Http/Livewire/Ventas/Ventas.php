<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;

class Ventas extends Component
{
    // Counts
    public $ventasHoyCount, $ventasAyerCount, $ventasEstaSemanaCount, $ventasEsteMesCount;
    // Sumas
    public $ventasHoy, $ventasAyer, $ventasEstaSemana, $ventasEsteMes;

    public function render()
    {
        $startDay = Carbon::now()->startOfDay();
        $endDay = Carbon::now()->endOfDay();
        $startWeek = Carbon::now()->startOfWeek();
        $endWeek = Carbon::now()->endOfWeek();
        $startMonth = Carbon::now()->startOfMonth();
        $endMonth = Carbon::now()->endOfMonth();

        $this->ventasHoy = 
        $this->ventasAyer
        $this->ventasEstaSemana
        $this->ventasEsteMes
        // Sumas
        Milestone::where('user_id', auth()->id())->whereBetween('created_at', [$startDay, $endDay])->sum('total');

        return view('livewire.ventas.ventas');
    }
}
