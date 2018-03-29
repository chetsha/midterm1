<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class UpdateUserDataTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUserData()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';


        $this->assertTrue($user->save());
    }
}