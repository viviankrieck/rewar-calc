<div class="text-center text-white">
    <x-card class="bg-black/40 backdrop-blur-sm shadow-2xl border border-green-900/30 w-full">
        <div class="grid grid-flow-col justify-items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2 text-green-400">Cartão presente</h1>
                <h1 class="text-xl font-bold mb-4 text-gray-200">Calculadora de Pontos</h1>
            </div>
        </div>

        <div class="mb-4">
            <x-input type="number" wire:model="points" placeholder="Insira os pontos que deseja calcular" class="w-full"
                invalidate>
            </x-input>
            <span class="text-yellow-200 text-sm mt-1">
                @error('points')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-4">
            <x-button primary wire:click="calculatePoints" class="w-full">Calcular</x-button>
        </div>
        @if ($points_in_value !== null)
            <div class="mt-4 p-5 bg-green-900/20 backdrop-blur-sm rounded-lg border border-green-700/40 shadow-lg">
                <h2 class="text-xl font-semibold mb-2 text-green-400">Resultado:</h2>
                <p class="text-lg text-gray-200">Você pode resgatar até <span class="italic">aproximadamente</span>
                    <span class="font-bold text-green-300">R$
                        {{ $points_in_value }}</span> em
                    prêmios!
                </p>
            </div>
        @endif

        <div class="text-xs text-gray-300 mt-4">
            <p>
                * Os valores são aproximados e podem variar conforme a disponibilidade
                dos prêmios.
            </p>
            <p>
                ** A taxa de conversão utilizada é de
                {{ $conversion_rate }} pontos por R$ 1,00.
            </p>
            <p>
                *** Esta calculadora é apenas uma estimativa e não garante o resgate dos prêmios.
            </p>
        </div>

    </x-card>
</div>
