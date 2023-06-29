@if(session()->has('tour_created'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"  class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <div class="alert alert-success" role="alert">
          {{session('tour_created')}}
        </div>
      </div>
      <div class="col">
        
      </div>
    </div>
</div>
@endif

@if(session()->has('message_sent'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"  class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <div class="alert alert-success" role="alert">
          {{session('message_sent')}}
        </div>
      </div>
      <div class="col">
        
      </div>
    </div>
</div>
@endif

@if(session()->has('tour_deleted'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"  class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <div class="alert alert-danger" role="alert">
          {{session('tour_deleted')}}
        </div>
      </div>
      <div class="col">
        
      </div>
    </div>
</div>
@endif

@if(session()->has('tour_updated'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"  class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <div class="alert alert-primary" role="alert">
          {{session('tour_updated')}}
        </div>
      </div>
      <div class="col">
        
      </div>
    </div>
</div>
@endif

@if(session()->has('message_deleted'))

<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"  class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <div class="alert alert-danger" role="alert">
          {{session('message_deleted')}}
        </div>
      </div>
      <div class="col">
        
      </div>
    </div>
</div>
@endif