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

        if ($request->has('zipcode') && $request->get('zipcode') != '') {
            $query->where('zipcode', $request->get('zipcode'));
        }

        if ($request->has('pref') && $request->get('pref') != '') {
            $query->where('pref_id', $request->get('pref'));
        }

        if ($request->has('genre') && $request->get('genre') != '') {
            $query->where('cuisine_genre_id', $request->get('genre'));
        }

        if ($request->has('parking_flag')) {
            $query->where('parking_flag', $request->get('parking_flag'));
        }

        if ($request->has('credit_card')) {
            $query->whereNotNull('credit_card')->where('credit_card', '<>', '');
        }

        if ($request->has('electronic_money')) {
            $query->whereNotNull('electronic_money')->where('electronic_money', '<>', '');
        }

        if ($request->has('gnavi_url')) {
            $query->whereNotNull('gnavi_url')->where('gnavi_url', '<>', '');
        }

        if ($request->has('tabelog_url')) {
            $query->whereNotNull('tabelog_url')->where('tabelog_url', '<>', '');
        }

        if ($request->has('demaecan_url')) {
            $query->whereNotNull('demaecan_url')->where('demaecan_url', '<>', '');
        }

        if ($request->has('ubereats_url')) {
            $query->whereNotNull('ubereats_url')->where('ubereats_url', '<>', '');
        }

        if ($request->has('fixed')) {
            $query->whereNotNull('fixed')->where('fixed', '<>', '');
        }

        $query->orderBy('fixed', 'desc');

        $restaurants = $query->paginate(12);

        return $restaurants;
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
