
<x-layout>
    <div class="flex justify-center mt-5">
        <form method="POST" action="/users/{{ $user->id }}" class="flex flex-col bg-slate-200 w-1/3 px-10 py-10 rounded-md space-y-2 shadow-lg">
            @csrf
            @method('PATCH')

            <div class="mb-4 my-4 border-b-4 border-slate-500 m-auto">
                <h3 class="text-lg">Create your account</h3>
            </div>
            <div class="flex flex-col">
                <x-form-label for="name">Name</x-form-label>
                <input name="name" type="text" value="{{ $user->name }}" class="rounded-md py-1 outline-slate-500 px-2" placeholder="John Doe" required>
                @error('name')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-form-label for="email">Email</x-form-label>
                <input name="email" type="email" value="{{ $user->email }}" class="rounded-md py-1 outline-slate-500 px-2" placeholder="example@email.com" required>
                @error('email')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-form-label for="phone">Phone</x-form-label>
                <input name="phone" type="text" value="{{ $user->phone }}" class="rounded-md py-1 outline-slate-500 px-2" placeholder="+38733123456" required>
                @error('phone')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-center pt-5">
                <x-primary-button type="submit">Update</x-primary-button>
            </div>
        </form>
    </div>
</x-layout>

