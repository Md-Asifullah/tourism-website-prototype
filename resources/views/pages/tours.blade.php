<x-layout>
    <!-- Featured Header -->
    @php
    $class="tours-featured";
    $text="Tours";
@endphp
<x-featured_header :class="$class" :text="$text"/>
    <div class="container">
        @unless(count($tours) == 0)
        @foreach($tours as $tour)
            <x-tour :tour="$tour"/>
        @endforeach
        @else
            <p>No tours posted yet</p>
        @endunless
    </div>
</x-layout>