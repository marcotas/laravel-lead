<x-guest-layout>
    <div class="bg-slate-800 text-white h-screen">
        <div class="flex-col space-y-4 max-w-3xl mx-auto text-center pt-[200px]">
            <h1 class="text-[48px] font-bold">Obrigado {{ request()->name }}!</h1>
            <p class="text-[28px] opacity-80 font-semibold leading-8">Você está quase lá! Para garantir que você vai receber um email com as informações, por favor confirme seu email clicando no link que acabamos de te enviar.</p>
        </div>
    </div>
</x-guest-layout>
