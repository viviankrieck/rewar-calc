<div>
    <x-app-layout>
        <div class="overflow-auto max-h-[calc(100vh-150px)]">
            <div
                class="bg-gradient-to-r from-green-900/40 to-green-900/20 backdrop-blur-sm shadow-2xl py-2 border border-green-900/30">
                <h1
                    class="title-gradient text-4xl sm:text-5xl font-extrabold text-transparent text-center drop-shadow-lg">
                    Calculadora de Pontos de Recompensa
                </h1>
            </div>
            <div class="flex flex-col sm:flex-row items-center sm:justify-between px-[6vw] gap-6 mt-8">

                <!-- Calculadora primeiro em mobile -->
                <div class="w-full sm:w-[45%] order-1 sm:order-2">
                    <livewire:calculator.calculator />
                </div>

                <!-- Componente de moeda abaixo em mobile -->
                <div class="w-full sm:w-[45%] order-2 sm:order-1">
                    <div class=" p-8 rounded-xl bg-glass">
                        <div class="mb-6 flex justify-center">
                            <livewire:components.coin />
                        </div>
                        <p class="text-xl mb-4 text-gray-200 leading-relaxed text-center">
                            Descubra o valor dos seus pontos de recompensa e veja o que você pode resgatar!
                        </p>
                        <p class="text-md text-gray-300 text-center">
                            Use nossa calculadora simples para converter seus pontos em valores reais.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
