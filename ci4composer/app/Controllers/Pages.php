<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | Unipdu Press' , 
            'tes' => ['satu' , 'dua' , 'tiga']
        ];

        return view('pages/home', $data);

    }
    public function about()
    {
        $data = [
            'title' => 'Tentang | Unipdu Press'
        ];
    
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Unipdu Press',
            'alamat' => [
                [
                    'tipe' => 'Rumah', 
                    'alamat' => 'Desa Kalipang Kec.Sarang',
                    'kota' => 'Rembang'
                ],
                ['tipe' => 'Kantor',
                'alamat' => 'Sarang Rembang',
                'kota' => 'Rembang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}