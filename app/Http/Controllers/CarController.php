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
    
        if (request()->hasFile('photo')) {
            $data['photo'] = request()->file('photo')->store('photos');
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
        $data = request()->validate([
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

        if (request()->hasFile('photo')) {
            $photoPath = request()->file('photo')->store('photos', 'public');
            $data['photo'] = $photoPath;
        }

        $car->update($data);
        return redirect('/cars');
    }

    public function destroy(Car $car, $id)
    {
        $car = Car::findOrFail($id)->delete();
        return redirect('/cars');
    }

}