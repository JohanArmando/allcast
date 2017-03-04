<aside class="left-panel">
    <div class="user text-center">
        <a href="{{url('user/profile')}}">
            <img src="{{asset('profile/'.Auth::user()->avatar)}}" class="img-circle" alt="...">
            <h4 class="user-name hidden-xs hidden-sm">{{ Auth::user()->name }}</h4>
        </a>
    </div>
    <nav class="navigation">
        <ul class="list-unstyled">
            <li @if(Request::is('home')) class="active" @endif><a href="{{url('/home')}}"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
            <li @if(Request::is('stream/create')) class="active" @endif><a href="{{url('/stream/create')}}"><i class="fa fa-play-circle"></i><span class="nav-label">Create Stream</span></a></li>
            <li class=""><a href="#"><i class="fa fa-sign-out"></i> <span class="nav-label">SignOut</span></a></li>
        </ul>
    </nav>
</aside>
