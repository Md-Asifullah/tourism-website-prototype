<x-layout>
    <!-- Carousel -->
    <x-carousel/>
    <!-- Content Template 01 -->
    @php
        $title = "Why Visit Paris";
        $image = "images/eiffel_tower.jpg";
        $description = "The French capital appears to have been created with tourists' delight in mind. Its avenues, public spaces, structures, parks, and monuments entice visitors to return, and many do.

        Visiting the Eiffel Tower, the Arc de Triomphe, and Notre Dame Cathedral are some of the most memorable activities in Paris. The famed Moulin Rouge cabaret performances, a trip through some of the most scenic areas, including Montmartre, or a climb up the Montparnasse Tower must be done in the evening.

        Any time is a wonderful time to travel to Paris. You may either take advantage of the low-cost airlines flying into the city from other European cities or catch one of its direct flights from farther distant places depending on where you fly from. Why not treat your kids to a vacation to Disneyland as a surprise?";
    @endphp
    <x-content_template_01 :title="$title" :image="$image" :description="$description"/>
    
    <!-- Welcome To Paris -->
    @php
        $text = "Welcome To Paris"
    @endphp
    <x-big-text :text="$text"/>
    <!-- Content Template 02 -->
    @php
        $title = "How to organize your trip";
        $image = "images/trip_organization.jpg";
        $description = "We advise learning a little about the history of this special city before visiting it, as well as learning valuable facts about Paris, which will undoubtedly help you plan your trip. 

        All you have to do is pack your luggage and get ready to see one of the most romantic cities in the world after you learn about the top Paris attractions, the must-see museums, the finest neighborhoods to stay in, and the characteristic French food.";
    @endphp
    <x-content_template_01 :title="$title" :image="$image" :description="$description"/>
</x-layout>