<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight2;

class Weight2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        error_log('send json');
        return Weight2::latest()->first()->toJson();
    }

    public function history()
    {
        return Weight2::latest()->take(10)->get()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        error_log($request->input('weight'));
        $w = new Weight2;
        $w->amount = $request->input('weight');
        $w->sensor = 'sens2';
        $w->save();
        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weight $weight)
    {
        //
    }
}
