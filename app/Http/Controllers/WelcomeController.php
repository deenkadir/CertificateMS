<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Certificate;

class WelcomeController extends Controller
{
    public function index(){
    	return view('user.index');
    }

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