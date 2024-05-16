
<x-layout>
    <div class="flex justify-center mt-5">
        <div>
            <div class="grid grid-cols-4 gap-4">
                <div>User</div>
                <div>Email</div>
                <div>Phone</div>
                <div class="flex justify-center">Actions</div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                @foreach($users as $user) 
                <div>{{ $user->name }}</div>
                <div>{{ $user->email }}</div>
                <div>{{ $user->phone }}</div>
                <div class="flex justify-center space-x-3">
                    <a href="/users/{{ $user->id }}/edit"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button></button>

                    <form action="/users/{{ $user->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>

