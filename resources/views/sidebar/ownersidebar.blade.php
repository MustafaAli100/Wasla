<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div>
                <ul class="nav nav-primary">
                    <li class="nav-item">
                        <a data-toggle="collapse" href="{{ url('/homePro') }}" class="collapsed" aria-expanded="false">
                            <h3 class="fa fa-home" > Home </h3>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/home_owner') }}">
                            <i class="icon icon-home"></i>
                            <p>Home Owner</p>
                        </a>
                    </li>
                   
                   
                    <li class="nav-item">
                        <a href="{{ url('/add_project') }}">
                            <i class="icon icon-plus"></i>
                            <p>Add Project </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ url('/show_offer') }}">
                            <i class="fa fa-copy"></i>
                            <p>Programmer Offers</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/show_project') }}">
                            <i class="fa fa-copy"></i>
                            <p>Show Project</p>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>