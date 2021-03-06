<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name = 'Chetsha';
        $user->email = 'Chets@gmail.com';
        $user->password = '$Baboo';

        $this->assertTrue($user->save());
    }
}
