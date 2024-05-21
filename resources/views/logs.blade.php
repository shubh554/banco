@extends('layout')
@section('content')
<style>
     textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid lightgray;
        border-radius: 4px;
        box-sizing: border-box; 
        resize: vertical;
    }
</style>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
    
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Manage Message Logs</h4>
                        <!-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->
                        
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert" style="width:600px">
                        @foreach ($errors->all() as $error)
                        {{$error}}<br>
                        @endforeach  
                        </div>
                        @endif 
                        
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                       @endif
    
                     
                                    
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Message Logs</li>
                            </ol>
                        </div>
    
                    </div>
                </div>
            </div>
            <!-- end page title -->
    
    
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="display:flex;justify-content:space-between">
                        <div>   
                     <p class="card-title-desc">Welcome to the Communication Management section! Here, you have the power to oversee your communications, view past endeavors, and refine your strategies for future success.





                          </div>
                        
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Mobile</th>
                                    <th>Communication ID</th>
                                    <th>Status</th>
                                 
                                </tr>
                                </thead>
    
    
                                <tbody>
                                    @foreach($list as $row)
                                <tr>
                                    <td>{{$row->mobile}}</td>
                                    <td>{{$row->communication_id}}</td>
                                    <td>
                                    @if($row->Status)
                                    <span class="badge bg-info-subtle text-success ">Sent</span>
                                    @else
                                    <span class="badge bg-info-subtle text-info ">Pending</span>
                                    @endif
                                    </td>  
                                  
                                </tr>
                                @endforeach
                               </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end cardaa -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    
@endsection