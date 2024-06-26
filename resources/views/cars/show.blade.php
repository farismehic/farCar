<x-layout>
    <div>
        <div class="flex flex-row mx-auto bg-slate-200 rounded-md p-2 mt-5">
            <div class="w-1/2">
                @if($car->photo!==null)
                <img src="{{ asset('storage/' . $car->photo) }}">
                @else
                <img src="{{ asset('storage/no-img.jpg') }}" class="h-80">
                @endif
            </div>
            <div class="w-1/2 p-2 flex flex-col mx-5">
                <div class="flex flex-col justify-start">
                    <div class="text-xl uppercase border border-b-violet-700 border-b-2">{{ $car->car_model }}</div>
                    <div><span class="uppercase font-semibold">Type: </span>{{ $car->type }}</div>
                    <div><span class="uppercase font-semibold">Mileage: </span>{{ $car->miles }}</div>
                    <div><span class="uppercase font-semibold">Fuel: </span>{{ $car->fuel }}</div>
                    <div><span class="uppercase font-semibold">Transmission: </span>{{ $car->transmission }}</div>
                    <div><span class="uppercase font-semibold">Exterior: </span> {{ $car->exterior }}</div>
                    <div><span class="uppercase font-semibold">Interior: </span>{{ $car->interior }}</div>
                    <div><span class="uppercase font-semibold">Engine: </span> {{ $car->engine }}</div>
                    <div><span class="uppercase font-semibold">Features: </span> {{ $car->features }}</div>
                    <div><span class="uppercase font-semibold">Price: </span> {{ $car->price }}</div>
                </div>
                
                <!-- Delete Car Form -->
                <div class="flex justify-start mt-5">
                    @auth 
                    @if(auth()->user()->is_admin)
                    <a href="/cars/{{ $car->id }}/edit" class="rounded-md bg-blue-500 hover:bg-blue-700 text-white p-1">Edit</a>

                    <form action="/cars/{{ $car->id }}" method="POST" class="rounded-md bg-red-500 hover:bg-red-700 text-white p-1 ml-2 mr-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    @endif
                    <a href="/" class="rounded-md bg-slate-500 hover:bg-slate-700 text-white p-1">
                        Arrange Test Ride
                    </a>
                </div>
                @endauth
                @guest
                <div class="font-semibold"> <a href="/register" class="text-teal-400 hover:underline">Register</a> to arange test drive!</div>
                @endguest
            </div>
        </div>
    </div>
</x-layout>
