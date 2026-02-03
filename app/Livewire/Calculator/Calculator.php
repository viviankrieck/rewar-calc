<?php

namespace App\Livewire\Calculator;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Calculator extends Component
{
    #[Validate('required', message: 'Insira um valor válido para calcular os pontos.')]
    public $points = null;

    public $conversion_rate = 163.50; // Exemplo de taxa de conversão
    public $calculated_points = null;
    public $points_in_value = null;
    public $selected_option = [
        ['label' => 'cartão presente xbox', 'value' => 1],
        ['label' => 'roblox', 'value' => 2]
    ];
    public $option = 1;


    public function render()
    {
        return view('livewire.calculator.calculator');
    }

    public function calculatePoints()
    {
        $this->validate();
        $this->points_in_value = round($this->points  / $this->conversion_rate);
    }
}