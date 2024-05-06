@extends('layout')
@section('content')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contact List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

       <div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                    
                                    <div>
                                        <a href="#" class="btn btn-light greenBg" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-plus me-1"></i> Add New</a>
                                    </div>
                                    
                                    <div class="dropdown">
                                        <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                    
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                        <div class="table-responsive mb-4">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Product Type</th>
                                    <th>Category</th>
                                    <th>Name Of Garage</th>
                                    <th>Customer Name</th>
                                    <th>Mobile Number</th>
                                    <th>Segment</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Area</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Edinburgh</td>
                                    <td>Ram</td>
                                    <td>9161760876</td>
                                    <td>Leyland</td>
                                    <td>Surat</td>
                                    <td>Gujrat</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Edinburgh</td>
                                    <td>Ram</td>
                                    <td>9161760876</td>
                                    <td>Leyland</td>
                                    <td>Surat</td>
                                    <td>Gujrat</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Shyam</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Raj</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Ravi</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Uttar Pradesh</td>
                                    <td>Lucknow</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Suresh</td>
                                    <td>9876543210</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Rajesh</td>
                                    <td>9876543210</td>
                                    <td>Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Rakesh</td>
                                    <td>9123456789</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Sunil</td>
                                    <td>9988776655</td>
                                    <td>Car</td>
                                    <td>Uttar Pradesh</td>
                                    <td>Lucknow</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Vikas</td>
                                    <td>9876543210</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Sachin</td>
                                    <td>9234567890</td>
                                    <td>LCV/Car</td>
                                    <td>Gujarat</td>
                                    <td>Ahmedabad</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Rahul</td>
                                    <td>9876543210</td>
                                    <td>Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Rakesh</td>
                                    <td>9123456789</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Sunil</td>
                                    <td>9988776655</td>
                                    <td>Car</td>
                                    <td>Uttar Pradesh</td>
                                    <td>Lucknow</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Vikas</td>
                                    <td>9876543210</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Sachin</td>
                                    <td>9234567890</td>
                                    <td>LCV/Car</td>
                                    <td>Gujarat</td>
                                    <td>Ahmedabad</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Ankit</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Vishal</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Rohit</td>
                                    <td>9123456789</td>
                                    <td>Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Manoj</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Arun</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>HCV/Leyland</td>
                                    <td>Uttar Pradesh</td>
                                    <td>Lucknow</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Amit</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rajesh</td>
                                    <td>9234567890</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Sanjay</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Ankit</td>
                                    <td>9876543210</td>
                                    <td>HCV/Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Vivek</td>
                                    <td>9123456789</td>
                                    <td>Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Manoj</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Rajesh</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sunil</td>
                                    <td>9876543210</td>
                                    <td>HCV/Leyland</td>
                                    <td>Uttar Pradesh</td>
                                    <td>Lucknow</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Vikas</td>
                                    <td>9988776655</td>
                                    <td>Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Sachin</td>
                                    <td>9123456789</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Anil</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Abhishek</td>
                                    <td>9988776655</td>
                                    <td>HCV/Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Rakesh</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Sumit</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Rahul</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Arvind</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Chennai</td>
                                    <td>Rahul</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Ankur</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Prashant</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Mumbai</td>
                                    <td>Alok</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Raj</td>
                                    <td>9234567890</td>
                                    <td>Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Kolkata</td>
                                    <td>Deepak</td>
                                    <td>9988776655</td>
                                    <td>Leyland</td>
                                    <td>West Bengal</td>
                                    <td>Kolkata</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Mechanic</td>
                                    <td>Delhi</td>
                                    <td>Sanjay</td>
                                    <td>9876543210</td>
                                    <td>LCV/Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Mumbai</td>
                                    <td>Manoj</td>
                                    <td>9123456789</td>
                                    <td>HCV/Leyland</td>
                                    <td>Maharashtra</td>
                                    <td>Mumbai</td>
                                    <td>East India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Mechanic</td>
                                    <td>Chennai</td>
                                    <td>Arun</td>
                                    <td>9988776655</td>
                                    <td>LCV/Car</td>
                                    <td>Tamil Nadu</td>
                                    <td>Chennai</td>
                                    <td>South India</td>
                                </tr>
                                <tr>
                                    <td>Radiator</td>
                                    <td>Reborer</td>
                                    <td>Bangalore</td>
                                    <td>Deepak</td>
                                    <td>9234567890</td>
                                    <td>Leyland</td>
                                    <td>Karnataka</td>
                                    <td>Bangalore</td>
                                    <td>West India</td>
                                </tr>
                                <tr>
                                    <td>Gasket</td>
                                    <td>Reborer</td>
                                    <td>Delhi</td>
                                    <td>Sanjeev</td>
                                    <td>9876543210</td>
                                    <td>Car</td>
                                    <td>Delhi</td>
                                    <td>Delhi</td>
                                    <td>North India</td>
                                </tr>
                                
                                
                               
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                   </div>
               </div>
           </div>
       </div>
        
    </div> <!-- container-fluid -->
</div>
<!-- modal -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add a contact</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="/addMechanic" method="post"  enctype="multipart/form-data">
                                                        @csrf    
                                                        
                                                        <div class="mb-3">
                                                        <label class="form-label">Customer Type</label>
                                                        <select class="form-select">
                                                            <option value="dealer">Dealer</option>
                                                            <option value="retailer">Retailer</option>
                                                            <option value="mechanic">Mechanic</option>
                                                        </select>
                                                        </div>
                                                        <div class="mb-3">
                                                        <label class="form-label">Upload Excel</label><br>
                                                        <input type="file" id="excel_file" name="excel_file" accept=".csv">
                                                        </div>
                                                        <input type="submit" class="btn btn-primary greenBg"/>
                                                        </div>
                                                        
                                                        </form><br>
                                                        <div class="alert alert-info" role="alert">
                                                            <li>Max Rows : 1000</li>
                                                            <li><a href="#">Download Format</a></li>
                                                        </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
<!-- End Page-content -->
<script>
       Dropzone.options.dropzoneArea = { // The camelized version of the ID of the form element

// The configuration we've talked about above
autoProcessQueue: false,
uploadMultiple: false,
parallelUploads: 100,
maxFiles: 1,

// The setting up of the dropzone
init: function() {
  var myDropzone = this;

  // First change the button to actually tell Dropzone to process the queue.
  this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
    // Make sure that the form isn't actually being sent.
    e.preventDefault();
    e.stopPropagation();
    myDropzone.processQueue();
  });

  // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
  // of the sending event because uploadMultiple is set to true.
  this.on("sendingmultiple", function() {
    // Gets triggered when the form is actually being sent.
    // Hide the success button or the complete form.
  });
  this.on("successmultiple", function(files, response) {
    // Gets triggered when the files have successfully been sent.
    // Redirect user or notify of success.
  });
  this.on("errormultiple", function(files, response) {
    // Gets triggered when there was an error sending the files.
    // Maybe show form again, and notify user of error
  });
}

}
    </script>
@endsection