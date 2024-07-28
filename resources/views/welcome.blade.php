@extends('layouts.app')
@section('content')
    <div class='main-content app-content'>
        <div class='container-fluid'>
            <div class='d-flex align-items-center justify-content-between my-4 page-header-breadcrumb'>
                <h1 class='page-title fw-semibold fs-18 mb-0'></h1>
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
@stop
