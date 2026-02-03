<div>
    <x-app-layout>
        <h1
            class="bg-gradient-to-r from-green-400 via-green-500 to-green-600 bg-clip-text text-5xl font-extrabold text-transparent mt-6 text-center drop-shadow-lg">
            Calculadora de Pontos de Recompensa
        </h1>
        <div class="h-[calc(100vh-14rem)] flex items-center justify-between px-[8vw]">
            <div class="w-[45%]">
                <div class="bg-black/40 backdrop-blur-sm p-8 rounded-xl shadow-2xl border border-green-900/30">
                    <div class="mb-6 flex justify-center">
                        <livewire:components.coin />
                    </div>
                    <p class="text-lg mb-4 text-gray-200 leading-relaxed text-center">
                        Descubra o valor dos seus pontos de recompensa e veja o que você pode resgatar!
                    </p>
                    <p class="text-md text-gray-300">
                        Use nossa calculadora simples para converter seus pontos em valores reais.
                    </p>
                </div>
            </div>
            <div class="w-[45%]">
                <livewire:calculator.calculator />
            </div>
        </div>
    </x-app-layout>
</div>
