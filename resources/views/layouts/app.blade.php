<!DOCTYPE html>
<html data-header-styles='light' data-menu-styles='dark' data-nav-layout='vertical' data-theme-mode='light'
      data-toggled='close' dir='ltr' lang='en'>

<head>

    @include('layouts.styles')
    @stack('styles')

    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <title>Avista</title>
    <link href='/uploads/64jaimkrd3uvb3jiljg27vxzc83c/favicon.png' rel='icon' type='image/x-icon'>
</head>

<body>
<div class='page'>
    @include('layouts.header')
    @include('layouts.sidebar')
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
                            </a>
                            <button class='btn btn-sm btn-primary'>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @yield('content')
</div>
@include('layouts.footer')
<div class='scrollToTop'>
        <span class='arrow'>
            <i class='ri-arrow-up-s-fill fs-20'></i>
        </span>
</div>
<div id='responsive-overlay'></div>
<div id='toastrs'></div>

@include('layouts.scripts')
@stack('scripts')


</body>

</html>
