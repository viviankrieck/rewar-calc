<div class="text-center text-white">
    <x-card class="bg-gradient-to-r from-primary-950/20
    via-primary-600 shadow-sm border-b border-primary-700">
        <div class="w-[300px]">
            <h1 class="text-2xl font-bold mb-2">Calculadora de Pontos</h1>
            <p class="mb-4">Calcule quantos pontos você precisa para resgatar seus prêmios favoritos!</p>
        </div>

        <div class="mb-4">
            <x-input type="number" wire:model="points" placeholder="Insira os pontos que deseja calcular" class="w-full">
            </x-input>
        </div>
        <div class="mb-4">
            <x-select.styled :options="[['label' => 'cartão presente xbox', 'value' => 1], ['label' => 'roblox', 'value' => 2]]" wire:model="option"
                placeholder="Selecione a opção que gostaria de simular">
                <x-slot:label>
                    <span>Valor entre R$ 25,00 - R$ 500,00</span>
                </x-slot:label>
            </x-select.styled>
        </div>

    </x-card>
</div>
