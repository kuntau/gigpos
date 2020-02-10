<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * undocumented function
     *
     * @return view
     */
    public function index(Request $request)
    {
      return view('pos.index');
    }

    /**
     * undocumented function
     *
     * @return view
     */
    public function cashier(Request $request)
    {
      return view('pos.cashier');
    }
}
