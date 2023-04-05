<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Businesstax;
use App\Models\TradeLicence;
use Illuminate\Http\Request;
use App\Models\Taxassessment;
use App\Models\TaxCollection;
use App\Models\BusinessTaxCollection;
use App\Models\HouseownerBusinesstax;
use App\Models\CitizenshipCertificate;
use App\Models\HouseOwnerBusinessTaxCollection;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        return view('home');
    }
}
