<?php

namespace App\Controllers;

use App\Models\VisitorModel;

class Home extends BaseController
{
    public function index()
    {
        $visitorModel = new VisitorModel();

        // Mendapatkan alamat IP pengunjung (Anda mungkin perlu menangani proxy jika ada)
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Tambahkan pengunjung ke database
        $visitorModel->addVisitor($ipAddress);

        return view('welcome_message');
    }
}
