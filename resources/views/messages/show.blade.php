<x-layout>
    <!-- Manage Tours -->
    @php
        $text = "Manage Messages"
    @endphp
    <x-big-text :text="$text"/>
    <x-notification/>
    <div class="container table-container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="row">
                  <div class="col-3">From: {{$message->name}}<br />To: Me</div>
                  <div class="col-6"></div>
                  <div class="col-3">{{$message -> created_at -> diffForHumans()}}</div>
              </div>
            </div>
            
            <div class="col-2"></div>
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="row">
                  <div class="col-12">{{$message->message}}</div>
                  
              </div>
            </div>
            
            <div class="col-2"></div>
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="row">
                  <div class="col-4"><a href="/messages/manage" class="btn btn-dark_blue">Back</a></div>
                  
              </div>
            </div>
            
            <div class="col-2"></div>
        </div>
    </div>
</x-layout>