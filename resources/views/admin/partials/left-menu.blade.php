<aside class="left-panel">

    <div class="user text-center">
        <img src="{{asset('dashboard/images/user.gif')}}" class="img-circle" alt="...">
        <h4 class="user-name">{{ Auth::user()->name }}</h4>
    </div>



    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="#"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
            <li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">Widgets &amp; Apps</span></a>
                <ul class="list-unstyled">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Notes</a></li>
                    <li><a href="#">File Browser</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-flag-o"></i> <span class="nav-label">UI Elements</span></a>
                <ul class="list-unstyled">
                    <li><a href="uielements-general.html">General Elements</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="panels.html">Panels</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Forms</span></a>
                <ul class="list-unstyled">
                    <li><a href="#">General Elements</a></li>
                    <li><a href="#">Form Validation</a></li>
                    <li><a href="#">Wysihtml</a></li>
                    <li><a href="#">File Upload</a></li>
                    <li><a href="#">Image Crop</a></li>
                </ul>
            </li>
        </ul>
    </nav>

</aside>
