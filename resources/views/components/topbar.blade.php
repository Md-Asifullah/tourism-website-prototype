@php
    $count_unread_messages = DB::table('messages')->where('status','unread')->count();
    $count_tours = DB::table('tours')->count();
@endphp

<div class="container-fluid">
    <div class="row topbar">
        <div class="col-2"></div>
        <div class="col-5 text-light"><i class="icon-phone px-2"></i> <span class="contact-info">+33682309200</span> <i class="icon-envelope px-2"></i> <span class="contact-info">info@paristourism.tour</span></div>
        <!-- For Admin -->
        @auth
        <div class="col-4 text-light">
            <a href="/tour/manage" class="no-decoration"><i class="icon-gear px-2"></i>Manage Tours</a> <span class="badge text-bg-success">{{$count_tours}} tours</span>
            <a href="/messages/manage" class="no-decoration"><i class="icon-envelope px-2"></i>Manage Messages</a> <span class="badge text-bg-primary">{{$count_unread_messages}} New</span>
        </div> 
        <div class="col-1 text-light">
            <form method="POST" action="/logout">
                @csrf
                <button class="btn-logout"><i class="icon-envelope px-2"></i> Logout</button>
            </form>
        </div> 
        <!-- For Guest -->
        @else
        <div class="col-3 text-light">
        </div>
        <div class="col-1 text-light">
            <a href="/login" class="no-decoration"><i class="icon-user px-2"></i>Admin Login</a>
        </div>
        @endauth
    </div>
</div>