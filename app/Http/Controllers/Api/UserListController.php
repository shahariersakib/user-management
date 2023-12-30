<?php

namespace App\Http\Controllers\Api;

use App\Models\UserList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserListController extends Controller
{
    public function index(): JsonResponse
    {
        $userLists = UserList::all();
        return response()->json(['data' => $userLists], 200);
    }

    public function create()
    {
        // You can customize this method if needed, but for APIs, you might not need a separate create method.
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'address' => 'nullable',
        ]);

        $userList = UserList::create($request->all());

        return response()->json(['data' => $userList, 'message' => 'User List created successfully'], 201);
    }

    public function show(UserList $userList): JsonResponse
    {
        return response()->json(['data' => $userList], 200);
    }

    public function edit(UserList $userList)
    {
        // You can customize this method if needed.
    }

    public function update(Request $request, UserList $userList): JsonResponse
    {
        $request->validate([
            'name' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'address' => 'nullable',
        ]);

        $userList->update($request->all());

        return response()->json(['data' => $userList, 'message' => 'User List updated successfully'], 200);
    }

    public function destroy(UserList $userList): JsonResponse
    {
        $userList->delete();

        return response()->json(['message' => 'User List deleted successfully'], 200);
    }
}