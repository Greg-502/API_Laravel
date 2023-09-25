<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarRoleRequest;
use App\Http\Requests\ActualizarRoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return RoleResource::collection(Role::all());
    }

    public function store(GuardarRoleRequest $request)
    {
        $role = Role::create($request->all());

        return (new RoleResource($role))->additional([
            'message' => 'Role creado correctamente.'
        ]);
    }

    public function show(Role $role)
    {
        return new RoleResource($role);
    }

    public function update(ActualizarRoleRequest $request, Role $role)
    {
        $role->update($request->all());

        return (new RoleResource($role))->additional([
            'message' => 'Role actualizado correctamente.'
        ]);
    }

    public function destroy(Role $role)
    {
        return response()->json([
            'res' => false,
            'message' => 'No se permite eliminar roles.'
        ], 400);
    }
}
