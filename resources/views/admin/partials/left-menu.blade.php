<aside class="left-panel">
    <div class="user text-center">
        <a href="{{url('user/profile')}}">
            <img src="{{asset('profile/'.Auth::user()->avatar)}}" class="img-circle" alt="...">
            <h4 class="user-name hidden-xs hidden-sm">{{ Auth::user()->name }}</h4>
        </a>
    </div>
    <nav class="navigation">
        <ul class="list-unstyled">
            @if(Auth::user()->roll == 'admin')
            <li @if(Request::is('admin/channels')) class="active" @endif>
                <a href="{{url('/admin/channels')}}"><i class="fa fa-list"></i><span class="nav-label">Channels</span></a>
            </li>
            <li @if(Request::is('admin/users')) class="active" @endif>
                <a href="{{url('/admin/users')}}"><i class="fa fa-users"></i><span class="nav-label">Users</span></a>
            </li>
            @endif
            <li @if(Request::is('home')) class="active" @endif><a href="{{url('/home')}}"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
            <li @if(Request::is('stream/create')) class="active" @endif><a href="{{url('/stream/create')}}"><i class="fa fa-play-circle"></i><span class="nav-label">Create Stream</span></a></li>
            <li class="">
                <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> <span class="nav-label">SignOut</span>
                            </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
            </li>
        </ul>
    </nav>
</aside>
