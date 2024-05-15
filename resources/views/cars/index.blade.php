<x-layout>
    <div class="grid gap-4 grid-cols-2 mt-5">
        @foreach($cars as $car)
            <div class="rounded-md bg-slate-200 shadow-md border-teal-400 p-3">
                <div class="flex flex-row">
                    <div class="w-1/2">
                        <img src="{{ asset('storage/pexels-mikebirdy-112460.jpg') }}">
                    </div>
                    <div class="grid w-1/2 p-2 content-between">
                        <a href="/cars/{{ $car->id }}" class="block py-6 border border-gray-200 rounded-lg">
                            
                            <div class="text-lg uppercase border border-b-violet-700 border-b-2">{{ $car->car_model }}</div>
                        </a>
                        <div class="uppercase"><span class="font-semibold">Fuel:</span> {{ $car->fuel }}</div>
                        <div class="uppercase"><span class="font-semibold">Transmission:</span> {{ $car->transmission }}</div>
                        <div class="uppercase"><span class="font-semibold">Price:</span> {{ $car->price }}</div>
                        <div class="uppercase">{{ $car->photo }}</div>
                        <div class="flex justify-end">
                            <a href="/cars/{{ $car->id }}" class="flex justify-center w-full p-auto rounded-md mt-5 w-2/5 bg-teal-400 mr-2">
                                View Car
                            </a>
                        </div>
                    </div>



                </div>

                
            </div>

        @endforeach
    </div>
    
</x-layout>
