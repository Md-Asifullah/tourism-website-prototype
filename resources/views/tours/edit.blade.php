<x-layout>
    <x-notification/>
    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-3">
              
            </div>
            <div class="col-6 form-background-create-tour">
                <h1 class="text-center page-heading">Edit {{$tour->title}}</h1>
                <p>Please fill in the form below to edit tour</p>
                <form method="POST" action="/tour/{{$tour->id}}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tour Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tour Title" name="title" required value="{{$tour->title}}">
                    @error('title')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  @if($tour->image != null)
                  <div class="mb-3">
                    <img src="{{asset('storage/' . $tour->image)}}" class="img-fluid rounded-start" style="max-height:200px">
                    </div>
                    @endif
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="image">
                    @error('image')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tour Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required>{{$tour->description}}</textarea>
                    @error('description')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-dark_blue">Update Tour</button>
                  <a href="/tour/manage" class="btn btn-danger">Back</a>
                </form>
            </div>
            <div class="col-3">
              
            </div>
          </div>
        
    </div>
    
</x-layout>