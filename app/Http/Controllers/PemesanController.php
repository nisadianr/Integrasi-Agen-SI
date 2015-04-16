<?php namespace App\Http\Controllers;

use App\pemesan
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('pemesanan');
    }
}
