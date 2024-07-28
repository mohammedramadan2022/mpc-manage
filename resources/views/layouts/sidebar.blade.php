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
                            <a class='side-menu__item' href='{{route('agencies.create')}}'>Add New</a>
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
                            <a class='side-menu__item' href='{{route('clients.create')}}'>Add New</a>
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
