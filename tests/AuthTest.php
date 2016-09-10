<?php

use Illuminate\Foundation\Testing\Constraints\PageConstraint;
use Illuminate\Foundation\Testing\Constraints\ReversePageConstraint;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserLogin()
    {
        $this->visit('/login')
            ->type('a@a.a', 'email')
            ->type('dadada', 'password')
            ->press('submit')
            ->seePageIs('/home')
            ->seeInElement('#id_username', 'admin');
    }

    public function testUserRegister()
    {
        $this->visit('/register')
            ->type('test', 'name')
            ->type('test3@test.test', 'email')
            ->type('dadada', 'password')
            ->type('dadada', 'password_confirmation')
            ->press('submit')
            ->seePageIs('/home')
            ->seeInElement('#id_username', 'test');
    }

    public function testUserLogout()
    {
        $this->visit('/logout')
            ->seePageIs('/')
            ->dontSeeElement('#id_username');
    }

}
