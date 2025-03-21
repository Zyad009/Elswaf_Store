    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    @if (auth()->guard('admin')->user()->unreadNotifications->isNotEmpty())
                        <span
                            class="badge bg-primary badge-number">{{ count(auth()->guard('admin')->user()->unreadNotifications) }}</span>
                    @endif
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    {{-- <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li> --}}
                    @forelse (auth()->guard('admin')->user()->unreadNotifications as  $notification)
                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>

                            <a class="dropdown-item" href="{{ route('message.markAsRead', $notification->id) }}">
                                <div>
                                    <h4>{{ $notification->data['status'] }}</h4>
                                    <p>{{ $notification->data['user_name'] }}</p>
                                    <p>{{ $notification->created_at->diffForHumans() }}</p>
                                </div>
                        </li>
                        </a>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    @empty
                        <div class="m-3">
                            <div class="text-center alert alert-info">
                                There is no Notifications !
                            </div>
                        </div>
                    @endforelse

                    {{-- <li>
              <hr class="dropdown-divider">
            </li>


            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li> --}}
                    {{-- 
            <li>
              <hr class="dropdown-divider">
            </li> --}}
                    @if (auth()->guard('admin')->user()->unreadNotifications->isNotEmpty())
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    @endif

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span>
                </a><!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="{{ asset('admin/img') }}/messages-3.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
