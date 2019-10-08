<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyMemoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();        
        return view('company_memo.index')->with([
            "procname" => "companymemo",
            "user" => $user
         ]);
    }

}
