@props(['href'])

<a href="{{ $href }}"
   class="relative px-3 py-2 text-slate-600 dark:text-slate-300
          hover:text-blue-600 dark:hover:text-white transition
          after:absolute after:left-0 after:-bottom-1 after:h-[2px]
          after:w-0 after:bg-blue-600 after:transition-all
          hover:after:w-full">
    {{ $slot }}
</a>
