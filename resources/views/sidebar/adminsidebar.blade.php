<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <h3 class="icon icon-home" > Home </h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/dashbord')}}">
                        <i class="icon icon-chart"></i>
                        <p>dashboard</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{url('/all_users')}}">
                        <i class="icon icon-people"></i>
                        <p>Users</p>
                    </a>
                </li> --}}

                <li class="nav-item submenu">
                    <a data-toggle="collapse" href="#users" class="" aria-expanded="true">
                        <i class="icon icon-people"></i>
                        <p>Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse show" id="users" style="">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{url('/owner')}}">
                                    <span class="sub-item">Owner projects</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/programmer')}}">
                                    <span class="sub-item">programmers</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/company')}}">
                                    <span class="sub-item">P Company</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{url('/all_projects')}}">
                        <i class="icon icon-pencil"></i>
                        <p>Projects</p>
                    </a>
               </li> --}}
               <li class="nav-item submenu">
                <a data-toggle="collapse" href="#base" class="" aria-expanded="true">
                    <i class="icon icon-pencil"></i>
                    <p>Projects</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse show" id="base" style="">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{url('/all_projects')}}">
                                <span class="sub-item">Approved Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/during')}}">
                                <span class="sub-item">Projects During Implememtation</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/implemented')}}">
                                <span class="sub-item">Implemented Projects</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
                <li class="nav-item">
                    <a href="{{url('/acceptance')}}">
                        <i class="icon icon-list"></i>
                        <p>acceptance</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="{{url('/dashbord')}}">
                        <i class="fa fa-copy"></i>
                        <p>Immplemented Progect</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</div>