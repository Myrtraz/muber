<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Travel;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $plans = Rate::get()->take(3);
        return view('planning', compact('plans'));
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
        $currentUserId = Auth::user()->id;
        $driver = User::whereNotNull('car_id')->first();

        $travel = Travel::create([
            'user_id' => $currentUserId,
            'driver_id' => $driver->id,
            'car_id' => $driver->car_id,
            'rate_id' => $request->rate_id,
            'state' => 'created',
            'payment_method' => 'cc',
            'distance_in_meters' => 1000,
            'total' => 10000,
        ]);

        return redirect()->route('travel.show', ['id' => $travel->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
