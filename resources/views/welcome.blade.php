<!DOCTYPE html>
<html data-header-styles='light' data-menu-styles='dark' data-nav-layout='vertical' data-theme-mode='light'
    data-toggled='close' dir='ltr' lang='en'>

<head>
    <link rel="preload" href="{{ asset('css/main.css') }}"
        media="all" data-turbolinks-track="reload" as="style" onload="this.rel=&#39;stylesheet&#39;" />
    <link rel="stylesheet"
        href="{{ asset('css/bootstrap.css') }}" media="all"
        data-turbolinks-track="reload" />


    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <title>Avista</title>
    <link href='/uploads/64jaimkrd3uvb3jiljg27vxzc83c/favicon.png' rel='icon' type='image/x-icon'>
</head>

<body>
    <div class='page'>
        <header class='app-header'>
            <div class='main-header-container container-fluid'>
                <div class='header-content-left'>
                    <div class='header-element'>
                        <div class='horizontal-logo'>
                        </div>
                    </div>
                    <div class='header-element'>
                        <a aria-label='Hide Sidebar'
                            class='sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle'
                            data-bs-toggle='sidebar' href='javascript:void(0);'>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class='header-content-right'>
                    <div class='header-element header-search'>
                        <a class='header-link' data-bs-target='#searchModal' data-bs-toggle='modal'
                            href='javascript:void(0);'>
                            <i class='bx bx-search-alt-2 header-link-icon'></i>
                        </a>
                    </div>
                    <div class='header-element cart-dropdown'>
                        <a class='header-link dropdown-toggle' data-bs-auto-close='outside' data-bs-toggle='dropdown'
                            href='javascript:void(0);'>
                            <i class='bx bx-bell header-link-icon'></i>
                            <span
                                class='badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary notis-count'>2</span>
                        </a>
                        <div class='main-header-dropdown dropdown-menu dropdown-menu-end' data-popper-placement='none'>
                            <div id='header-notis'>
                                <div class='p-3'>
                                    <div class='d-flex align-items-center justify-content-between'>
                                        <p class='mb-0 fs-17 fw-semibold'>Notifications</p>
                                        <span class='badge bg-success-transparent'>2</span>
                                    </div>
                                </div>
                                <div>
                                    <hr class='dropdown-divider'>
                                </div>
                                <ul class='list-unstyled mb-0'>
                                    <li class='dropdown-item'>
                                        <div class='d-flex align-items-start'>
                                            <div class='pe-2'>
                                                <span class='avatar avatar-md bg-primary-transparent avatar-rounded'>
                                                    <i class='fs-18 ti ti-checks'></i>
                                                </span>
                                            </div>
                                            <div class='flex-grow-1'>
                                                <div class='d-flex align-items-start justify-content-between mb-0'>
                                                    <div class='mb-0 fs-13 text-dark fw-semibold'>
                                                        <a
                                                            href='https://avista.technoreon.com/merchanthq/quotations/79?noti=13'>There
                                                            is new accepted quotation</a>
                                                    </div>
                                                    <div>
                                                        <a class='header-cart-remove float-end' data-remote
                                                            href='/merchanthq/notifications/13/remove'>
                                                            <i class='ti ti-trash'></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class='min-w-fit-content d-flex align-items-start justify-content-between'>
                                                    <ul class='header-product-item d-flex'>
                                                        <li>MPC/ULANQ002</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class='dropdown-item'>
                                        <div class='d-flex align-items-start'>
                                            <div class='pe-2'>
                                                <span class='avatar avatar-md bg-primary-transparent avatar-rounded'>
                                                    <i class='fs-18 ti ti-checks'></i>
                                                </span>
                                            </div>
                                            <div class='flex-grow-1'>
                                                <div class='d-flex align-items-start justify-content-between mb-0'>
                                                    <div class='mb-0 fs-13 text-dark fw-semibold'>
                                                        <a
                                                            href='https://avista.technoreon.com/merchanthq/quotations/51?noti=11'>There
                                                            is new accepted quotation</a>
                                                    </div>
                                                    <div>
                                                        <a class='header-cart-remove float-end' data-remote
                                                            href='/merchanthq/notifications/11/remove'>
                                                            <i class='ti ti-trash'></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class='min-w-fit-content d-flex align-items-start justify-content-between'>
                                                    <ul class='header-product-item d-flex'>
                                                        <li>Q050</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class='p-3 empty-header-item border-top'>
                                    <div class='d-grid'>
                                        <a class='btn btn-primary' href='/merchanthq/notifications'>View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='header-element header-shortcuts-dropdown'>
                        <a aria-expanded='false' class='header-link dropdown-toggle' data-bs-auto-close='outside'
                            data-bs-toggle='dropdown' href='javascript:void(0);' id='notificationDropdown'>
                            <i class='bx bx-grid-alt header-link-icon'></i>
                        </a>
                        <div aria-labelledby='notificationDropdown'
                            class='main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end'>
                            <div class='main-header-shortcuts p-2' id='header-shortcut-scroll'>
                                <div class='row g-2'>
                                    <div class='col-6'>
                                        <a href='/merchanthq/clients/new'>
                                            <div class='text-center p-3 related-app'>
                                                <i class='ti ti-user-plus'></i>
                                                <span class='d-block fs-12'>New Client</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='col-6'>
                                        <a href='/merchanthq/invoices/new'>
                                            <div class='text-center p-3 related-app'>
                                                <i class='ti ti-file-invoice'></i>
                                                <span class='d-block fs-12'>New Invoice</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='col-6'>
                                        <a href='/merchanthq/contracts/new'>
                                            <div class='text-center p-3 related-app'>
                                                <i class='ti ti-contrast'></i>
                                                <span class='d-block fs-12'>New Contract</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='col-6'>
                                        <a href='/merchanthq/agencies/new'>
                                            <div class='text-center p-3 related-app'>
                                                <i class='ti ti-3d-cube-sphere'></i>
                                                <span class='d-block fs-12'>New Agency</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class='p-3 border-top'>
                                <div class='d-grid'>
                                    <a class='btn btn-primary' href='/'>Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='header-element header-fullscreen'>
                        <a class='header-link' href='javascript:void(0);' onclick='openFullscreen();'>
                            <i class='bx bx-fullscreen full-screen-open header-link-icon'></i>
                            <i class='bx bx-exit-fullscreen full-screen-close header-link-icon d-none'></i>
                        </a>
                    </div>
                    <div class='header-element'>
                        <a aria-expanded='false' class='header-link dropdown-toggle' data-bs-auto-close='outside'
                            data-bs-toggle='dropdown' href='javascript:void(0);' id='mainHeaderProfile'>
                            <div class='d-flex align-items-center'>
                                <div class='me-sm-2 me-0'>
                                    <img class="rounded-circle main-avatar"
                                        src="https://avista.technoreon.com/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBOZz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--c9e8659483c26fc3165f5ef75042670c47d174b5/4.jpg?locale=en" />
                                </div>
                                <div class='d-sm-block d-none'>
                                    <p class='fw-semibold mb-0 lh-1'>ahmed ramadan</p>
                                    <span class='op-7 fw-normal d-block fs-11'>Manager</span>
                                </div>
                            </div>
                        </a>
                        <ul aria-labelledby='mainHeaderProfile'
                            class='main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end'>
                            <li>
                                <a class='dropdown-item d-flex' href='/merchanthq/profile'><i
                                        class='ti ti-user-circle fs-18 me-2 op-7'></i>Profile
                                </a>
                            </li>
                            <li>
                                <a class='dropdown-item d-flex border-block-end'
                                    href='/merchanthq/profile/edit_password'><i
                                        class='ti ti-lock fs-18 me-2 op-7'></i>Change Password
                                </a>
                            </li>
                            <li class='border-bottom'>
                                <a class='dropdown-item d-flex' href='/merchanthq/profile/lock_screen'><i
                                        class='ti ti-lock-open-off fs-18 me-2 op-7'></i>Lock Session
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex text-danger" rel="nofollow" data-method="delete"
                                    href="/merchants/sign_out"><i class='ti ti-logout fs-18 me-2 op-7'></i>Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class='header-element'>
                        <a class='header-link switcher-icon' href='/merchanthq/profile'>
                            <i class='bx bx-cog header-link-icon'></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <aside class='app-sidebar sticky' id='sidebar'>
            <div class='main-sidebar-header'>
            </div>
            <div class='main-sidebar' id='sidebar-scroll'>
                <nav class='main-menu-container nav nav-pills flex-column sub-open'>
                    <div class='slide-left' id='slide-left'>
                        <svg fill='#7b8191' height='24' viewbox='0 0 24 24' width='24'
                            xmlns='http://www.w3.org/2000/svg'>
                            <path d='M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z'></path>
                        </svg>
                    </div>
                    <ul class='main-menu'>
                        <li class='slide__category'>
                            <span class='category-name'>Main</span>
                        </li>
                        <li class='mb-1 slide active'>
                            <a class='side-menu__item' href='/'>
                                <i class='bx bx-home side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-3d-cube-sphere side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Agencies
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/agencies'>List All</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/agencies/new'>Add New</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide__category'>
                            <span class='category-name'>Client Zone</span>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-user-check side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Clients
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/clients'>List All</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/clients/new'>Add New</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-file-unknown side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Quotations
                                    <span class='badge bg-secondary-transparent ms-2'>0</span>
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/quotations'>List All</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/quotations/new'>Add New</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-contrast side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Contracts
                                    <span class='badge bg-secondary-transparent ms-2'>0</span>
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/contracts'>List All</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/contracts/new'>Add New</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide__category'>
                            <span class='category-name'>Invoices</span>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-file-invoice side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Invoices
                                    <span class='badge bg-secondary-transparent ms-2'>0</span>
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/invoices'>List All</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/invoices/new'>Add New</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/invoice_templates'>Templates</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide__category'>
                            <span class='category-name'>Analytics</span>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-report-analytics side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Analytics
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/invoice_analytics'>Invoices</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/quotation_analytics'>Quotations</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/contract_analytics'>Contracts</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide__category'>
                            <span class='category-name'>Staff</span>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-users side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Staff
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/staffs'>View All</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/staffs/new'>Add New</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide'>
                            <a class='side-menu__item' href='/merchanthq/roles'>
                                <i class='ti ti-lock-access side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Roles
                                </span>
                            </a>
                        </li>
                        <li class='slide__category'>
                            <span class='category-name'>Profile</span>
                        </li>
                        <li class='slide has-sub'>
                            <a class='side-menu__item' href='javascript:void(0);'>
                                <i class='ti ti-user-circle side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    My Profile
                                </span>
                                <i class='fe fe-chevron-right side-menu__angle'></i>
                            </a>
                            <ul class='slide-menu child1'>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/profile/edit_profile'>Edit
                                        Profile</a>
                                </li>
                                <li class='slide'>
                                    <a class='side-menu__item' href='/merchanthq/profile/edit_password'>Change
                                        Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class='slide'>
                            <a class='side-menu__item' href='/merchanthq/notification_receivers'>
                                <i class='ti ti-notification side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    My Notifications
                                </span>
                            </a>
                        </li>
                        <li class='slide__category'>
                            <span class='category-name'>Recycle Bin</span>
                        </li>
                        <li class='slide'>
                            <a class='side-menu__item' href='/merchanthq/recycle_bin'>
                                <i class='ti ti-trash side-menu__icon'></i>
                                <span class='side-menu__label'>
                                    Recycle Bin
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class='slide-right' id='slide-right'>
                        <svg fill='#7b8191' height='24' viewbox='0 0 24 24' width='24'
                            xmlns='http://www.w3.org/2000/svg'>
                            <path d='M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z'></path>
                        </svg>
                    </div>
                </nav>
            </div>
        </aside>
        <div aria-hidden='true' aria-labelledby='searchModal' class='modal fade' id='searchModal' tabindex='-1'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <form action='/merchanthq/search' method='get'>
                        <div class='modal-body'>
                            <div class='input-group'>
                                <div class='input-group-text' id='Search-Grid'>
                                    <i class='fe fe-search header-link-icon fs-18'></i>
                                </div>
                                <input class='form-control border-0 px-2' name='q' placeholder='Search...'
                                    type='search' value=''>
                                <button class='btn btn-light btn-icon' type='submit'>
                                    <i class='fe fe-arrow-right'></i>
                                </button>
                            </div>
                            <div class='mt-4'>
                                <a class='search-tags' href='/merchanthq/clients'>
                                    <i class='fe fe-user me-2'></i>
                                    Clients
                                </a>
                                <a class='search-tags' href='/merchanthq/invoices'><i
                                        class='ti ti-file-invoice me-2'></i>Invoices
                                </a>
                                <a class='search-tags' href='/merchanthq/contracts'>
                                    <i class='ti ti-contrast me-2'></i>
                                    Contracts
                                </a>
                            </div>
                            <div class='mt-3 recent-search-terms'>
                                <p class='font-weight-semibold text-muted mb-2'>Recent</p>
                                <div class='p-2 border br-5 d-flex align-items-center text-muted mb-2 alert'>
                                    <a href='/merchanthq/search?q=clients'>
                                        <span>clients</span>
                                    </a>
                                    <a class="ms-auto lh-1" aria-label="Close" data-bs-dismiss="alert"
                                        data-remote="true" rel="nofollow" data-method="delete"
                                        href="/merchanthq/recent_search/1"><i class='fe fe-x text-muted'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class='modal-footer'>
                            <div class='btn-group ms-auto'>
                                <a class="btn btn-sm btn-primary-light" data-remote="true"
                                    href="/merchanthq/recent_search/destroy_all">Clear
                                </a><button class='btn btn-sm btn-primary'>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class='main-content app-content'>
            <div class='container-fluid'>
                <div class='d-flex align-items-center justify-content-between my-4 page-header-breadcrumb'>
                    <h1 class='page-title fw-semibold fs-18 mb-0'>Dashboard</h1>
                    <div class='ms-md-1 ms-0'>
                        <nav>
                            <ol class='breadcrumb mb-0'>
                                <li class='breadcrumb-item'>
                                    <a href='/'>Home</a>
                                </li>
                                <li aria-current='page' class='breadcrumb-item active'>Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-12'>

                    </div>
                    <div class='col-md-4'>
                        <div class='card custom-card'>
                            <div class='card-body p-0'>
                                <div class='p-3'>
                                    <div class='d-flex flex-wrap mb-1'>
                                        <a class='pe-2' href='javascript:void(0);'>
                                            <span class='avatar border text-muted text-primary'>
                                                <i class='ti ti-3d-cube-sphere fs-18'></i>
                                            </span>
                                        </a>
                                        <div class='flex-fill align-self-center'>
                                            <div
                                                class='d-flex flex-wrap align-items-center justify-content-between mb-1'>
                                                <span class='fw-semibold'>Agencies</span>
                                                <span class='alert alert-primary alert-sm text-end'>
                                                    1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='d-flex align-items-center mt-2'>
                                        <a class='flex-fill btn btn-sm btn-light me-2'
                                            href='/merchanthq/agencies'>List All</a>
                                        <a class='flex-fill btn btn-sm btn-primary-light'
                                            href='/merchanthq/agencies/new'>Add New</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='card custom-card'>
                            <div class='card-body p-0'>
                                <div class='p-3'>
                                    <div class='d-flex flex-wrap mb-1'>
                                        <a class='pe-2' href='javascript:void(0);'>
                                            <span class='avatar border text-muted text-secondary'>
                                                <i class='ti ti-user-check fs-18'></i>
                                            </span>
                                        </a>
                                        <div class='flex-fill align-self-center'>
                                            <div
                                                class='d-flex flex-wrap align-items-center justify-content-between mb-1'>
                                                <span class='fw-semibold'>Clients</span>
                                                <span class='alert alert-secondary alert-sm text-end'>
                                                    1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='d-flex align-items-center mt-2'>
                                        <a class='flex-fill btn btn-sm btn-light me-2' href='/merchanthq/clients'>List
                                            All</a>
                                        <a class='flex-fill btn btn-sm btn-secondary-light'
                                            href='/merchanthq/clients/new'>Add New</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='card custom-card'>
                            <div class='card-body p-0'>
                                <div class='p-3'>
                                    <div class='d-flex flex-wrap mb-1'>
                                        <a class='pe-2' href='javascript:void(0);'>
                                            <span class='avatar border text-muted text-warning'>
                                                <i class='ti ti-user-check fs-18'></i>
                                            </span>
                                        </a>
                                        <div class='flex-fill align-self-center'>
                                            <div
                                                class='d-flex flex-wrap align-items-center justify-content-between mb-1'>
                                                <span class='fw-semibold'>Invoices</span>
                                                <span class='alert alert-warning alert-sm text-end'>
                                                    1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='d-flex align-items-center mt-2'>
                                        <a class='flex-fill btn btn-sm btn-light me-2'
                                            href='/merchanthq/invoices'>List All</a>
                                        <a class='flex-fill btn btn-sm btn-warning-light'
                                            href='/merchanthq/invoices/new'>Add New</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='card custom-card'>
                            <div class='card-body p-0'>
                                <div class='p-3'>
                                    <div class='d-flex flex-wrap mb-1'>
                                        <a class='pe-2' href='javascript:void(0);'>
                                            <span class='avatar border text-muted text-danger'>
                                                <i class='ti ti-file-unknown fs-18'></i>
                                            </span>
                                        </a>
                                        <div class='flex-fill align-self-center'>
                                            <div
                                                class='d-flex flex-wrap align-items-center justify-content-between mb-1'>
                                                <span class='fw-semibold'>Quotations</span>
                                                <span class='alert alert-danger alert-sm text-end'>
                                                    1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='d-flex align-items-center mt-2'>
                                        <a class='flex-fill btn btn-sm btn-light me-2'
                                            href='/merchanthq/quotations'>List All</a>
                                        <a class='flex-fill btn btn-sm btn-danger-light'
                                            href='/merchanthq/quotations/new'>Add New</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='card custom-card'>
                            <div class='card-body p-0'>
                                <div class='p-3'>
                                    <div class='d-flex flex-wrap mb-1'>
                                        <a class='pe-2' href='javascript:void(0);'>
                                            <span class='avatar border text-muted text-success'>
                                                <i class='ti ti-contrast fs-18'></i>
                                            </span>
                                        </a>
                                        <div class='flex-fill align-self-center'>
                                            <div
                                                class='d-flex flex-wrap align-items-center justify-content-between mb-1'>
                                                <span class='fw-semibold'>Contracts</span>
                                                <span class='alert alert-success alert-sm text-end'>
                                                    0
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='d-flex align-items-center mt-2'>
                                        <a class='flex-fill btn btn-sm btn-light me-2'
                                            href='/merchanthq/contracts'>List All</a>
                                        <a class='flex-fill btn btn-sm btn-success-light'
                                            href='/merchanthq/contracts/new'>Add New</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='card custom-card'>
                            <div class='card-header justify-content-between'>
                                <div class='card-title'>
                                    Pending Payments
                                </div>
                            </div>
                            <div class='card-body'>
                                <div class='table-responsive'>
                                    <table class='table text-nowrap table-bordered'>
                                        <thead>
                                            <tr>
                                                <th scope='col'>Contract</th>
                                                <th scope='col'>Client</th>
                                                <th scope='col'>Term</th>
                                                <th scope='col'>Amount</th>
                                                <th scope='col'></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='card custom-card'>
                            <div class='card-header justify-content-between'>
                                <div class='card-title'>
                                    Pending Invoices
                                </div>
                            </div>
                            <div class='card-body'>
                                <div class='table-responsive'>
                                    <table class='table text-nowrap table-bordered'>
                                        <thead>
                                            <tr>
                                                <th scope='col'>Invoice</th>
                                                <th scope='col'>Client</th>
                                                <th scope='col'>Due date</th>
                                                <th scope='col'>Amount</th>
                                                <th scope='col'></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='card custom-card'>
                            <div class='card-header justify-content-between'>
                                <div class='card-title'>
                                    Pending Quotations
                                </div>
                            </div>
                            <div class='card-body'>
                                <div class='table-responsive'>
                                    <table class='table text-nowrap table-bordered'>
                                        <thead>
                                            <tr>
                                                <th scope='col'>Code</th>
                                                <th scope='col'>Client</th>
                                                <th scope='col'>Amount</th>
                                                <th scope='col'></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class='footer mt-auto py-3 bg-white text-center'>
        <div class='container'>
            <span class='text-muted'>
                Copyright ©
                <span id='year'></span>
            </span>
        </div>
    </footer>
    <div class='scrollToTop'>
        <span class='arrow'>
            <i class='ri-arrow-up-s-fill fs-20'></i>
        </span>
    </div>
    <div id='responsive-overlay'></div>
    <div id='toastrs'></div>

    <script src="{{asset('js/jQuery.js') }}"
        data-turbolinks-track="reload"></script>



</body>

</html>
