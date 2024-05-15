<x-layout>
    <div class="flex justify-center mt-5">
        <div class="flex flex-col bg-slate-200 w-1/3 px-10 py-10 rounded-md space-y-2 shadow-lg">
            <div class="mb-4 my-4 border-b-4 border-slate-500 m-auto">
                <h3 class="text-lg">Login to shop</h3>
            </div>
            <div class="flex flex-col">
                <x-form-label for="email">Email</x-form-label>
                <input type="email" class="rounded-md py-1 outline-slate-500 px-2" placeholder="type your email">
            </div>
            <div class="flex flex-col">
                <x-form-label for="password">Password</x-form-label>
                <input type="password" class="rounded-md py-1 outline-slate-500 px-2" placeholder="type your password">
            </div>
            
            <div class="flex justify-center">
                <x-primary-button>Login</x-primary-button>
            </div>
        </div>
    </div>
</x-layout>
