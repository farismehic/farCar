@auth
        @if(auth()->user()->is_admin)
        <div class="bg-slate-500">
            <div class="flex justify-end items-center mx-5 py-3 space-x-3">
               <x-dashboard-button href="/users">
                    Dashboard
               </x-dashboard-button>
                <x-dashboard-button href="{{ route('cars.create') }}">
                    Create a car
                </x-dashboard-button>
            </div>
        </div>
        @endif
        @endauth