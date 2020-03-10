<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarBrand;
use App\CarColor;
use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $travel = Travel::find($id);

        /*
        if ($travel->state == Travel::PICK) {
            return response()->json([
                'success' => 'yes',
            ]);
        }
        */

        if ($travel->state == Travel::FINISHED) {
            return redirect()->route('endtravel.index');
        }

        $car = Car::find($travel->car_id);

        return view('travel', compact('id', 'travel', 'car'));
    }

    public function state($id)
    {
        return Travel::find($id);
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
        Travel::where('id', $id)->update([ 'state' => Travel::CANCELLED ]);

        return redirect()->route('home.index');
    }
}
