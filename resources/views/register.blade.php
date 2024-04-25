
<x-layout>
    <div class="flex justify-center mt-5">
        <form class="flex flex-col bg-slate-200 w-1/3 px-10 py-10 rounded-md space-y-2 shadow-lg">
            @csrf
            <div class="mb-4 my-4 border-b-4 border-slate-500 m-auto">
                <h3 class="text-lg">Create your account</h3>
            </div>
            <div class="flex flex-col">
                <label for="name" class="text-sm">Name:</label>
                <input type="text" class="rounded-md">
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-sm">Email:</label>
                <input type="email" class="rounded-md">
            </div>
            <div class="flex flex-col">
                <label for="phone" class="text-sm">Phone:</label>
                <input type="text" class="rounded-md">
            </div>
            <div class="flex flex-col">
                <label for="password" class="text-sm">Password</label>
                <input type="password" class="rounded-md">
            </div>
            
            <div class="flex justify-center">
                <x-submit-button>Register</x-submit-button>
            </div>
        </form>
    </div>
</x-layout>

