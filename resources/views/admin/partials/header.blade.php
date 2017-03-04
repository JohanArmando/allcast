<header class="top-head container-fluid">
    <button type="button" class="navbar-toggle pull-left">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav-toolbar">
        <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                <div class="panel-heading">
                    Options
                </div>
                <div class="panel-body text-center">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4">
                            <a href="{{url('user/profile')}}" class="text-purple">
                                <span class="h2"><i class="fa fa-user-circle-o"></i></span>
                                <p class="text-gray no-margn">Profile</p>
                            </a>
                        </div>
                        <div class="col-xs-12 visible-xs-block"><hr></div>
                        <div class="col-xs-6 col-sm-4">
                            <a href="{{url('user/profile')}}" class="text-red">
                                <span class="h2"><i class="fa fa-lock"></i></span>
                                <p class="text-gray no-margn">Password</p>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span class="h2"><i class="fa fa-sign-out"></i></span>
                                <p class="text-gray">Log-Out</p>
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </li>
    </ul>
</header>
