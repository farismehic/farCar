<x-layout>
    <div class="flex justify-center mt-5 ">
        <form method="POST" action="/cars/{{ $car->id }}" class="flex flex-col w-1/2 bg-slate-200 px-10 py-10 rounded-md space-y-2 shadow-lg">
            @csrf
            @method('PATCH')
            <div class="mb-4 my-4 border-b-4 border-slate-500 m-auto">
                <h3 class="text-lg">Edit car {{ $car->car_model }}</h3>
            </div>
            <div class="flex flex-row space-x-6">
                <div class="flex flex-col w-1/2">
                    <!--Car name -->
                    <div class="flex flex-col">
                        <x-form-label for="car_model">Car model</x-form-label>
                        <input name="car_model" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->car_model }}" required>
                        @error('car_model')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!--Sport, family -->
                    <div class="flex flex-col">
                        <x-form-label for="type">Type</x-form-label>
                        <input name="type" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->type }}">
                    </div>

                    <!--km -->
                    <div class="flex flex-col">
                        <x-form-label for="miles">Mileage</x-form-label>
                        <input name="miles" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->miles }}" required>
                        @error('miles')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!--Diesel, Petrol, Electric, LPG, Hybrid, Ethanol -->
                    <div class="flex flex-col">
                        <x-form-label for="fuel">Fuel</x-form-label>
                        <input name="fuel" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->fuel }}" required>
                        @error('fuel')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!--Automatic, Manual, Semi-automatic -->
                    <div class="flex flex-col">
                        <x-form-label for="transmission">Transmission</x-form-label>
                        <input name="transmission" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->transmission }}">
                    </div>
                </div>

                <div class="flex flex-col w-1/2">
                    <!--Color -->
                    <div class="flex flex-col">
                        <x-form-label for="exterior">Exterior</x-form-label>
                        <input name="exterior" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->exterior }}">
                    </div>

                    <!--Color -->
                    <div class="flex flex-col">
                        <x-form-label for="interior">Interior</x-form-label>
                        <input name="interior" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->interior }}">
                    </div>

                    <!--Engine -->
                    <div class="flex flex-col">
                        <x-form-label for="engine">Engine</x-form-label>
                        <input name="engine" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->engine }}">
                    </div>

                    <!--Air conditioning, navigation, heated front seats -->
                    <div class="flex flex-col">
                        <x-form-label for="features">Features</x-form-label>
                        <input name="features" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->features }}">
                    </div>

                    <!--Price -->
                    <div class="flex flex-col">
                        <x-form-label for="price">Price</x-form-label>
                        <input name="price" type="text" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->price }}">
                    </div>
                </div>
            </div>
            <!--Photos -->
            <div class="flex flex-col">
                <x-form-label for="photo">Upload a photo</x-form-label>
                <input name="photo" type="file" class="rounded-md py-1 outline-slate-500 px-2" value="{{ $car->photo }}">
            </div>
            <div class="flex flex-row justify-center mx-2">
                <x-primary-button type="submit">Edit</x-primary-button>
                <a href="/cars/{{ $car->id }}" class="rounded-md py-2 px-2 ml-2 border border-2 border-slate-500">Back</a>

            </div>

        </form>
    </div>
</x-layout>