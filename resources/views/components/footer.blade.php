
    <footer class="flex justify-center items-center mt-20 bg-slate-500 w-full h-20">
        <div class="text-sm text-white"> &copy; 2024 Faris Mehic. All rights reserved.</div>
        <div>        
            <img src="{{ asset('storage/farCarLogo-dark.svg') }}" alt="Logo">
        </div>
        <div>
            {{ $slot }}
        </div>

    </footer>

