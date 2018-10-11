<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Certificate;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $certificates = Certificate::count();
        return view('admin.index', compact('certificates'));
    }

    public function index(){
        return view('user.index');
    }

    // public function admin()
    // {
    //     $certificates = Certificate::all();
    //     return view('admin.certificate.certificate', compact('certificates'));
    // }

    public function search(Request $request){
        if ($request->has('certnumber')) {
            $certnumber = $request->input('certnumber');
            // return $certnumber;
            $certificate = Certificate::where('certnumber', $certnumber)->get()->first();
            // return $certificate;
            return view('user.certificate', compact('certificate'));
        }
        else
            return redirect('');
        
    }
}
