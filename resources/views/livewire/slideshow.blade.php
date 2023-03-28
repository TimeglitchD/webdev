<div>
    <img src="{{Storage::url($photos[$position])}}" class="mx-auto">
    <div class='flex p-6 gap-4 text-gray-900 dark:text-white content-center'>
        <x-grommet-link-previous class="w-4 h-4 "/> 
        @foreach ($photos as $idx => $photo)
            @if ($idx === $position)
                <x-radix-dot-filled fill='currentColor' class="w-4 h-4" />
            @else
                <x-radix-dot class="w-4 h-4" />
            @endif
        @endforeach
        <x-grommet-link-next class="w-4 h-4" />
    </div>
    {{-- The Master doesn't talk, he acts. --}}
</div>