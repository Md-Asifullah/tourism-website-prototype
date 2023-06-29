<x-layout>
    <!-- Featured Header -->
    @php
        $class="about-featured";
        $text="About";
    @endphp
    <x-featured_header :class="$class" :text="$text"/>
    <!-- Content template 02 -->
    <x-content_template_02/>
    <!-- Images -->
    <div class="container mt-5">
    </div>
        <div class="row">
            <div class="col-3">
            @php
                $image = "images/about_01.jpg";
                $caption = "Cathédrale Notre-Dame de Paris, Paris, France"
            @endphp
                <x-photo_caption :image="$image" :caption="$caption"/>
            </div>
            <div class="col-3">
            @php
                $image = "images/about_02.jpg";
                $caption = "Galerie Vivienne, Paris, France"
            @endphp
                <x-photo_caption :image="$image" :caption="$caption"/>
            </div>
            <div class="col-3">
            @php
                $image = "images/about_03.jpg";
                $caption = "Paris, Île-de-France, France"
            @endphp
                <x-photo_caption :image="$image" :caption="$caption"/>
            </div>
            <div class="col-3">
            @php
                $image = "images/about_04.jpg";
                $caption = "Paris, Île-de-France, France"
            @endphp
                <x-photo_caption :image="$image" :caption="$caption"/>
            </div>
        </div>
    </div>
</x-layout>