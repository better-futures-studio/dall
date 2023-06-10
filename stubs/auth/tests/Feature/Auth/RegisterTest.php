<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /** @test */
    public function registration_page_contains_livewire_component()
    {
        $this->get(route('register'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.register');
    }

    /** @test */
    public function is_redirected_if_already_logged_in()
    {
        $user = User::factory()->create();

        $this->be($user);

        $this->get(route('register'))
            ->assertRedirect(route('home'));
    }

    /** @test */
    public function a_user_can_register()
    {
        Event::fake();

        Livewire::test('auth.register')
            ->set('name', 'Dall Stack')
            ->set('email', 'dallstack@example.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertRedirect(route('home'));

        $this->assertTrue(User::whereEmail('dallstack@example.com')->exists());
        $this->assertEquals('dallstack@example.com', Auth::user()->email);

        Event::assertDispatched(Registered::class);
    }

    /** @test */
    public function name_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', '')
            ->call('register')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test */
    public function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('email', '')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    public function email_is_valid_email()
    {
        Livewire::test('auth.register')
            ->set('email', 'dallstack')
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    public function email_hasnt_been_taken_already()
    {
        User::factory()->create(['email' => 'dallstack@example.com']);

        Livewire::test('auth.register')
            ->set('email', 'dallstack@example.com')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    public function see_email_hasnt_already_been_taken_validation_message_as_user_types()
    {
        User::factory()->create(['email' => 'dallstack@example.com']);

        Livewire::test('auth.register')
            ->set('email', 'smallstack@gmail.com')
            ->assertHasNoErrors()
            ->set('email', 'dallstack@example.com')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    public function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('password', '')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function password_is_minimum_of_eight_characters()
    {
        Livewire::test('auth.register')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }

    /** @test */
    public function password_matches_password_confirmation()
    {
        Livewire::test('auth.register')
            ->set('email', 'dallstack@example.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'not-password')
            ->call('register')
            ->assertHasErrors(['password' => 'same']);
    }
}
