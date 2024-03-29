<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($listing) == 0)
            @foreach ($listing as $list)
                <x-listing-card :list="$list" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $listing->links() }}
    </div>
</x-layout>
