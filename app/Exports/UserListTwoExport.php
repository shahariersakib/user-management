<?php

namespace App\Exports;

use App\Models\UserListTwo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserListTwoExport implements FromCollection, WithHeadings
{
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
        return UserListTwo::all(['name', 'phone', 'email', 'address']);
    }
}