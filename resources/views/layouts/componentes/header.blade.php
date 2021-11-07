<header class="header header-sticky mb-4">
    <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <i class="fas fa-bars"></i>
    </button><a class="header-brand d-md-none" href="#">
    <svg width="118" height="46" alt="CoreUI Logo">
    <use xlink:href="assets/brand/coreui.svg#full"></use>
    </svg></a>
    <ul class="header-nav d-none d-md-flex">
    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
    </ul>
    <nav class="header-nav ms-auto me-4">
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
    <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch" autocomplete="off" value="light" onchange="handleThemeChange(this)">
    <label class="btn btn-primary" for="btn-light-theme">
        <i class="far fa-sun"></i>
    </label>
    <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off" value="dark" onchange="handleThemeChange(this)">
    <label class="btn btn-primary" for="btn-dark-theme">
        <i class="far fa-moon"></i>
    </label>
    </div>
    </nav>
    <ul class="header-nav me-3">
    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-bell"></i><span class="badge rounded-pill position-absolute top-0 end-0 bg-danger-gradient">5</span></a>

    </li>
    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-align-left"></i><span class="badge rounded-pill position-absolute top-0 end-0 bg-warning-gradient">5</span></a>
    </li>
    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-envelope"></i><span class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">7</span></a>

    </li>
    </ul>
    <ul class="header-nav me-4">
    <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
    </a>
    <div class="dropdown-menu dropdown-menu-end pt-0">

    <div class="dropdown-header bg-light py-2">
    <div class="fw-semibold">Settings</div>
    </div><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
    </svg> Profile</a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
    </svg> Settings</a><a class="dropdown-item" href="#">
    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
    </svg> Logout</a>
    </div>
    </li>
    </ul>
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
    <svg class="icon icon-lg">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
    </svg>
    </button>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
    <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active"><span>Buttons</span></li>
    </ol>
    </nav>
    </div>
    </header>
