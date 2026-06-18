@props(['href' => '#'])

<a class="group relative bg-mat-dark-blue text-mat-light-blue text-sm px-2.5 py-2 rounded-lg overflow-hidden"
    href={{ $href }}>
    <div
        class="group-hover:top-1/2 group-hover:left-0 group-hover:-translate-y-1/2 scale-120 transition-all duration-700 absolute top-full left-full rounded-full w-full aspect-square bg-mat-light-blue">
    </div>
    <div class="relative group-hover:text-mat-dark-blue transition-colors duration-600">
        {{ $slot }}
    </div>
</a>
