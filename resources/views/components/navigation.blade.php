<div class="flex justify-end gap-5 px-5 py-3">
<a href="/login">Login</a>
<a href="/register">Register</a>

</div>
<nav class="w-full bg-violet-700 h-18 px-5 text-white">
    <div class="flex justify-between">
        <div>
            <a href="/">
                <img src="{{ asset('storage/farCarLogo-dark.svg') }}" class="h-18 hover:scale-125 transition ease-in-out duration-500" alt="Logo">
            </a>
        </div>
        <div class="flex flex-row justify-end items-center gap-5">
            <x-nav-link href="/" :active="request()->is('/')">
                <i class="fa-solid fa-house"></i>
            </x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/shop" :active="request()->is('shop')">Shop</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
    </div>
    
</nav>