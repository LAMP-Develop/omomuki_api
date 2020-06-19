<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Restaurant::query();
        dd($query);

        // URLから値を取得
        $zipcode = $request->input('zipcode');
        $pref = $request->input('pref');
        $genre = $request->input('genre');
        $parking_flag = $request->input('parking_flag');
        $credit_card = $request->input('credit_card');
        $electronic_money = $request->input('electronic_money');

        if(!empty($zipcode)){

        }

        if(!empty($pref)){

        }

        if(!empty($genre)){

        }

        if(!empty($parking_flag)){

        }

        if(!empty($credit_card)){

        }

        if(!empty($electronic_money)){

        }
        $pages = 1;
        return response(Restaurant::all());
        // if ($request->input('page')) {
        //     $pages = $request->input('page');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Restaurant::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
