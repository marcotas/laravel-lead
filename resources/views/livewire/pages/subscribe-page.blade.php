<div class="bg-slate-800 text-white h-screen">
    <div class="flex-col space-y-4 max-w-3xl mx-auto text-center pt-[200px]">
        <h1 class="text-[48px] font-bold">Bem vindo(a) Jetete!</h1>
        <p class="text-[28px] opacity-80 font-semibold leading-8">Fico muito feliz de você ter chegado até aqui! Mais feliz ainda eu vou ficar em saber que você se inscreveu para receber mais informações sobre o curso e ridiculamente mais feliz ainda se você decidir ser um beta tester! Tamo junto nessa jornada!</p>

        <div>
            <input type="text" wire:model="name" class="border-white outline-none focus:border-white focus:border-opacity- border-opacity-30 bg-white bg-opacity-20 ring-0 focus:ring-0 focus:outline-none rounded-md shadow-sm">

            {{-- TODO: extract to reusable components --}}
            @if($errors->has('name')) <p>{{ $errors->first('name') }}</p> @endif
        </div>

        <div>
            <input type="text" wire:model="email">
            @if($errors->has('email')) <p>{{ $errors->first('email') }}</p> @endif
        </div>

        <button wire:click="subscribe">Subscribe</button>
    </div>
</div>
