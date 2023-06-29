<x-layout>
    <!-- Manage Tours -->
    @php
        $text = "Manage Tours"
    @endphp
    <x-big-text :text="$text"/>
    <x-notification/>
    <div class="container table-container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tour Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @unless($tours->isEmpty())
                        @foreach($tours as $tour)
                      <tr>
                        <th scope="row">{{$tour -> id}}</th>
                        <td>{{$tour -> title}}</td>
                        <td>
                          <a href="/tour/{{$tour->id}}/edit" class="btn btn-white edit-btn"><i class="icon-pencil px-2"></i> Edit</a>
                           </td>
                        <td>
                          <form method="POST" action="/tour/{{$tour->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-white delete-btn"><i class="icon-trash px-2"></i> Delete</button>
                          </form> 
                        </td>
                          
                      </tr>
                        @endforeach
                        @else
                            <p>No Tours Found</p>
                        @endunless
                    </tbody>
                  </table>
                  <a class="btn btn-dark_blue" href="/tour/create" role="button"><i class="icon-plus px-2"></i> Add New Tour</a>
            </div>
            
            <div class="col-2"></div>
        </div>
    </div>
</x-layout>