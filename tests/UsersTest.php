<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    use DatabaseTransactions;

    public function testUsersPageListsUsers()
    {

    }

    public function testCreateUser()
    {

    }

    public function testShowUser()
    {

    }

    public function testEditUser()
    {

    }

    public function testValidateUser()
    {

    }

    private function login()
    {
        $this->visit('/login')
            ->type('a@a.a', 'email')
            ->type('dadada', 'password')
            ->press('submit');
    }
}
