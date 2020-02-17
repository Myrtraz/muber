<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Travel;
use App\Destiny;

class PlanningController extends Controller
{
    public function planning($lat, $lng, $placeId){
        $plans = Rate::get()->take(3);
        return view('planning', compact('plans', 'lat', 'lng'));
    }

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

        $requestTravel = json_decode($request->travel);

        $distance_in_meters = $this->calculeDistanceInMetersBetweenPoints(
            $requestTravel->destinations[0]->lat,
            $requestTravel->destinations[0]->lng,
            $requestTravel->destinations[1]->lat,
            $requestTravel->destinations[1]->lng
        );

        $travel = Travel::create([
            'user_id' => $currentUserId,
            'rate_id' => $request->rate_id,
            'state' => Travel::CREATED,
            'payment_method' => 'cc',
            'distance_in_meters' => $distance_in_meters,
            'total' => 10000,
        ]);

        $index = 0;

        foreach ($requestTravel->destinations as $destiny) {
            Destiny::create([
                'lat' => $destiny->lat,
                'lng' => $destiny->lng,
                'travel_id' => $travel->id,
                'index' => $index,
            ]);
            
            $index++;
        }

        //Destiny

        return redirect()->route('travel.show', ['id' => $travel->id]);
    }

    /**
     * Haversine
     */
    function calculeDistanceInMetersBetweenPoints(
        $latitudeFrom, 
        $longitudeFrom, 
        $latitudeTo, 
        $longitudeTo, 
        $earthRadius = 6371000
    ) {

      $latFrom = deg2rad($latitudeFrom);
      $lonFrom = deg2rad($longitudeFrom);
      $latTo = deg2rad($latitudeTo);
      $lonTo = deg2rad($longitudeTo);

      $latDelta = $latTo - $latFrom;
      $lonDelta = $lonTo - $lonFrom;

      $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
      
      return $angle * $earthRadius;
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
