<?php

namespace App\Http\Controllers;

use App\Travel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driverId = Auth::user()->id;

        $availableTravels = Travel::whereNull('driver_id')
            ->where('state', Travel::CREATED)
            ->get();

        $historyTravels = Travel::where('driver_id', $driverId)
            ->whereIn('state', Travel::getHistoryStates())
            ->orderBy('id', 'DESC')
            ->get();

        $currentTravels = Travel::where('driver_id', $driverId)
            ->whereIn('state', Travel::getInRunningStates())
            ->get();

        return view('driver', compact('historyTravels', 'currentTravels', 'availableTravels'));
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
        $driver = Auth::user();

        $travel = Travel::find($id);

        if ($travel->state == Travel::CREATED) {
            Travel::whereNull('driver_id')
                ->where('id', $id)
                ->update([
                'car_id' => $driver->car_id,
                'driver_id' => $driver->id,
                'state' => Travel::PICK
            ]);
        } elseif ($travel->state == Travel::PICK) {
            Travel::where([
                    'id' => $id,
                    'driver_id' => $driver->id
                ])
                ->update(['state' => Travel::WAITING]);
        } elseif ($travel->state == Travel::WAITING) {
            Travel::where([
                'id' => $id,
                'driver_id' => $driver->id
            ])
                ->update(['state' => Travel::RUNNING]);
        } elseif ($travel->state == Travel::RUNNING) {
            Travel::where([
                'id' => $id,
                'driver_id' => $driver->id
            ])
                ->update(['state' => Travel::FINISHED]);
        }

        return redirect()->route('driver.index');
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
