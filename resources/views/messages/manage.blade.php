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
                <table class="table">
                    <thead>
                      <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Time</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @unless($messages->isEmpty())
                        @foreach($messages as $message)
                        @if($message->status == 'read')
                      <tr>
                        
                        <td class="align-middle">{{$message -> name}}</td>
                        <td class="align-middle">{{$message -> email}}</td>
                        <td class="align-middle">{{$message -> created_at -> diffForHumans()}}</td>
                        <td>
                          <a href="/message/{{$message->id}}" class="btn btn-white edit-btn"><i class="icon-envelope px-2"></i> View</a>
                           </td>
                        <td>
                          <form method="POST" action="/message/{{$message->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-white delete-btn"><i class="icon-trash px-2"></i> Delete</button>
                          </form> 
                        </td>
                          
                      </tr>
                      @else
                      <tr>
                        
                        <td class="align-middle"><b>{{$message -> name}}</b></td>
                        <td class="align-middle"><b>{{$message -> email}}</b></td>
                        <td class="align-middle"><b>{{$message -> created_at -> diffForHumans()}}</b></td>
                        <td>
                          <a href="/message/{{$message->id}}" class="btn btn-white edit-btn"><b><i class="icon-envelope px-2"></i> View</a></b>
                           </td>
                        <td>
                          <form method="POST" action="/message/{{$message->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-white delete-btn"><b><i class="icon-trash px-2"></i> Delete</button></b>
                          </form> 
                        </td>
                          
                      </tr>
                      @endif
                        @endforeach
                        @else
                            <p>No Messages Found</p>
                        @endunless
                    </tbody>
                  </table>
            </div>
            
            <div class="col-2"></div>
        </div>
    </div>
</x-layout>