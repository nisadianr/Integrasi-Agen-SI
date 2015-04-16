<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function login(){
        return view('login');
    }

    public function about(){
        return view('about');
    }

    public function akap(){
        return view('akap');
    }

    public function pariwisata(){
        return view('pariwisata');
    }

    public function pemesanan(){
        return view('pemesanan');
    }
}
