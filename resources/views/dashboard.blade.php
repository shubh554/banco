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
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="managePremiumDealerContacts"><i data-feather="eye"></i></a>
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
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="manageDealerContacts"><i data-feather="eye"></i></a>
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
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="manageDealerContacts"><i data-feather="eye"></i></a>
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
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="manageMechanicContacts"><i data-feather="eye"></i></a>
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
                                                            <a class="avatar-title bg-success-subtle text-success font-size-11 rounded" href="manageBancoStaffContacts"><i data-feather="eye"></i></a>
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
                                        <h4 class="card-title mb-0">Messages Sent To Premmium Dealers</h4>
                                    </div>
                                    <div class="card-body">
                                       <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Messages Sent To Dealers</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart2"></canvas>
                                     </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Messages Sent To Distributors</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart3"></canvas>
                                     </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Messages Sent To Retailers</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart4"></canvas>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- chart 1 --}}
<script>
 const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Number of Messages',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        '#1c84ee',
                        '#1c84ee',
                        '#1c84ee',
                        '#1c84ee',
                        '#1c84ee',
                        '#1c84ee'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });    
</script> 
{{-- chart 2 --}}
<script>
    const barCtx2 = document.getElementById('barChart2').getContext('2d');
           const barChart2 = new Chart(barCtx2, {
               type: 'bar',
               data: {
                   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                   datasets: [{
                       label: 'Number of Messages',
                       data: [12, 19, 3, 5, 2, 3],
                       backgroundColor: [
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee'
                       ],
                       borderWidth: 0
                   }]
               },
               options: {
                   responsive: true,
                   plugins: {
                       legend: {
                           position: 'top'
                       }
                   }
               }
           });    
   </script>    
   {{-- chart 3 --}}
<script>
    const barCtx3 = document.getElementById('barChart3').getContext('2d');
           const barChart3 = new Chart(barCtx3, {
               type: 'bar',
               data: {
                   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                   datasets: [{
                       label: 'Number of Messages',
                       data: [12, 19, 3, 5, 2, 3],
                       backgroundColor: [
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee'
                       ],
                       borderWidth: 0
                   }]
               },
               options: {
                   responsive: true,
                   plugins: {
                       legend: {
                           position: 'top'
                       }
                   }
               }
           });    
   </script>   
  {{-- chart 4 --}}
<script>
    const barCtx4 = document.getElementById('barChart4').getContext('2d');
           const barChart4 = new Chart(barCtx4, {
               type: 'bar',
               data: {
                   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                   datasets: [{
                       label: 'Number of Messages',
                       data: [12, 19, 3, 5, 2, 3],
                       backgroundColor: [
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee',
                           '#1c84ee'
                       ],
                       borderWidth: 0
                   }]
               },
               options: {
                   responsive: true,
                   plugins: {
                       legend: {
                           position: 'top'
                       }
                   }
               }
           });    
   </script>    
@endsection
       