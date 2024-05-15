@props(['active' => false])

<a class="{{ $active ? 'bg-teal-400 text-white': 'text-slate-300 hover:text-size-1.2 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}
</a>