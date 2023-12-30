<?php

namespace App\Imports;

use App\Models\UserListTwo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserListTwoImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new UserListTwo([
            'name' => $row['name'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'address' => $row['address'],
        ]);
    }
}