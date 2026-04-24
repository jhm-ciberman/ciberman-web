@props(['image', 'title'])

<div class="mx-4 my-12 overflow-hidden rounded-sm bg-stone-100 ring-8 ring-cyan-600 ring-offset-8 ring-offset-stone-100 md:flex">
    <div class="flex w-full shrink-0 items-center md:w-1/2">
        <img class="flex w-full items-center bg-stone-400 object-cover" src="{{ $image }}" alt="{{ $title }}">
    </div>
    <div class="flex-auto p-6 md:ml-2 md:grow md:p-4">
        <div class="mb-4 font-display text-base tracking-wide text-red-600 uppercase">{{ $title }}</div>
        <div class="mt-2 text-justify text-base text-stone-600">
            {{ $slot }}
        </div>
        <div class="mt-4 flex items-center justify-end space-x-2">
            <div class="font-display text-sm">Play:</div>
            {{ $footer }}
        </div>
    </div>
</div>
