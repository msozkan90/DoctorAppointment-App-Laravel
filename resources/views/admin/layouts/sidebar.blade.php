<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="{{url('/dashboard')}}">
                            <div class="logo-img">

                            </div>
                            <span class="text">Hospital</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>

                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                                    <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2 "></i><span>Dashboard</span></a>
                                </div>


                                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub {{ Route::is('department.create') ? 'active' : '' }} {{ Route::is('department.index') ? 'active' : '' }}">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Department</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content ">
                                        <a href="{{route('department.create')}}" class="menu-item {{ Route::is('department.create') ? 'active' : '' }} ">Create</a>
                                        <a href="{{route('department.index')}}" class="menu-item {{ Route::is('department.index') ? 'active' : '' }}">View</a>

                                    </div>
                                </div>
                                @endif

                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub {{ Route::is('doctor.create') ? 'active' : '' }} {{ Route::is('doctor.index') ? 'active' : '' }}">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Doctor</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item {{ Route::is('doctor.create') ? 'active' : '' }}">Create</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item {{ Route::is('doctor.index') ? 'active' : '' }}">View</a>

                                    </div>
                                </div>
                                @endif
                                  @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub  {{ Route::is('appointment.create') ? 'active' : '' }} {{ Route::is('appointment.index') ? 'active' : '' }}">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Appointment Time</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content  ">
                                        <a href="{{route('appointment.create')}}" class="menu-item {{ Route::is('appointment.create') ? 'active' : '' }}">Create</a>
                                        <a href="{{route('appointment.index')}}" class="menu-item {{ Route::is('appointment.index') ? 'active' : '' }}">Check</a>

                                    </div>
                                </div>
                                @endif

                                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub {{ Route::is('patients.today') ? 'active' : '' }} {{ Route::is('prescribed.patients') ? 'active' : '' }}" >
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Patients</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('patients.today')}}" class="menu-item {{ Route::is('patients.today') ? 'active' : '' }}">Patients(today)</a>
                                        <a href="{{route('prescribed.patients')}}" class="menu-item {{ Route::is('prescribed.patients') ? 'active' : '' }}">All patients(prescription)</a>

                                    </div>
                                </div>
                                @endif




                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                 <div class="nav-item has-sub {{ Route::is('patient') ? 'active' : '' }} {{ Route::is('all.appointments') ? 'active' : '' }}">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Patient Appointment</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('patient')}}" class="menu-item {{ Route::is('patient') ? 'active' : '' }}">Today Appointment</a>
                                        <a href="{{route('all.appointments')}}" class="menu-item {{ Route::is('all.appointments') ? 'active' : '' }}">All Time Appointment</a>

                                    </div>
                                </div>

                                @endif

                                <div class="nav-item">
                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i><span>Logout</span></a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


                            </nav>
                        </div>
                    </div>
                </div>
