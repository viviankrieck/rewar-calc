<div>
    <div class="text-center mt-10">
        <h1 class="text-4xl md:text-5xl title-gradient">Fale Conosco</h1>
        <p class="mt-4 text-lg text-gray-300">Estamos aqui para ajudar! Envie sua mensagem e entraremos em contato o mais
            breve possível.</p>
    </div>
    <div class="flex justify-center md:justify-evenly gap-6 flex-wrap md:mx-10 mx-1 mt-2 mb-10">
        <div class="card max-w-4xl mx-auto p-2 rounded-lg bg-glass mt-2 md:flex-5">
            <div class="card-body">
                <h1 class="text-3xl font-bold mb-4">Contato</h1>
                <p class="mb-4">Em caso de dúvidas, sugestões ou feedback, sinta-se à vontade para nos contatar!</p>

                @if (session()->has('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                        <p>
                            Agradecemos por entrar em contato conosco. Responderemos o mais breve possível!
                        </p>
                    </div>
                @endif
                <form class="max-w-full" wire:submit.prevent="send">
                    <div class="mb-2 flex gap-4 items-center">
                        <label for="subject">Assunto</label>

                        <input type="text" id="subject" wire:model="subject" class="input">

                        @error('subject')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2 flex gap-4 items-center w-full">
                        <div class="flex-1">
                            <label for="name" class="block text-sm font-medium text-gray-500">Nome</label>
                            <input type="text" id="name" name="name" wire:model="name"
                                class="input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            @error('name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1">
                            <label for="email" class="block text-sm font-medium text-gray-500">Email</label>
                            <input type="email" id="email" name="email" wire:model="email"
                                class="input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-500">Mensagem</label>
                        <textarea id="message" name="message" rows="4" wire:model="message"
                            class="input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                        @error('message')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="btn inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        wire:loading.attr="disabled" wire:loading.class="opacity-70 !cursor-not-allowed"
                        wire:target="send">
                        <span wire:loading.remove wire:target="send">Enviar Mensagem</span>
                        <span wire:loading wire:target="send" class="inline-flex items-center justify-center gap-2">
                            Enviando...
                        </span>
                    </button>
                </form>
            </div>
        </div>
        <div class="card max-w-4xl mx-auto rounded-lg bg-glass mt-2 md:flex-1 h-max">
            <div class="card-body">
                <h2 class="text-xl font-bold mb-4">Outros Canais de Contato</h2>
                <p class="mb-4">Além do formulário acima, você também pode nos contatar através dos seguintes canais:
                </p>
                <ul class="list-disc list-inside mb-4">
                    <li>Email: <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
