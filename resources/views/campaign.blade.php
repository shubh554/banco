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
                        <h4 class="mb-sm-0 font-size-18">Manage Communications</h4>
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
                                <li class="breadcrumb-item active">Manage Communications</li>
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
                            <div>
                               <a href="#" class="btn btn-primary greenBg" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Communication_ID</th>
                                    <th>Name</th>
                                    <th>Template</th>
                                    <th>Audience</th>
                                    <th>Progress</th>

                                 
                                </tr>
                                </thead>
    
    
                                <tbody>
                                    @foreach($communications as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->template->name}}</td>
                                    <td>{{$row->audience->name}}</td>  
                                    <td>{{$row->message_logs_with_status_true_count .'/'.$row->message_logs_count}}</td>
                                  
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
                                                                <h5 class="modal-title" id="myModalLabel">Send Message</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="addCampaign" method="post">
                                                                @csrf
                                                            <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">Name</label>
                                                            <input class="form-control" type="text" value="" placeholder
                                                            ="Enter communication name/purpose" id="example-text-input"
                                                            required data-pristine-required-message="Please Enter Communication name/purpose"
                                                            name = "name"
                                                            >
                                                           </div>
                                                           <div class="mb-3">
                                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Audience</label>
                                                            <select class="form-control" data-trigger 
                                                                id="choices-single-default"
                                                                name = "audience_id"
                                                                placeholder="This is a search placeholder">
                                                                @foreach($audience as $item) 
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Templete</label>
                                                            <select class="form-control" data-trigger 
                                                                id="choices-single-default"
                                                                name = "template_id"
                                                                placeholder="This is a search placeholder">
                                                                @foreach($templates as $item) 
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Repeat</label>
                                                            <select class="form-control" data-trigger name="choices-single-default"
                                                                id="choices-single-default"
                                                                placeholder="This is a search placeholder">
                                                                <option value="Choice 1">No-Repeat</option> 
                                                                <option value="Choice 1">Daily</option>
                                                                <option value="Choice 2">Weekly</option>
                                                                <option value="Choice 3">Monthly</option>
                                                            </select>
                                                        </div>

                                                        
                                                          <input type="submit" class = "btn btn-primary greenBg"/>
                                                        </form>
                                                     </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
    
@endsection