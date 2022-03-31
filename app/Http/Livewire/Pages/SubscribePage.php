<?php

namespace App\Http\Livewire\Pages;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribePage extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function subscribe()
    {
        $attributes = $this->validate();

        if (!Subscriber::whereEmail($attributes['email'])->exists()) {
            Subscriber::create($attributes);
        }

        return redirect()->route('subscribed', [ 'name' => $attributes['name'] ]);
    }

    public function render()
    {
        return view('livewire.pages.subscribe-page')->layout('layouts.guest');
    }
}
