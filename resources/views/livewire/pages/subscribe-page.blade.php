<div class="bg-slate-800 text-white h-screen">
    <div class="flex-col space-y-4 max-w-3xl mx-auto text-center pt-[200px]">
        <h1 class="text-[48px] font-bold">Bem vindo(a) Jetete!</h1>
        <p class="text-[28px] opacity-80 font-semibold leading-8">Fico muito feliz de você ter chegado até aqui! Mais feliz ainda eu vou ficar em saber que você se inscreveu para receber mais informações sobre o curso e ridiculamente mais feliz ainda se você decidir ser um beta tester! Tamo junto nessa jornada!</p>

        <div class="flex items-start w-full space-x-3">
            <x-input.text wire:model="name" icon="user-outline" placeholder="Nome Doido" />
            <x-input.text wire:model="email" icon="mail-outline" placeholder="Email" />

            <x-jet-button wire:click="subscribe" class="space-x-2 shrink-0">
                <span>Me inscrever</span>
                <x-icon.check class="w-5 h-5"></x-icon.check>
            </x-jet-button>
        </div>
    </div>
</div>
