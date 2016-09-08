<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::lists('role', 'id');

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();

        $user = new User();

        $this->saveUser($user, $input);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return $user;
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        $roles = Role::lists('role', 'id');

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource     in storage.
     *
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UserRequest $request, User $user)
    {
        $input = $request->all();

        $this->saveUser($user, $input);

        return redirect('/users/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }

    public function validateList(Request $request)
    {
        $users = User::all();
        $users_to_validate = [];

        foreach ($users as $user){
            foreach ($user->roles()->get() as $role){
                if ($role->pivot->confirmed === 0){
                    $user["role_to_validate"] = $role;
                    $users_to_validate[] = $user;
                }
            }
        }
        $users = $users_to_validate;

        return view('users.validate', compact('users'));
    }

    public function validateUser(Request $request, User $user)
    {
        $role = $request->get('role');

        $user->roles()->updateExistingPivot($role, ['confirmed' => 1]);

        return redirect('/users/validate');
    }

    private function saveUser($user, $input)
    {
        $user->name= $input['name'];
        $user->email = $input['email'];
        $user->password = bcrypt($input['password_edit']);
        $roles_input = $input['role_list'];

        $user->save();

        $roles = [];
        if ($roles_input !== null){
            foreach ($roles_input as $role){
                $roles[$role] = ["confirmed" => 1];
            }
        } else {
            $roles = [];
        }

        $user->roles()->sync($roles);
    }
}
