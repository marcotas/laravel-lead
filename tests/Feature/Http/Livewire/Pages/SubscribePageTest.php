<?php

use App\Http\Livewire\Pages\SubscribePage;
use Database\Factories\SubscriberFactory;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

it('has subscribe page', function () {
    this()->get(route('subscribe'))->assertStatus(200);
});

it('it requires name', function () {
    livewire(SubscribePage::class)
        ->set('name', '')
        ->call('subscribe')
        ->assertHasErrors([
            'name' => 'required',
        ])
        ->assertSeeHtml(trans('validation.required', ['attribute' => 'name']));
});

it('it requires email', function () {
    livewire(SubscribePage::class)
        ->set('email', '')
        ->call('subscribe')
        ->assertHasErrors([
            'email' => 'required',
        ])
        ->assertSeeHtml(trans('validation.required', ['attribute' => 'email']));
});

it('it requires a valid email', function () {
    livewire(SubscribePage::class)
        ->set('email', 'jetete')
        ->call('subscribe')
        ->assertHasErrors([
            'email' => 'email',
        ])
        ->assertSeeHtml(trans('validation.email', ['attribute' => 'email']));
});

it('it stores name and email in the subscribers table', function () {
    livewire(SubscribePage::class)
        ->set('name', 'Marco')
        ->set('email', 'marco@mail.com')
        ->call('subscribe')
        ->assertHasNoErrors()
        ->assertRedirect(route('subscribed'));

    assertDatabaseHas('subscribers', [
        'name' => 'Marco',
        'email' => 'marco@mail.com',
    ]);
});

it('it ignores existing emails displaying success page anyways', function () {
    // Arrange
    $subscriber = SubscriberFactory::new()->create();

    // Act and Assert
    livewire(SubscribePage::class)
        ->set('name', 'Marco')
        ->set('email', $subscriber->email)
        ->call('subscribe')
        ->assertHasNoErrors()
        ->assertRedirect(route('subscribed'));

    assertDatabaseCount('subscribers', 1);
    assertDatabaseHas('subscribers', [
        'name' => $subscriber->name,
        'email' => $subscriber->email,
    ]);
});
