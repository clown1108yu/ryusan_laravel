<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
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
        $data['patients']=DB::table('patients')
        ->get();
        return view('patient.index')->with([
		    "procname" => "patient",
            "user" => $user,
            "company_id" => $company_id,
            "data" => $data['patients']
         ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $company_id=$user->company_id; 
        $patient = new Patient();
        // タイトル
        $patient->name = $request->name; 
        $patient->company_id = $request->company_id;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        // インスタンスの状態をデータベースに書き込む
        $patient->save();    
        $user = Auth::user();
        $data['patients']=DB::table('patients')
        ->get();
        return view('patient.index')->with([
            "procname" => "patient",
            "user" => $user,
            "company_id" => $company_id,
            "data" => $data['patients']
         ]);
    }

}
