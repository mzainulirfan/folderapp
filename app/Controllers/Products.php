<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Product lists'
        ];
        return view('admin/product/list', $data);
    }
    public function new()
    {
        $data = [
            'title' => 'Tambah product baru'
        ];
        return view('admin/product/new', $data);
    }
}
