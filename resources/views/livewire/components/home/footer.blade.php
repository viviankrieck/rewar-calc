<footer class="fixed bottom-0 z-20 w-full border-t border-green-500/10 bg-black/40 backdrop-blur-xl">
    <div class="max-w-7xl mx-auto px-6 py-3 flex flex-col sm:flex-row items-center justify-between gap-3">

        <div class="flex items-center gap-3 hidden sm:block">
            <div class="leading-tight">
                <p class="text-sm font-semibold text-gray-200">
                    RewarCalc™
                </p>
                <p class="text-xs text-gray-500">
                    Reward Calculator
                </p>
            </div>
        </div>

        <nav>
            <ul class="flex items-center gap-6 text-sm text-gray-400">
                <li>
                    <a href="{{ route('home') }}" wire:navigate class="hover:text-green-400 transition-colors">
                        Início
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}" wire:navigate class="hover:text-green-400 transition-colors">
                        Sobre nós
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}" wire:navigate class="hover:text-green-400 transition-colors">
                        Contato
                    </a>
                </li>
            </ul>
        </nav>

        <div class="text-xs text-gray-500">
            © 2025 RewarCalc™
        </div>

    </div>
</footer>
