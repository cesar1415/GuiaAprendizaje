<!DOCTYPE html>


<html lang="en">
<head>
<base href="./../">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="description" content="CoreUI - Bootstrap Admin Template">
<meta name="author" content="Łukasz Holeczek">
<meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">
<title>CoreUI Bootstrap Admin Template</title>
<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
<link rel="stylesheet" href="{{url('vendors/simplebar/css/simplebar.css')}}">
<link rel="stylesheet" href="{{url('css/vendors/simplebar.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

<link href="{{url('css/style.css')}}" rel="stylesheet">

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
<script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-118965717-1');
    </script>
<link rel="canonical" href="https://coreui.io/docs/4.0/components/buttons/">
</head>
<body class="dark-theme">
@include('layouts.componentes.sidebar')
<div class="sidebar sidebar-light sidebar-lg sidebar-end sidebar-overlaid sidebar-self-hiding-xxl" id="aside">
<div class="sidebar-header bg-transparent p-0">
<ul class="nav nav-underline nav-underline-primary" role="tablist">
<li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#timeline" role="tab">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
</svg></a></li>
<li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#messages" role="tab">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
</svg></a></li>
<li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#settings" role="tab">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
</svg></a></li>
</ul>
<button class="sidebar-close" type="button" data-coreui-close="sidebar">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-x"></use>
</svg>
</button>
</div>

<div class="tab-content">
<div class="tab-pane active" id="timeline" role="tabpanel">
<div class="list-group list-group-flush">
<div class="list-group-item border-start-4 border-start-secondary bg-light text-center fw-bold text-medium-emphasis text-uppercase small">Today</div>
<div class="list-group-item border-start-4 border-start-warning list-group-item-divider">
<div class="avatar avatar-lg float-end"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
<div>Meeting with <strong>Lucas</strong></div><small class="text-medium-emphasis me-3">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
</svg> 1 - 3pm</small><small class="text-medium-emphasis">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
</svg> Palo Alto, CA</small>
</div>
<div class="list-group-item border-start-4 border-start-info">
<div class="avatar avatar-lg float-end"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
<div>Skype with <strong>Megan</strong></div><small class="text-medium-emphasis me-3">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
</svg> 4 - 5pm</small><small class="text-medium-emphasis">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-skype"></use>
</svg> On-line</small>
</div>
<div class="list-group-item border-start-4 border-start-secondary bg-light text-center fw-bold text-medium-emphasis text-uppercase small">Tomorrow</div>
<div class="list-group-item border-start-4 border-start-danger list-group-item-divider">
<div>New UI Project - <strong>deadline</strong></div><small class="text-medium-emphasis me-3">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
</svg> 10 - 11pm</small><small class="text-medium-emphasis">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
</svg> creativeLabs HQ</small>
<div class="avatars-stack mt-2">
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
</div>
</div>
<div class="list-group-item border-start-4 border-start-success list-group-item-divider">
<div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-medium-emphasis me-3">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
</svg> 1 - 3pm</small><small class="text-medium-emphasis">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
</svg> Palo Alto, CA</small>
</div>
<div class="list-group-item border-start-4 border-start-primary list-group-item-divider">
<div><strong>Team meeting</strong></div><small class="text-medium-emphasis me-3">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
</svg> 4 - 6pm</small><small class="text-medium-emphasis">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
</svg> creativeLabs HQ</small>
<div class="avatars-stack mt-2">
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
<div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
</div>
</div>
</div>
</div>
<div class="tab-pane p-3" id="messages" role="tabpanel">
<div class="message">
<div class="py-3 pb-5 me-3 float-start">
<div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
</div>
<div><small class="text-medium-emphasis">Lukasz Holeczek</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
<div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
</div>
<hr>
<div class="message">
<div class="py-3 pb-5 me-3 float-start">
<div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
</div>
<div><small class="text-medium-emphasis">Lukasz Holeczek</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
<div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
</div>
<hr>
 <div class="message">
<div class="py-3 pb-5 me-3 float-start">
<div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
</div>
<div><small class="text-medium-emphasis">Lukasz Holeczek</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
<div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
</div>
<hr>
<div class="message">
<div class="py-3 pb-5 me-3 float-start">
<div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
</div>
<div><small class="text-medium-emphasis">Lukasz Holeczek</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
<div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
</div>
<hr>
<div class="message">
<div class="py-3 pb-5 me-3 float-start">
<div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
</div>
<div><small class="text-medium-emphasis">Lukasz Holeczek</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
<div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
</div>
</div>
<div class="tab-pane p-3" id="settings" role="tabpanel">
<h6>Settings</h6>
<div class="aside-options">
<div class="clearfix mt-4">
<div class="form-check form-switch form-switch-lg">
<input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox" checked="">
<label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option 1</label>
</div>
</div>
<div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
</div>
<div class="aside-options">
<div class="clearfix mt-3">
<div class="form-check form-switch form-switch-lg">
<input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
<label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option 2</label>
</div>
</div>
<div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
</div>
<div class="aside-options">
<div class="clearfix mt-3">
<div class="form-check form-switch form-switch-lg">
<input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
<label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option 3</label>
</div>
</div>
</div>
<div class="aside-options">
<div class="clearfix mt-3">
<div class="form-check form-switch form-switch-lg">
<input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox" checked="">
<label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option 4</label>
 </div>
</div>
</div>
<hr>
<h6>System Utilization</h6>
<div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
<div class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div><small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
<div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
<div class="progress progress-thin">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</div><small class="text-medium-emphasis">11444GB/16384MB</small>
<div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
<div class="progress progress-thin">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</div><small class="text-medium-emphasis">243GB/256GB</small>
<div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
<div class="progress progress-thin">
<div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div><small class="text-medium-emphasis">25GB/256GB</small>
</div>
</div>
</div>
<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
@include('layouts.componentes.header')
<div class="body flex-grow-1 px-3">
<div class="container-lg">
@yield('content')
</div>
</div>
@include('layouts.componentes.footer')
</div>

<script src="{{url('js/coreui.bundle.min.js')}}"></script>
<script src="{{url('js/simplebar.min.js')}}"></script>
<script>
      if (document.body.classList.contains('dark-theme')) {
        var element = document.getElementById('btn-dark-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-dark-theme').checked = true;
        }
      } else {
        var element = document.getElementById('btn-light-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-light-theme').checked = true;
        }
      }

      function handleThemeChange(src) {
        var event = document.createEvent('Event');
        event.initEvent('themeChange', true, true);

        if (src.value === 'light') {
          document.body.classList.remove('dark-theme');
        }
        if (src.value === 'dark') {
          document.body.classList.add('dark-theme');
        }
        document.body.dispatchEvent(event);
      }
    </script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
<script>
    </script>
</body>
</html>
