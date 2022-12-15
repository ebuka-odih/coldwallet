
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Cold Wallet</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/xdream.min.css') }}">
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->

<div id="page-container" class="sidebar-o side-scroll page-header-fixed page-header-dark">

    <!-- Sidebar -->

    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
                    <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
                <span class="fw-normal">File Hosting</span>
              </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Extra Settings -->
                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-cog"></i>
                    </a>
                    <!-- END Extra Settings -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Actions -->
            <div class="content-side smini-hide">
                <a class="btn btn-alt-success w-100" href="javascript:void(0)">
                    <i class="fa fa-plus me-1"></i> Add Asset
                </a>
            </div>
            <!-- END Side Actions -->

            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('user.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Files</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-file-word"></i>
                            <span class="nav-main-link-name">Documents</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-secondary">19</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-file-image"></i>
                            <span class="nav-main-link-name">Photos</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-secondary">45</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-file-video"></i>
                            <span class="nav-main-link-name">Videos</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-secondary">65</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-file-audio"></i>
                            <span class="nav-main-link-name">Audio</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-secondary">28</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Tags</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-tag text-danger"></i>
                            <span class="nav-main-link-name">Work</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-danger">98</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-tag text-success"></i>
                            <span class="nav-main-link-name">Personal</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-success">34</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-tag text-info"></i>
                            <span class="nav-main-link-name">Project X</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-info">56</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-tag text-warning"></i>
                            <span class="nav-main-link-name">Trip</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-warning">10</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-plus text-muted"></i>
                            <span class="nav-main-link-name">Add New Tag</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary me-1 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Toggle Sidebar Mini Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary me-1 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Sidebar Mini Mode -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search..</span>
                </button>
                <!-- END Open Search Section -->

                <!-- Search form in larger screens -->
                <form class="d-none d-lg-inline-block ms-1" action="be_pages_generic_search.html" method="POST">
                    <input type="text" class="form-control border-0 rounded" placeholder="Search All Files.." id="page-header-search-input-full" name="page-header-search-input-full" style="min-width: 320px;">
                </form>
                <!-- END Search form in larger screens -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-lg-inline mx-1">lisa.d@example.com</span>
                        <span class="badge rounded-pill bg-dark">VIP</span>
                        <i class="fa fa-fw fa-angle-down ms-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 overflow-hidden" aria-labelledby="page-header-user-dropdown">
                        <div class="row g-0">
                            <div class="col-5 d-flex align-items-center justify-content-center bg-image p-2" style="background-image: url('assets/media/photos/photo10.jpg');">
                                <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar1.jpg" alt="">
                            </div>
                            <div class="col-7 p-2 fs-sm">
                                <a class="dropdown-item fw-semibold" href="be_pages_generic_profile.html">
                                    <i class="fa fa-fw fa-user-circle me-1"></i>
                                    Lisa Doe
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-pencil-alt me-1"></i>
                                    Edit My Profile
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="fa fa-fw fa-sign-out-alt me-1"></i>
                                    Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                        <input type="text" class="form-control border-0" placeholder="Search All Files.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    @yield('content')
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.1</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>
</body>
</html>
