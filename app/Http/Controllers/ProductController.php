<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Product()
    {
        return view('Product');
    }
    public function about()
    {
        return view('about-us');
    }
    public function news()
    {
        return view('News');
    }
    public function program()
    {
        return view('Program');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
  //  public function artikel()
    //{
      //  return view('artikel');
    //}
}