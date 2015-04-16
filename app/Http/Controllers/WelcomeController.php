<?php namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
<<<<<<< HEAD
=======
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
>>>>>>> 86e6d114e998b8a4547b41aefbf477ed0c4bbfd8
    }
}
