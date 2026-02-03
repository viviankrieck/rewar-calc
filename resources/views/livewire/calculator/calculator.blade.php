<div class="text-center text-white">
    <x-card
        class="bg-gradient-to-r from-primary-950/50
    via-primary-900 shadow-sm border-b border-primary-700 w-[400px]">
        <div class="grid grid-flow-col justify-items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2 text-lime-300">Cartão presente</h1>
                <h1 class="text-2md font-bold mb-2">Calculadora de Pontos</h1>
                {{-- <p class="mb-6">
                    Calcule quantos pontos você precisa para resgatar seus prêmios favoritos!

                </p> --}}
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
            <div class="mt-4 p-4 bg-primary-800 rounded-lg">
                <h2 class="text-xl font-semibold mb-2">Resultado:</h2>
                <p class="text-lg">Você pode resgatar até <span class="italic">aproximadamente</span> <span
                        class="font-bold">R$
                        {{ $points_in_value }}</span> em
                    prêmios!</p>
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
