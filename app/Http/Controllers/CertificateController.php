<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Certificate;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificate.certificate', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // generates 10digits number 
        // $number = mt_rand(1000000000, mt_getrandmax());
        $number = mt_rand(10000000, 99999999);
        // return $number;
        return view('admin.certificate.create', compact('number'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'certnumber'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'grade'=>'required'
        ]);

        $certificate = new Certificate;
        // $certificate->certnumber = $request->certnumber;
        $number = $request->certnumber;

        // return $number;
        $test = Certificate::where('certnumber', $number)->exists();
        if ($test) {
            return $number;
        }
        else
            $certificate->certnumber = $number;
            $certificate->firstname = $request->firstname;
            $certificate->lastname = $request->lastname;
            $certificate->grade = $request->grade;
            $certificate->save();
            $request->session()->flash('alert-success', 'Certificate created successfully!');
            return redirect(route('certificates.create'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate = Certificate::where('id', $id)->first();
        return view('admin.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Certificate::where('id', $id)->delete();
        return redirect()->back();
    }
}
