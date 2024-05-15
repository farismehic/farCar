<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show($id) {
        $car = Car::findOrFail($id);

        return view('cars.show', compact('car'));
    }

    public function create() {
         return view('cars.create');

    }

    public function store(Request $request) {

        $data = $request->validate([
            'car_model' => ['required', 'string'],
            'type' => ['nullable', 'string'],
            'miles' => ['nullable', 'numeric'],
            'fuel' => ['nullable', 'string'],
            'transmission' => ['nullable', 'string'],
            'exterior' => ['nullable', 'string'],
            'interior' => ['nullable', 'string'],
            'engine' => ['nullable', 'string'],
            'features' => ['nullable', 'string'],
            'price' => ['nullable', 'numeric'],
            'photo' => ['nullable', 'image']
        ]);
    
        // Handle file upload if photo is present
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos');
            $data['photo'] = $photoPath;
        }
    
        Car::create($data);
    
        return redirect('/cars');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', ['car' => $car]);

    }

    public function update(Car $car, $id)
    {
        request()->validate([
            'car_model' => ['required', 'string'],
            'type' => ['nullable', 'string'],
            'miles' => ['required', 'numeric'],
            'fuel' => ['required', 'string'],
            'transmission' => ['nullable', 'string'],
            'exterior' => ['nullable', 'string'],
            'interior' => ['nullable', 'string'],
            'engine' => ['nullable', 'string'],
            'features' => ['nullable', 'string'],
            'price' => ['nullable', 'numeric'],
            'photo' => ['nullable', 'image']
        ]);

        $car = Car::findOrFail($id);

        $car->update([
            'car_model' => request('car_model'),
            'type' => request('type'),
            'miles' => request('miles'),
            'fuel' => request('fuel'),
            'transmission' => request('transmission'),
            'exterior' => request('exterior'),
            'interior' => request('interior'),
            'engine' => request('engine'),
            'features' => request('features'),
            'price' => request('price'),
            'photo' => request('photo'),
        ]);

        return redirect('/cars');
    }

    public function destroy(Car $car, $id)
    {
        $car = Car::findOrFail($id)->delete();
        return redirect('/cars');
    }

}