<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    /** @test */
    public function an_authenticated_user_can_log_out()
    {
        $user = User::factory()->create();
        $this->be($user);

        $this->post(route('logout'))
            ->assertRedirect(route('home'));

        $this->assertFalse(Auth::check());
    }

    /** @test */
    public function an_unauthenticated_user_can_not_log_out()
    {
        $this->post(route('logout'))
            ->assertRedirect(route('login'));

        $this->assertFalse(Auth::check());
    }
}
