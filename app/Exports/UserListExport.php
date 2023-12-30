<?php

namespace App\Exports;

use App\Models\UserList;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserListExport implements FromCollection, WithHeadings
{
    // public function collection()
    // {
    //     return UserList::all();
    // }

    public function headings(): array
    {
        return [
            'Name',
            'Phone',
            'Email',
            'Address',
        ];
    }

    public function collection()
    {
        return UserList::all(['name', 'phone', 'email', 'address']);
    }
}