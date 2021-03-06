<?php

namespace App\Http\Controllers;

use App\Models\LoanSource;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $states = LoanSource::getStates()
            ->get();

        return view('home', compact('states'));
    }
}
