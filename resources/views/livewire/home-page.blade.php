<div>
    <x-app-layout>
        <h1
            class="bg-linear-to-r from-lime-200 to-lime-600 bg-clip-text text-5xl font-extrabold text-transparent mt-3 text-center">
            {{-- <h1 class="text-5xl font-bold mb-6 text-lime-300"> --}}
            Calculadora de Pontos de Recompensa
        </h1>
        <div class="h-[calc(100vh-8rem)] flex items-center">
            <div class="ml-[8vw] mr-auto left-0 top-[24%] fixed">
                <div class="grid grid-flow-row-dense grid-cols-2 grid-rows-2 gap-4">
                    <div class="text-white">
                        <div class=" bg-gray-900/50 p-6 rounded-lg shadow-lg">
                            <div class="mb-3 flex justify-center">
                                <livewire:components.coin />
                            </div>
                            <p class="text-lg mb-4">
                                Descubra o valor dos seus pontos de recompensa e veja o que você pode resgatar!
                            </p>
                            <p class="text-md">
                                Use nossa calculadora simples para converter seus pontos em valores reais.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ml-auto mr-[8vw] right-0 top-[24%] fixed">
                    <livewire:calculator.calculator />
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
