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
                <a class='header-link dropdown-toggle' data-bs-auto-close='outside'
                   data-bs-toggle='dropdown' href='javascript:void(0);'>
                    <i class='bx bx-bell header-link-icon'></i>
                    <span
                        class='badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary notis-count'>2</span>
                </a>
                <div class='main-header-dropdown dropdown-menu dropdown-menu-end'
                     data-popper-placement='none'>
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
                <a aria-expanded='false' class='header-link dropdown-toggle'
                   data-bs-auto-close='outside' data-bs-toggle='dropdown' href='javascript:void(0);'
                   id='notificationDropdown'>
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
                <a aria-expanded='false' class='header-link dropdown-toggle'
                   data-bs-auto-close='outside' data-bs-toggle='dropdown' href='javascript:void(0);'
                   id='mainHeaderProfile'>
                    <div class='d-flex align-items-center'>
                        <div class='me-sm-2 me-0'>
                            <img class="rounded-circle main-avatar"
                                 src="https://avista.technoreon.com/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBOZz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--c9e8659483c26fc3165f5ef75042670c47d174b5/4.jpg?locale=en"/>
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
                           href="/merchants/sign_out"><i
                                class='ti ti-logout fs-18 me-2 op-7'></i>Log Out
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
