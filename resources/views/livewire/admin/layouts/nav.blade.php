<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav-right d-flex align-items-center">
            <div class="nav-item d-flex align-items-center">
                <!-- يمكنك إضافة حقل البحث هنا إذا كان مطلوبًا -->
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center mr-auto">
            @if (auth()->guard('admin')->check())
            <li class="nav-item ms-3">
                <a href="{{ route('admin-dashboard.archives') }}" class="btn btn-dark d-flex align-items-center">
                    <i class="bx bx-archive fs-4 me-2"></i> Archives
                </a>
            </li>
            @endif

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset($image ?? $defaultImage) }}" alt="User Avatar"
                            class="w-px-40 h-40 rounded-circle object-cover" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset($image ?? $defaultImage) }}" alt
                                            class="w-px-40 h-40 rounded-circle object-cover" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{$name}}</span>
                                    <small class="text-muted">{{$position}}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    @include('livewire.admin.layouts.type-profile')
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <a class="dropdown-item" href="#">
                                <button type="submit" class="btn navigation-button" href="#">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </button>
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>