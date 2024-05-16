<x-layout>
    <div class="grid gap-4 grid-cols-2 mt-5">
        @foreach($cars as $car)
            <div class="rounded-md bg-slate-200 shadow-md border-teal-400 p-3">
                <div class="flex flex-row">
                    <div class="w-1/2 h-48 overflow-hidden">
                        @if($car->photo!==null)
                        <img src="{{ asset('storage/' . $car->photo) }}">
                        @else
                        <img src="{{ asset('storage/no-img.jpg') }}">
                        @endif
                    </div>
                    <div class="grid w-1/2 p-2 flex content-between">
                        <a href="/cars/{{ $car->id }}" class="block py-6 border border-gray-200 rounded-lg">
                            
                            <div class="text-lg uppercase border border-b-violet-700 border-b-2">{{ $car->car_model }}</div>
                        </a>
                        <div class="uppercase"><span class="font-semibold">Fuel:</span> {{ $car->fuel }}</div>
                        <div class="uppercase"><span class="font-semibold">Transmission:</span> {{ $car->transmission }}</div>
                        <div class="uppercase"><span class="font-semibold">Price:</span> {{ $car->price }}</div>
                        <div class="uppercase"></div>
                        <div class="flex justify-end w-full">
                            <div class="flex justify-end">
                                <a href="/cars/{{ $car->id }}" class="flex justify-center w-full p-auto rounded-md mt-5 text-white bg-teal-400 hover:bg-teal-600 px-2 mr-2">
                                    View Car
                                </a>
                            </div>
                            
                        </div>
                    </div>



                </div>

                
            </div>

        @endforeach
    </div>
    
</x-layout>
