<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Order;

class OrderController extends Controller
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
     * Show the order.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.index', ['orders' => Order::paginate()]);
    }

    /**
     * Create the order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['dental_engineers' => Company::paginateDentalEngineer()];
        return view('order.create', $data);
    }
}
