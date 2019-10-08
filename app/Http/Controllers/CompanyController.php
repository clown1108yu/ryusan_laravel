<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $company = Company::find($user->company_id);

        return view('company.index')->with([
            "procname" => "company",
            "company" => $company
         ]);
    }

    public function edit()
    {
        $user = Auth::user();

        $company = Company::find($user->company_id);

        return view('company.index')->with([
            "procname" => "company",
            "company" => $company
         ]);
    }


    public function preview()
    {
        $user = Auth::user();

        $company = Company::find($user->company_id);

        return view('company.preview')->with([
            "procname" => "company",
            "company" => $company
         ]);
    }
}
