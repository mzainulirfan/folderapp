<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/dashboard/dashboard', $data);
    }
    // public function products()
    // {
    //     $data = [
    //         'title' => 'Product lists'
    //     ];
    //     return view('admin/product/list', $data);
    // }
}
