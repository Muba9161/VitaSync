<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>{{ env('APP_NAME') }} </title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('../assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('../assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('../assets/css/icons.css') }}" rel="stylesheet" />

    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('../assets/colors/color1.css') }}" />
    <!-- Add Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




</head>

<body class="app sidebar-mini ltr light-mode">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{ route('dashboard') }}">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo"
                                alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead"
                                placeholder="Search for results...">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>

                        <!-- Placeholder for search results -->
                        <div id="search-results" class="search-results-container" style="display:none;">
                            <!-- Results will be populated here -->
                        </div>

                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" href="{{ route('followlist') }}"
                                                target="_blank" data-bs-toggle="tooltip"
                                                data-bs-original-title="Connect Around">
                                                <i class="fe fe-users"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block"></span>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        
                                        <!-- NOTIFICATIONS -->
                                        <div class="dropdown  d-flex message">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-mail"></i><span class="pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Chats</h6>
                                                        <div class="ms-auto">
                                                            <a href="#" class="text-muted p-0 fs-12">Total
                                                                Messages: {{ count($latestMessages) }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message-menu message-menu-scroll">
                                                    @foreach ($latestMessages as $message)
                                                        @if ($message->sender && $message->receiver)
                                                            <a class="dropdown-item d-flex"
                                                                href="{{ route('chat.index', $message->sender_id === Auth::id() ? $message->receiver_id : $message->sender_id) }}">
                                                                <span
                                                                    class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                                    data-bs-image-src="{{ asset('storage/profile_pictures/' . ($message->sender_id === Auth::id() ? $message->receiver->profile_picture : $message->sender->profile_picture)) }}"></span>
                                                                <div class="wd-90p">
                                                                    <div class="d-flex">
                                                                        <h5 class="mb-1">
                                                                            {{ $message->sender_id === Auth::id() ? $message->receiver->name : $message->sender->name }}
                                                                        </h5>
                                                                        <small
                                                                            class="text-muted ms-auto text-end">{{ $message->created_at->diffForHumans() }}</small>
                                                                    </div>
                                                                    <span>{{ substr($message->message, 0, 5) }}...</span>
                                                                </div>
                                                            </a>
                                                        @endif
                                                    @endforeach

                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="{{ route('chat.users') }}"
                                                    class="dropdown-item text-center p-3 text-muted">See all
                                                    Messages</a>
                                            </div>
                                        </div>
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex">
                                                @if (Auth::user())
                                                    @if (!is_null(Auth::user()->profile_picture))
                                                        <img src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}"
                                                            alt="profile-user"
                                                            class="avatar  profile-user brround cover-image"
                                                            style="object-fit: cover;">
                                                    @else
                                                        <img src="../assets/images/users/user.png" alt="profile-user"
                                                            class="avatar  profile-user brround cover-image"
                                                            style="object-fit: cover;">
                                                    @endif

                                                @endif
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <!-- Check if 'user_name' is available in session, then display it -->
                                                        @if (Auth::check())
                                                            <!-- Checks if the user is authenticated -->
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                                                {{ Auth::user()->name }} <br>
                                                                <!-- Display the authenticated user's name -->
                                                                <small class="text-muted"
                                                                    style="text-transform: capitalize;">{{ Auth::user()->option }}</small>
                                                            </h5>
                                                        @else
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Guest</h5>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ route('profile.index') }}">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <form action="{{ route('logout') }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ route('dashboard') }}">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo"
                                alt="logo">
                            <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo"
                                alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Personal Kit</h3>
                            </li>
                            <li class="slide">
                                <a href = "{{ route('profile.index') }}" class="side-menu__item"
                                    data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-user"></i><span class="side-menu__label">View
                                        Profile</span></a>
                                <!-- <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Edit Profile</a></li>
                                    <li><a href="editprofile.html" class="slide-item">Edit Profile</a></li>
                                    <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                                    <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                                    <li><a href="chat.html" class="slide-item"> Chat</a></li>
                                    <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                                    <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                                    <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                                    <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                                    <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                                    <li><a href="counters.html" class="slide-item"> Counters</a></li>
                                    <li><a href="rating.html" class="slide-item"> Rating</a></li>
                                    <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                                    <li><a href="treeview.html" class="slide-item"> Treeview</a></li>
                                    <li><a href="chart.html" class="slide-item"> Charts</a></li>
                                    <li><a href="footers.html" class="slide-item"> Footers</a></li>
                                    <li><a href="users-list.html" class="slide-item"> User List</a></li>
                                    <li><a href="search.html" class="slide-item">Search</a></li>
                                    <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                                    <li><a href="widgets.html" class="slide-item"> Widgets</a></li>
                                </ul> -->
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-clipboard"></i><span
                                        class="side-menu__label">View
                                        Resume</span></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Edit Profile</a></li>
                                    <li><a href="cards.html" class="slide-item">Edit Resume</a></li>
                                    <!--<li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                                    <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                                    <li><a href="chat.html" class="slide-item"> Chat</a></li>
                                    <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                                    <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                                    <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                                    <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                                    <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                                    <li><a href="counters.html" class="slide-item"> Counters</a></li>
                                    <li><a href="rating.html" class="slide-item"> Rating</a></li>
                                    <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                                    <li><a href="treeview.html" class="slide-item"> Treeview</a></li>
                                    <li><a href="chart.html" class="slide-item"> Charts</a></li>
                                    <li><a href="footers.html" class="slide-item"> Footers</a></li>
                                    <li><a href="users-list.html" class="slide-item"> User List</a></li>
                                    <li><a href="search.html" class="slide-item">Search</a></li>
                                    <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                                    <li><a href="widgets.html" class="slide-item"> Widgets</a></li> -->
                                </ul>
                            </li>
                            <li class="slide">
                            <li class="slide">
                                <a href="{{ route('folders.index') }}" class="side-menu__item"
                                    data-bs-toggle="slide">
                                    <i class="side-menu__icon fe fe-folder"></i>
                                    <span class="side-menu__label">File Manager</span>
                                </a>
                                <!-- <ul class="slide-menu">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                                <li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
                                                <li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
                                                <li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
                                                <li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
                                            </ul> -->
                            </li>
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                    class="side-menu__icon fe fe-lock"></i><span class="side-menu__label"
                                    data-bs-target="#vault" data-bs-toggle="modal">Vault</span></a>
                            </li>
                            <!-- <li>
                                <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i
                                        class="side-menu__icon fe fe-zap"></i><span
                                        class="side-menu__label">Landing Page</span><span class="badge bg-green br-5 side-badge blink-text pb-1">New</span></a>
                            </li> -->

                            <li class="sub-category">
                                <h3>Professional Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('dashboard') }}"><i class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('quick-access') }}"><i
                                    class="side-menu__icon fe fe-fast-forward"></i><span
                                    class="side-menu__label">Quick
                                    Access</span></a>
                            <li class="sub-category">
                                <h3>Entity</h3>
                            </li>
                            <li class="slide">
                            <li class="slide">
                                <a href="{{ route('entity.index') }}" class="side-menu__item" data-bs-toggle="slide"
                                    href="javascript:void(0)"><i class="side-menu__icon fe fe-briefcase"></i><span
                                        class="side-menu__label">Yours</span></a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('entity.index') }}" class="side-menu__item" data-bs-toggle="slide"
                                    href="javascript:void(0)"><i class="side-menu__icon fe fe-briefcase"></i><span
                                        class="side-menu__label">Accessible</span></a>
                            </li>
                            </li>

                            <li class="sub-category">
                                <h3>Products</h3>
                            </li>
                            <li class="slide">
                            <li class="slide">
                                <a href="{{ route('entity.index') }}" class="side-menu__item" data-bs-toggle="slide"
                                    href="javascript:void(0)"><i class="side-menu__icon fe fe-briefcase"></i><span
                                        class="side-menu__label">Yours</span></a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('entity.index') }}" class="side-menu__item" data-bs-toggle="slide"
                                    href="javascript:void(0)"><i class="side-menu__icon fe fe-briefcase"></i><span
                                        class="side-menu__label">Accessible</span></a>
                            </li>
                            </li>

                            <li class="sub-category">
                                <h3>Creation Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('register') }}"><i
                                        class="side-menu__icon fe fe-plus"></i><span class="side-menu__label">Create
                                        New</span></a>
                                {{-- <ul class="slide-menu">
                                    <li><a href="profile.html" class="slide-item"> Organization</a></li>
                                </ul> --}}
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('coming') }}"><i
                                        class="side-menu__icon fe fe-shopping-bag"></i><span
                                        class="side-menu__label">Market Place</span></a>
                                {{-- <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li><a href="shop.html" class="slide-item"> Shop</a></li>
                                    <li><a href="shop-description.html" class="slide-item"> Product Details</a></li>
                                    <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                                    <li><a href="add-product.html" class="slide-item"> Add Product</a></li>
                                    <li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
                                    <li><a href="checkout.html" class="slide-item"> Checkout</a></li>
                                </ul> --}}
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-target="#ai-selector" data-bs-toggle="modal"
                                    href="javascript:void(0)"><i class="side-menu__icon fe fe-cpu"></i><span
                                        class="side-menu__label">AI
                                        Agents</span></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>


            {{-- Modal for Vault Password Authentication --}}
            <div class="modal fade" id="vault">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content country-select-modal">
                        <div class="modal-header">
                            {{-- <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button> --}}
                        </div>
                        <div class="modal-body">
                            <!-- Folder Creation Form -->
                            <h2>Vault Authentication</h2>
                            <form method="POST" action="{{ route('vaults.enter') }}">
                                @csrf
                                <div class="row mb-4">
                                    <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="inputPassword3"
                                            name="vault_password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-9">
                                        <button class="btn btn-primary">Enter Vault</button>
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>

                            <hr>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Modal for  creation --}}
            <div class="modal fade" id="createfolder">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content country-select-modal">
                        <div class="modal-header">
                            {{-- <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button> --}}
                        </div>
                        <div class="modal-body">
                            <!-- Folder Creation Form -->
                            <h2>Create Folder</h2>
                            <form action="{{ route('folders.store', $folder->parent_id ?? null) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Folder Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button"
                                    data-bs-target="#option-selector" data-bs-toggle="modal">Cancel</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ai-selector">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content country-select-modal">
                        <div class="modal-header">
                            <h6 class="modal-title">Choose AI</h6><button aria-label="Close" class="btn-close"
                                data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <ul class="row p-3">
                                <li class="col-lg-6 mb-2">
                                    <a href="https://chatgpt.com/" target="_blank"
                                        class="btn btn-country btn-lg btn-block active">
                                        <span class="country-selector"><i
                                                class="fe fe-shield me-3 language"></i></span>ChatGPT</a>

                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="https://grok.com/?referrer=website" target="_blank"
                                        class="btn btn-country btn-lg btn-block active">
                                        <span class="country-selector"><i
                                                class="fe fe-link me-3 language"></i></span>Grok 3</a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="https://gemini.google.com/app?hl=en-IN" target="_blank"
                                        class="btn btn-country btn-lg btn-block active">
                                        <span class="country-selector"><i
                                                class="fe fe-cloud me-3 language"></i></span>Gemini</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
