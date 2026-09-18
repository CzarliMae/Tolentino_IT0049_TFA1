<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username'  => 'admin',
                'full_name' => 'Sean Bolor',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'John Naetan',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Ervil Matthew',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Heroshi Yomi',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Alek Lumangtad',
                'role'      => 'Staff',
            ],
        ];

        return view('users', $data);
    }
}