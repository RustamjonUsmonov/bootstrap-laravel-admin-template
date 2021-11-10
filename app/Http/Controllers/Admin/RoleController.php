<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleUpdateRequest;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(15);
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $permission = Permission::get();
        return view('admin.roles.create', compact('permission'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param RoleCreateRequest $request
     * @return RedirectResponse
     */
    public function store(RoleCreateRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $role = Role::create(['name' => $validated['name']]);
        $role->syncPermissions($validated['permission']);

        return redirect()->route('roles.index')
            ->with('message', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */

    public function show(int $id)
    {
        $role = Role::where('id', $id)->with('permissions:name,id')->first();
        return view('admin.roles.show', compact('role'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */

    public function edit(int $id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        return view('admin.roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoleUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(RoleUpdateRequest $request, int $id): RedirectResponse
    {
        $validated = $request->validated();
        $role = Role::find($id);
        $role->update(['name' => $validated['name']]);

        $role->syncPermissions($validated['permission']);
        return redirect()->route('roles.index')
            ->with('message', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')
            ->with('message', 'Role deleted successfully');
    }
}
