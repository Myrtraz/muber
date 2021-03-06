<?php

namespace App\Http\Controllers;

use App\Car;
use App\Drivers;
use App\Http\Requests\DriverRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    public function RegisterDriver() {
       return view('Driver.register_Driver');
    }

    public function F(DriverRequest $request) {
        //
        $userDriver = $request->all();
        $userDriver['password'] = bcrypt($userDriver['password']);

        $driver = User::create($userDriver);

        $car = Car::create([
            'license_plate' => '',
            'user_id' => $driver->id,
            'car_model_id' => '1',
            'car_brand_id' => '1',
            'car_color_id' => '1',
        ]);

        $driver->car_id = $car->id;
        $driver->save();

        return redirect()->route('driver.index');
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
    public function store(UserRequest $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);

        User::create($user);

        return redirect()->route('home.index');
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
