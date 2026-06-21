<div>
    <!-- Navbar Simples -->
    <nav class="bg-black/60 backdrop-blur-md shadow-lg border-b border-green-900/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Título -->
                <div class="flex items-center cursor-pointer" @click="Livewire.navigate('/')">
                    <img src="{{ asset('/assets/images/logo-2.png') }}" alt="logo" width="30px"
                        class="drop-shadow-lg" />
                    <h1 class="text-xl font-semibold text-green-400 ml-2">
                        Calculadora de Pontos
                    </h1>
                </div>

                <!-- Items da navbar -->
                {{-- <div class="flex items-center space-x-4">
                    <!-- Theme Switch -->
                    <x-theme-switch />
                </div> --}}
            </div>
        </div>
    </nav>
</div>
