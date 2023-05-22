<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index()
{
    echo "Selamat Datang";

}
public function about()
{
    echo "Nama: Satria Yudhistira<br>";
    echo "NIM: 2041720143";
}
public function article($id)
{
    echo " halaman article ID=$id";
}
}