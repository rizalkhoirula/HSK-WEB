<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="{{ asset('admin/assets/images/dashboard/1.png') }}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
        <p class="mb-0 font-roboto">{{ Auth::user()->role }}</p>
        <div class="mt-2">
            <a class="btn btn-light" href="/admin/profil">Update Profil</a>
        </div>

    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/admin/dashboard"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/admin/data"><i data-feather="truck"></i><span>Data</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/admin/kategori"><i data-feather="message-square"></i><span>Kategori</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
