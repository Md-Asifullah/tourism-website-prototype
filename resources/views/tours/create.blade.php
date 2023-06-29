<x-layout>
    <x-notification/>
    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-3">
              
            </div>
            <div class="col-6 form-background-create-tour">
                <h1 class="text-center page-heading">Add New Tour</h1>
                <p>Please fill in the form below to add a new tour</p>
                <form method="POST" action="/tour/create" enctype="multipart/form-data">
                  @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tour Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tour Title" name="title" required>
                    @error('title')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="image" required>
                    @error('image')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tour Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                    @error('description')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-dark_blue">Add Tour</button>
                  <a href="/tour/create" class="btn btn-danger">Clear</a>
                </form>
            </div>
            <div class="col-3">
              
            </div>
          </div>
        
    </div>
    
</x-layout>