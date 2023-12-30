<?php

namespace App\Imports;

use App\Models\UserList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserListImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new UserList([
            'name' => $row['name'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'address' => $row['address'],
        ]);
    }
}