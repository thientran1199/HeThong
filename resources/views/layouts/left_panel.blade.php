<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ request()->is('/dasboard') ? 'active' : '' }}">
                    <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Page</li><!-- /.menu-title -->
                @if (auth()->user()->role == 1)   
                <li class="menu-item-has-children dropdown {{ request()->is('domain*') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Domain</a>
                    <ul class="sub-menu children dropdown-menu">                            
                        <li><i class="fa fa-bars"></i><a href="{{route('domain.index')}}">List</a></li>
                        <li><i class="fa fa-plus"></i><a href="{{route('domain.create')}}">Add</a></li>
                     
                    </ul>
                </li>
                @else
                <li class="{{ request()->is('domain*') ? 'active' : '' }}">
                    <a href="{{route('domain.create')}}"><i class="menu-icon fa fa-laptop"></i>Tạo Mới </a>
                </li>
                @endif
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->