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
                        <h4 class="mb-sm-0 font-size-18">Manage Users</h4>
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
                                <li class="breadcrumb-item active">Manage Users</li>
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
                        <h4 class="card-title">Manage Templates</h4>
                            <p class="card-title-desc">Welcome to Template Management section! Here, you can effortlessly manage temple messages for sending to users.
                                 Check their approval status from WhatsApp, all in one place.
                             </div>
                            <div>
                               <a href="#" class="btn btn-primary greenBg" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Text</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($templates as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['message']}}</td>
                                    <td>
                                        @if($row['status'] == 'pending')
                                        <button type="button" class="btn btn-soft-light waves-effect waves-light"><i class="bx bx-hourglass font-size-16 align-middle"></i></button>
                                        @else
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="bx bx-check-double font-size-16 align-middle"></i></button>
                                        @endif
                                    </td>
                                    <td><button type="button" class="btn btn-soft-primary waves-effect waves-light"data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="fas fa-eye" ></i></button>
                                    <button type="button" class="btn btn-soft-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>
                                    <button onclick="window.location=`delTemp/{{$row['id']}}`"  type="button" class="btn btn-soft-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bx bx-block font-size-16 align-middle"></i></button>
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
    <!-- modal -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel">Add New Template</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="addTemplate" method="post">
                                                                @csrf
                                                            <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">Name</label>
                                                            <input class="form-control" type="text" value="" placeholder
                                                            ="Enter user's name" id="example-text-input"
                                                            required data-pristine-required-message="Please Enter template name"
                                                            name = "name"
                                                            >
                                                           </div>
                                                           <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">Message</label><br>
                                                            <textarea id="message" name="message" rows="4"></textarea>
                                                           </div>
                                                          <input type="submit" class = "btn btn-primary greenBg"/>
                                                        </form>
                                                     </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
    
@endsection