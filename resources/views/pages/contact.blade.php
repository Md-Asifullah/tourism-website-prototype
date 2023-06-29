<x-layout>
     <!-- Featured Header -->
     @php
     $class="contact-featured";
     $text="Contact";
 @endphp
 <x-featured_header :class="$class" :text="$text"/>
   <!-- Notification -->
   <x-notification/>
    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-3">
              
            </div>
            <div class="col-6 form-background">
                <form method="POST" action="/contact/create">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="telephone" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark_blue">Submit</button>
                    <a href="/contact/create" class="btn btn-danger">Clear</a>
                </form>
            </div>
            <div class="col-3">
              
            </div>
          </div>
        
    </div>
    <!-- Testimonial -->
    <div class="container testimonial">
        <div class="row">
            <div class="col-3"></div>
          <div class="col-3"><img src="/images/about_03.jpg" class="testimonial-img rounded" alt="..."></div>
          <div class="col-4"><p>"We had a wonderful time on our vacation to Paris and the Loire Valley thanks to Paris Tourism. The route was altered to suit our requirements. All of the drivers and guides were experienced, kind, and informed. The journey went without a hitch. No surprises or glitches. Our days were jam-packed with fun things to do. The accommodations we had were excellent; they were tiny boutique hotels near to the major attractions. We have taken several trips of Europe, but this was by far the finest. Simply perfect."</p>
            <h3 class="testimonial-user">John Doe</h3></div>
          <div class="col-2"></div>
        </div>
      </div>
      <!-- Big Text -->
      @php
        $text = "Come visit Paris!"
    @endphp
    <x-big-text :text="$text"/>
</x-layout>