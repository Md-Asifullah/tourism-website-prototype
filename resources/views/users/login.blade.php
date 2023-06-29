<x-layout>
    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-3">
              
            </div>
            <div class="col-6 form-background">
                <form method="POST" action="/authenticate">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-dark_blue">Login</button>
                    <a href="/login" class="btn btn-danger">Clear</a>
                </form>
            </div>
            <div class="col-3">
              
            </div>
          </div>
        
    </div>
</x-layout>