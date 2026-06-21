<div class="text-center text-white">
    <div class="card bg-black/40 backdrop-blur-sm shadow-2xl border border-green-900/30 w-full p-5">
        <div class="grid grid-flow-col justify-items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2 text-green-400">Cartão presente</h1>
                <h1 class="text-xl font-bold mb-4 text-gray-200">Calculadora de Pontos</h1>
            </div>
        </div>

        <div class="mb-4" x-data="{
            display: '',
            update(value) {
                const digits = value.replace(/\D/g, '');
        
                $wire.set('points', digits ? Number(digits) : null);
        
                this.display = digits ?
                    Number(digits).toLocaleString('pt-BR') :
                    '';
            }
        }">
            <input type="text" class="input input-bordered w-full" placeholder="Insira os pontos" x-model="display"
                wire:loading.attr="disabled" wire:loading.class="opacity-60 cursor-not-allowed"
                wire:target="calculatePoints" wire:keydown.enter="calculatePoints" @input="update($event.target.value)">
            <span class="text-yellow-200 text-sm mt-1">
                @error('points')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-4">
            <button wire:click="calculatePoints"
                class="w-full btn btn-soft bg-green-700 text-green-100 hover:bg-green-800" wire:loading.attr="disabled"
                wire:loading.class="opacity-70 cursor-not-allowed" loading="calculatePoints">
                <span wire:loading.remove wire:target="calculatePoints">Calcular</span>
                <span wire:loading wire:target="calculatePoints" class="inline-flex items-center justify-center gap-2">
                    Calculando...
                </span>
            </button>
        </div>
        @if ($points_in_value !== null)
            <div class="mt-4 p-5 bg-green-900/20 backdrop-blur-sm rounded-lg border border-green-700/40 shadow-lg"
                wire:loading.class="opacity-50 cursor-not-allowed" wire:target="calculatePoints"
                wire:loading.attr="disabled">
                <button class="btn btn-ghost btn-circle btn-xs absolute top-2 right-2 text-gray-300 hover:text-gray-100"
                    wire:loading.attr="disabled" loading="closeResult" wire:click="closeResult">X</button>
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
            <p>
                **** Pontos calculados com base no giftcard personalizado.
            </p>
        </div>

    </div>
</div>
