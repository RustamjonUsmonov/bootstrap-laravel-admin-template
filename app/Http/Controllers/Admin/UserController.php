<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

    public function index()
    {
        $users = User::with('roles:id,name')->select(['id', 'name'])->paginate();
        return view('admin.users.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.users.create', compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param UserCreateRequest $request
     * @return RedirectResponse
     */

    public function store(UserCreateRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['affiliate_id'] = uniqid();
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('message', 'User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */

    public function show(int $id): View
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */

    public function edit(int $id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.users.edit', compact('user', 'roles', 'userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UserUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */

    public function update(UserUpdateRequest $request, int $id): RedirectResponse
    {
        $validated = $request->validated();

        $input = $request->all();
        if ($request->has('password')) {
            $validated['password'] = Hash::make($input['password']);
        }
        $user = User::find($id);

        $user->update($validated);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('message', 'User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */

    public function destroy(int $id): RedirectResponse
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('message', 'User deleted successfully');
    }
}
