@extends('layout')
@section('content')           
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Welcome !</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                   
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Premium Dealer Contacts</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">{{$data['premiumDealerContactsCount']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Dealer Contacts</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">{{$data['dealerContactsCount']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Distributor Contacts</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">{{$data['distributorContactsCount']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Retailer Contacts</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">-</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->

                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Mechanic Contacts</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">{{$data['mechanicContactsCount']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->

                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Banco Staff Contacts</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">{{$data['bancoStaffContactsCount']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->

                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="mb-3">Fleets</h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-md">
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="#"><i data-feather="eye"></i></a>
                                                        </div>
                                                        <p class="fs-1 mb-0">-</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                  
                        
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar" height="300" data-colors='["--bs-success"]'></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar" height="300" data-colors='["--bs-success"]'></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar" height="300" data-colors='["--bs-success"]'></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar" height="300" data-colors='["--bs-success"]'></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                       

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Banco.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Robust Promotions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
         
@endsection
       