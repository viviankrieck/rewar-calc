{{-- Sem recuo: Alinhando os textos totalmente à esquerda dentro do bloco, para que o Markdown seja renderizado corretamente --}}
<x-mail::message>
# Novo contato recebido!

**Assunto:** {{ $formData['subject'] }}

**Nome:** {{ $formData['name'] }}

**E-mail:** {{ $formData['email'] }}


**Mensagem:** {{ $formData['message'] }}

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
