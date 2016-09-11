<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    use DatabaseTransactions;

    public function testUsersPageListsUsers()
    {
        $this->insertUser();

        $this->visit('/users')
            ->seeInElement('a', 'TestUser');
    }

    public function testCreateUser()
    {
        $this->login();

        $this->visit('/users/create')
            ->type('TestUser', 'name')
            ->type('a@aaa.a', 'email')
            ->type('dadada', 'password_edit')
            ->type('dadada', 'password_confirmation')
            ->select([1,2], 'role_list[]')
            ->press('submit')
            ->assertResponseOk();

        $user = User::all()->last();

        $this->assertEquals('TestUser', $user->name);
        $this->assertEquals([1,2], $user->role_list);
    }

    public function testShowUser()
    {
        $this->login();
        $user_id = $this->insertUser();

        $this->visit('/users/'.$user_id.'/show')
            ->seeInElement('h2', 'TestUser');
    }

    public function testEditUser()
    {
        $this->login();
        $user_id = $this->insertUser();

        $this->visit('/users/'.$user_id.'/edit')
            ->type('TestUser1', 'name')
            ->press('submit')
            ->assertRedirectedTo('/users/'.$user_id.'/show')
            ->seeInElement('h2', 'TestUser');
    }

    protected function storeInput($element, $text)
    {
        $this->assertFilterProducesResults($element);
        $element = str_replace('#', '', $element);
        $element = str_replace("[]", "", $element);
        $this->inputs[$element] = $text;
        return $this;
    }

    private function login()
    {
        $this->visit('/login')
            ->type('a@a.a', 'email')
            ->type('dadada', 'password')
            ->press('submit');
    }

    private function insertUser()
    {
        $user = new User();
        $user->name= 'TestUser';
        $user->email = 'aaa@a.a';
        $user->password = bcrypt('dadada');

        $user->save();

        $user->roles()->sync([1, 2, 3]);

        return $user->id;
    }
}
