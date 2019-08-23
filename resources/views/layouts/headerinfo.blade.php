<ul class="nav navbar-nav mai-top-nav header-right-menu">
    {{-- notification --}}
        <li class="nav-item">
            @if (Auth::User()->STATUSUSER == "ADMIN")
            
            @elseif (Auth::User()->STATUSUSER == "NARASUMBER")
            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                    <i class="educate-icon educate-bell" aria-hidden="true"></i>
                @if ($countnotifNarsumber == 0)
                    <span class="indicator"></span>
                @elseif($countnotifNarsumber > 99)
                    <small class="badge badge-info" style="background-color: #ffffff;color:black">99+</small>
                @else
                    <small class="badge badge-info" style="background-color: #ffffff;color:black">{{$countnotifNarsumber}}</small>
                @endif
            </a>
            
            @else
            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                    <i class="educate-icon educate-bell" aria-hidden="true"></i>
                @if ($countnotifUMKM == 0)
                    <span class="indicator"></span>
                @elseif($countnotifUMKM > 99)
                    <small class="badge badge-info" style="background-color: #ffffff;color:black">99+</small>
                @else
                    <small class="badge badge-info" style="background-color: #ffffff;color:black">{{$countnotifUMKM}}</small>
                @endif
            </a>

            @endif
            
            <div role="menu"
                class="notification-author dropdown-menu animated zoomIn">
                <div class="notification-single-top">
                    <h1>Notifications</h1>
                </div>
                {{-- Body Notification --}}
                @if (Auth::User()->STATUSUSER == "ADMIN")

                @elseif(Auth::User()->STATUSUSER == "NARASUMBER")
                    <ul class="notification-menu">
                        @if ($countnotifNarsumber == 0)
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p class="text-center">Tidak Ada Waiting List Kegiatan</p>
                        @else
                            @foreach ($notifNarasumber as $itemNotifNarasumber)
                                <li>
                                    <a href="#">
                                        <div class="notification-icon">
                                            {{-- <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i> --}}
                                            <img src="{{asset('assetLogin/img/profile/'.$itemNotifNarasumber->GAMBARNARASUMBER)}}">
                                        </div>
                                        <div class="notification-content col-md-9 col-xs-8">
                                            <h2>Dari: {{$itemNotifNarasumber->NAMAUMKMPMT}}</h2>
                                            <p><small>Pengajuan:<b>{{ \Carbon\Carbon::parse($itemNotifNarasumber->created_at)->format('d-m-Y')}}</b></small></p>
                                            <p>Status Pengajuan <b>{{$itemNotifNarasumber->STATUSPMT}}</b></p>
                                        </div>
                                    </a>
                                </li><hr>
                            @endforeach
                        @endif
                    </ul>
                @elseif(Auth::User()->STATUSUSER == "UMKM")
                <ul class="notification-menu">
                    @if ($countnotifUMKM == 0)
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p class="text-center">Tidak Ada Pengajuan Permintaan Ke Narasumber</p>
                    @else
                        @foreach ($notif as $itemNotif)
                        <li>
                            <a href="#">
                                <div class="notification-icon">
                                    {{-- <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i> --}}
                                    <img src="{{asset('assetLogin/img/profile/'.$itemNotif->GAMBARNARASUMBER)}}">
                                </div>
                                <div class="notification-content col-md-9 col-xs-8">
                                    <h2>Dari: {{$itemNotif->NAMANARASUMBER}}</h2>
                                    <p><small>Pengajuan:<b>{{ \Carbon\Carbon::parse($itemNotif->updated_at)->format('d-m-Y')}}</b></small></p>
                                    <p>Kegiatan Yang Anda Ajukan di <b>{{$itemNotif->STATUSPMT}}</b></p>
                                </div>
                            </a>
                        </li><hr>
                        @endforeach
                        @endif
                    </ul>
                @else

                @endif
                <div class="notification-view">
                    <a href="#">View All Notification</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a href="#" data-toggle="dropdown" role="button"
                aria-expanded="false" class="nav-link dropdown-toggle">
                <img src="{{asset('assetLogin/img/profile/'.$dataIMG->GAMBAR)}}" alt="" />
                <span class="admin-name">{{Auth::user()->USERNAME}}</span>
                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
            </a>
            <ul role="menu"
                class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                <li>
                    <a class="dropdown-item" href="{{url('panel/myprofile?myProfile='.Auth::user()->PROFILEUSERS_ID)}}">
                        MyProfile
                    </a>
                </li>
                <li> 
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                    </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                   
                </li>
            </ul>
        </li>
        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                role="button" aria-expanded="false"
                class="nav-link dropdown-toggle"><i
                    class="educate-icon educate-menu"></i></a>

            <div role="menu"
                class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                <ul class="nav nav-tabs custon-set-tab">
                    <li class="active">
                        <a data-toggle="tab" href="#Notes">Notes</a>
                    </li>
                    <li><a data-toggle="tab" href="#Projects">Projects</a>
                    </li>
                </ul>

                <div class="tab-content custom-bdr-nt">
                    <div id="Notes" class="tab-pane fade in active">
                        <div class="notes-area-wrap">
                            <div class="note-heading-indicate">
                                <h2><i class="fa fa-comments-o"></i> Latest
                                    Notes</h2>
                                <p>You have 10 new message.</p>
                            </div>
                            <div class="notes-list-area notes-menu-scrollbar">
                                <ul class="notes-menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="notes-list-flow">
                                                <div class="notes-img">
                                                    <img src="{{asset('assetLogin/img/contact/4.jpg')}}"
                                                        alt="" />
                                                </div>
                                                <div class="notes-content">
                                                    <p> The point of using Lorem
                                                        Ipsum is that it has a
                                                        more-or-less normal.</p>
                                                    <span>Yesterday 2:45
                                                        pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notes-list-flow">
                                                <div class="notes-img">
                                                    <img src="{{asset('assetLogin/img/contact/1.jpg')}}"
                                                        alt="" />
                                                </div>
                                                <div class="notes-content">
                                                    <p> The point of using Lorem
                                                        Ipsum is that it has a
                                                        more-or-less normal.</p>
                                                    <span>Yesterday 2:45
                                                        pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="Projects" class="tab-pane fade">
                        <div class="projects-settings-wrap">
                            <div class="note-heading-indicate">
                                <h2><i class="fa fa-cube"></i> Latest projects
                                </h2>
                                <p> You have 20 projects. 5 not completed.</p>
                            </div>
                            <div
                                class="project-st-list-area project-st-menu-scrollbar">
                                <ul class="projects-st-menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="project-list-flow">
                                                <div
                                                    class="projects-st-heading">
                                                    <h2>Web Development</h2>
                                                    <p> The point of using Lorem
                                                        Ipsum is that it has a
                                                        more or less normal.</p>
                                                    <span
                                                        class="project-st-time">1
                                                        hours ago</span>
                                                </div>
                                                <div
                                                    class="projects-st-content">
                                                    <p>Completion with: 28%</p>
                                                    <div
                                                        class="progress progress-mini">
                                                        <div style="width: 28%;"
                                                            class="progress-bar progress-bar-danger hd-tp-1">
                                                        </div>
                                                    </div>
                                                    <p>Project end: 4:00 pm -
                                                        12.06.2014</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="project-list-flow">
                                                <div
                                                    class="projects-st-heading">
                                                    <h2>Software Development
                                                    </h2>
                                                    <p> The point of using Lorem
                                                        Ipsum is that it has a
                                                        more or less normal.</p>
                                                    <span
                                                        class="project-st-time">2
                                                        hours ago</span>
                                                </div>
                                                <div
                                                    class="projects-st-content project-rating-cl">
                                                    <p>Completion with: 68%</p>
                                                    <div
                                                        class="progress progress-mini">
                                                        <div style="width: 68%;"
                                                            class="progress-bar hd-tp-2">
                                                        </div>
                                                    </div>
                                                    <p>Project end: 4:00 pm -
                                                        12.06.2014</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>