<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    @include('backend.components.style')
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
     @include('backend.components.sidebar')
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <div class="theme-wrapper">
                    <h6 class="text-muted mb-2">Light Theme:</h6>
                    <a class="theme-item" href="../demo1/dashboard.html">
                        <img src="../assets/images/screenshots/light.jpg" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item active" href="../demo2/dashboard.html">
                        <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
                    </a>
                </div>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                                    class="ms-1 me-1 d-none d-md-inline-block">English</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us"
                                        title="us" id="us"></i> <span class="ms-1"> English </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr"
                                        title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de"
                                        title="de" id="de"></i> <span class="ms-1"> German </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt"
                                        title="pt" id="pt"></i> <span class="ms-1"> Portuguese
                                    </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es"
                                        title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p class="mb-0 fw-bold">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="row g-0 p-1">
                                    <div class="col-3 text-center">
                                        <a href="pages/apps/chat.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="message-square" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Chat</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/apps/calendar.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="calendar" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Calendar</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/email/inbox.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="mail" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Email</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/general/profile.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="instagram" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Profile</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Leonardo Payne</p>
                                                <p class="tx-12 text-muted">Project status</p>
                                            </div>
                                            <p class="tx-12 text-muted">2 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Carl Henson</p>
                                                <p class="tx-12 text-muted">Client meeting</p>
                                            </div>
                                            <p class="tx-12 text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Jensen Combs</p>
                                                <p class="tx-12 text-muted">Project updates</p>
                                            </div>
                                            <p class="tx-12 text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Amiah Burton</p>
                                                <p class="tx-12 text-muted">Project deatline</p>
                                            </div>
                                            <p class="tx-12 text-muted">2 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Yaretzi Mayo</p>
                                                <p class="tx-12 text-muted">New record</p>
                                            </div>
                                            <p class="tx-12 text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="gift"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New Order Recieved</p>
                                            <p class="tx-12 text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Server Limit Reached!</p>
                                            <p class="tx-12 text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New customer registered</p>
                                            <p class="tx-12 text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="layers"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Apps are ready for update</p>
                                            <p class="tx-12 text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="download"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Download completed</p>
                                            <p class="tx-12 text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                    alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle"
                                            src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">Amiah Burton</p>
                                        <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                            <span class="input-group-text input-group-addon bg-transparent border-primary"
                                data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                            <input type="text" class="form-control bg-transparent border-primary"
                                placeholder="Select date" data-input>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="printer"></i>
                            Print
                        </button>
                        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                            Download Report
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <div class="row flex-grow-1">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">New Customers</h6>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">3,897</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+3.3%</span>
                                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">New Orders</h6>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">35,084</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-danger">
                                                        <span>-2.8%</span>
                                                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Growth</h6>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">89.87%</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+2.8%</span>
                                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                    <h6 class="card-title mb-0">Revenue</h6>
                                    <div class="dropdown">
                                        <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-md-7">
                                        <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business
                                            has from its normal business activities, usually from the sale of goods and
                                            services to customers.</p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-md-end">
                                        <div class="btn-group mb-3 mb-md-0" role="group"
                                            aria-label="Basic example">
                                            <button type="button" class="btn btn-outline-primary">Today</button>
                                            <button type="button"
                                                class="btn btn-outline-primary d-none d-md-block">Week</button>
                                            <button type="button" class="btn btn-primary">Month</button>
                                            <button type="button" class="btn btn-outline-primary">Year</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="revenueChart"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Monthly sales</h6>
                                    <div class="dropdown mb-2">
                                        <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted">Sales are activities related to selling or the number of goods or
                                    services sold in a given time period.</p>
                                <div id="monthlySalesChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Cloud storage</h6>
                                    <div class="dropdown mb-2">
                                        <a type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="storageChart"></div>
                                <div class="row mb-3">
                                    <div class="col-6 d-flex justify-content-end">
                                        <div>
                                            <label
                                                class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total
                                                storage <span
                                                    class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                                            <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label
                                                class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span
                                                    class="p-1 me-1 rounded-circle bg-primary"></span> Used
                                                storage</label>
                                            <h5 class="fw-bolder mb-0">~5TB</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary">Upgrade storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Inbox</h6>
                                    <div class="dropdown mb-2">
                                        <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="printer"
                                                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="download"
                                                    class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35"
                                                class="rounded-circle wd-35" alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Leonardo Payne</h6>
                                                <p class="text-muted tx-12">12.30 PM</p>
                                            </div>
                                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35"
                                                class="rounded-circle wd-35" alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Carl Henson</h6>
                                                <p class="text-muted tx-12">02.14 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">I've finished it! See you so..</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35"
                                                class="rounded-circle wd-35" alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Jensen Combs</h6>
                                                <p class="text-muted tx-12">08.22 PM</p>
                                            </div>
                                            <p class="text-muted tx-13">This template is awesome!</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35"
                                                class="rounded-circle wd-35" alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Amiah Burton</h6>
                                                <p class="text-muted tx-12">05.49 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">Nice to meet you</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35"
                                                class="rounded-circle wd-35" alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                                                <p class="text-muted tx-12">01.19 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Projects</h6>
                                    <div class="dropdown mb-2">
                                        <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="eye"
                                                    class="icon-sm me-2"></i> <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="edit-2"
                                                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="trash"
                                                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="printer"
                                                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="javascript:;"><i data-feather="download"
                                                    class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="pt-0">#</th>
                                                <th class="pt-0">Project Name</th>
                                                <th class="pt-0">Start Date</th>
                                                <th class="pt-0">Due Date</th>
                                                <th class="pt-0">Status</th>
                                                <th class="pt-0">Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>NobleUI jQuery</td>
                                                <td>01/01/2022</td>
                                                <td>26/04/2022</td>
                                                <td><span class="badge bg-danger">Released</span></td>
                                                <td>Leonardo Payne</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>NobleUI Angular</td>
                                                <td>01/01/2022</td>
                                                <td>26/04/2022</td>
                                                <td><span class="badge bg-success">Review</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>NobleUI ReactJs</td>
                                                <td>01/05/2022</td>
                                                <td>10/09/2022</td>
                                                <td><span class="badge bg-info">Pending</span></td>
                                                <td>Jensen Combs</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>NobleUI VueJs</td>
                                                <td>01/01/2022</td>
                                                <td>31/11/2022</td>
                                                <td><span class="badge bg-warning">Work in Progress</span>
                                                </td>
                                                <td>Amiah Burton</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>NobleUI Laravel</td>
                                                <td>01/01/2022</td>
                                                <td>31/12/2022</td>
                                                <td><span class="badge bg-danger">Coming soon</span></td>
                                                <td>Yaretzi Mayo</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>NobleUI NodeJs</td>
                                                <td>01/01/2022</td>
                                                <td>31/12/2022</td>
                                                <td><span class="badge bg-primary">Coming soon</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom">3</td>
                                                <td class="border-bottom">NobleUI EmberJs</td>
                                                <td class="border-bottom">01/05/2022</td>
                                                <td class="border-bottom">10/11/2022</td>
                                                <td class="border-bottom"><span class="badge bg-info">Pending</span>
                                                </td>
                                                <td class="border-bottom">Jensen Combs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

            </div>

            <!-- partial:partials/_footer.html -->
            <footer
                class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com"
                        target="_blank">NobleUI</a>.</p>
                <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                        data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>
@include('backend.components.script')

</body>

</html>
