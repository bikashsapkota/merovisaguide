<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    MVG+
                </div>
            </li>
            <li class="true">
                <a href="{{ url('/admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Add Posts</span></a>
            </li>
            <!-- <li class="false">
                <a href="{{ url('/minor') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
            </li> -->
            <li class="false">
                <a href="{{ url('/admin/posts') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Manage Posts</span> </a>
            </li>
            <li class="false">
                <a href="{{ url('/enqueries') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Enqueries</span> </a>
            </li>
            <li class="false">
                <a href="{{ url('/testomonials') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Testomonials</span> </a>
            </li>
        </ul>

    </div>
</nav>