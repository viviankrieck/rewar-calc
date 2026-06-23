<div>
    <div class="pb-12">
        <div
            class="bg-gradient-to-r from-green-900/40 to-green-900/20 backdrop-blur-sm shadow-2xl py-2 border border-green-900/30">
            <h1 class="title-gradient text-4xl sm:text-5xl font-extrabold text-transparent text-center drop-shadow-lg">
                Calculadora de Pontos de Recompensa
            </h1>
        </div>
        <div class="flex justify-center md:justify-evenly gap-6 flex-wrap md:mx-10 mx-2 mt-2 mb-5">

            <!-- Calculadora primeiro em mobile -->
            <div class="w-full sm:w-[45%] order-1 sm:order-2 flex-1 md:flex-3">
                <livewire:components.calculator />
            </div>

            <!-- Componente de moeda abaixo em mobile -->
            <div class="w-full sm:w-[45%] order-2 sm:order-1 h-full md:flex-4">
                <div class="p-8 rounded-xl bg-glass">
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
</div>
