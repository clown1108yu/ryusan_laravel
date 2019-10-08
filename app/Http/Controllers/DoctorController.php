<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $company_id=$user->company_id; 
        
        //データベースからレコードを配列で取得
        $data['doctors']=DB::table('doctors')
        ->get();
        return view('doctor.index')->with([
		    "procname" => "doctor",
            "user" => $user,
            "company_id" => $company_id,
            "data" => $data['doctors']
         ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $company_id=$user->company_id; 
        $doctor = new Doctor();
        // タイトル
        $doctor->name = $request->name; 
        $doctor->company_id = $request->company_id;
        $data['doctors']=DB::table('doctors')
        ->get();
        // インスタンスの状態をデータベースに書き込む
        $doctor->save();    
        $user = Auth::user();
        return view('doctor.index')->with([
            "procname" => "doctor",
            "user" => $user,
            "company_id" => $company_id,
            "data" => $data['doctors']
         ]);
        //
    }

}
