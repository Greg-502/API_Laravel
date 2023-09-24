<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use App\Http\Resources\RolesResource;
use App\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        return RolesResource::collection(Role::all());
    }

    public function create(RolesRequest $request)
    {
        $role = Role::create($request->all());

        return (new RolesResource($role))->additional([
            'message' => 'Role creado correctamente.'
        ]);
    }

    public function show(Role $role)
    {
        return new RolesResource($role);
    }

    public function update(UpdateRolesRequest $request, Role $role)
    {
        $role->update($request->all());

        return (new RolesResource($role))->additional([
            'message' => 'Role actualizado correctamente'
        ]);
    }

    public function destroy($id)
    {
        //
    }
}
