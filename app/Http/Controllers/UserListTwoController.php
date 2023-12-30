<?php

namespace App\Http\Controllers;

use App\Models\UserListTwo;
use App\Exports\UserListTwoExport;
use App\Imports\UserListTwoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserListTwoController extends Controller
{
    public function index()
    {
        $userListTwos = UserListTwo::all();
        return view('user-list-two.index', compact('userListTwos'));
    }

    public function create()
    {
        return view('user-list-two.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        UserListTwo::create($request->all());

        return redirect()->route('user-list-two.index')
            ->with('success', 'UserListTwo created successfully');
    }

    public function show(UserListTwo $userListTwo)
    {
        return view('user-list-two.show', compact('userListTwo'));
    }

    public function edit(UserListTwo $userListTwo)
    {
        return view('user-list-two.edit', compact('userListTwo'));
    }

    public function update(Request $request, UserListTwo $userListTwo)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $userListTwo->update($request->all());

        return redirect()->route('user-list-two.index')
            ->with('success', 'UserListTwo updated successfully');
    }

    public function destroy(UserListTwo $userListTwo)
    {
        $userListTwo->delete();

        return redirect()->route('user-list-two.index')
            ->with('success', 'UserListTwo deleted successfully');
    }

    public function export()
    {
        return Excel::download(new UserListTwoExport, 'user_list_two.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        Excel::import(new UserListTwoImport, $request->file('file'));

        return redirect()->route('user-list-two.index')->with('success', 'Users imported successfully');
    }
}