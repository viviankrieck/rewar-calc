<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Calculator extends Component
{
    protected function rules()
    {
        return [
            'points' => ['required', 'numeric'],
        ];
    }

    protected function messages()
    {
        return [
            'points.required' => 'Insira um valor válido para calcular os pontos.',
            'points.numeric' => 'O valor dos pontos deve ser um número válido.',
        ];
    }
    public $points = null;

    public string $pointsMasked = '';

    public $conversion_rate = 172.20; // Exemplo de taxa de conversão
    public $calculated_points = null;
    public $points_in_value = null;
    public $selected_option = [
        ['label' => 'cartão presente xbox', 'value' => 1],
        ['label' => 'roblox', 'value' => 2]
    ];
    public $option = 1;

    public function closeResult()
    {
        $this->points_in_value = null;
    }

    public function updatedPointsMasked($value): void
    {
        $digits = preg_replace('/\D+/', '', (string) $value) ?? '';
        $digits = ltrim($digits, '0');

        if ($digits === '') {
            $this->points = null;
            if ($this->pointsMasked !== '') {
                $this->pointsMasked = '';
            }

            return;
        }

        $this->points = (int) $digits;

        $formatted = $this->formatThousands($digits);
        if ($this->pointsMasked !== $formatted) {
            $this->pointsMasked = $formatted;
        }
    }

    private function formatThousands(string $digits): string
    {
        $reversed = strrev($digits);
        $chunks = str_split($reversed, 3);
        return strrev(implode('.', $chunks));
    }

    public function render()
    {
        return view('livewire.components.calculator');
    }

    public function calculatePoints()
    {
        $this->validate();
        $this->points_in_value = round($this->points  / $this->conversion_rate);
    }
}
