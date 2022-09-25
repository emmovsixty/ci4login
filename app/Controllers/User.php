<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class User extends BaseController
{
    public function index()
    {
        // $th = date('Y');
        // $wk = Time::now();
        // $waktu = $wk->toTimeString();
        // $dateTime = $th . $waktu;
        // $result = preg_replace("/[^a-zA-Z0-9]/", "", $dateTime);
        $data = [
            'title' => 'Home Page',
            // 'tanggal' => $result,
        ];
        return view('user/index', $data);
    }

    public function admin()
    {
        return view('admin/index');
    }
}
