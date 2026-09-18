<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Maxwell Mapa',
                'email'     => 'mapa.maxwellk@yahoo.com',
                'phone'     => '09276655678',
            ],
            [
                'full_name' => 'Christian Sayo',
                'email'     => 'sayo.christian@yahoo.com',
                'phone'     => '09181678908',
            ],
            [
                'full_name' => 'Chaelvin Camacho',
                'email'     => 'camacho.chaelvin@yahoo.com',
                'phone'     => '091789234567',
            ],
            [
                'full_name' => 'Eros Piamonte',
                'email'     => 'piamonte.eros@yahoo.com',
                'phone'     => '09206528567',
            ],
            [
                'full_name' => 'Terrence Villanueva',
                'email'     => 'villanueva.terrence@yahoo.com',
                'phone'     => '09790234567',
            ],
        ];

        return view('customers', $data);
    }
}