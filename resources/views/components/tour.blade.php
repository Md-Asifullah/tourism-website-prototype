@props(['tour'])
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-3">
        <img src="{{asset('storage/' . $tour->image)}}" class="img-fluid rounded-start" style="max-height:400px">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">{{$tour -> title}}</h5>
          <p class="card-text">{{$tour -> description}}</p>
        </div>
      </div>
    </div>
  </div>