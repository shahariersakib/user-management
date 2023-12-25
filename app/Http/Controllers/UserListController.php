<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index()
    {
        $userLists = UserList::all();
        return view('user-list.index', compact('userLists'));
    }

    public function create()
    {
        return view('user-list.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'address' => 'nullable',
        ]);

        UserList::create($request->all());

        return redirect()->route('user-list.index')
        ->with('success', 'User List created successfully');
    }

    public function show(UserList $userList)
    {
        return view('user-list.show', compact('userList'));
    }

    public function edit(UserList $userList)
    {
        return view('user-list.edit', compact('userList'));
    }

    public function update(Request $request, UserList $userList)
    {
        $request->validate([
            'name' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'address' => 'nullable',
        ]);

        $userList->update($request->all());

        return redirect()->route('user-list.index')
        ->with('success', 'User List updated successfully');
    }

    public function destroy(UserList $userList)
    {
        $userList->delete();

        return redirect()->route('user-list.index')
        ->with('success', 'User List deleted successfully');
    }
}