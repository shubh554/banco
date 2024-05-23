@extends('layout')
@section('content')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Premium Dealers</h4>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Premium Dealers List</li>
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
                                    <h5 class="card-title">Premium Dealers List</h5>
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
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Two-Wheeler</th>
                                    <th>Car/MUV</th>
                                    <th>LCV/HCV</th>
                                    <th>Industrial</th>
                                    <th>Genset</th>
                                    <th>Agriculture</th>
                                    <th>Tractor</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($list as $item)
                                        <td>{{$item->product_type}}</td>
                                        <td>{{$item->dealer_name}}</td>
                                        <td>{{$item->mobile}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->state}}</td>
                                        <td>{{ $item->{'2-Wheeler'} }}</td>
                                        <td>{{$item->{'Car/MUV'} }}</td>
                                        <td>{{$item->{'LCV/HCV'} }}</td>
                                        <td>{{$item->Industrial}}</td>
                                        <td>{{$item->Genset}}</td>
                                        <td>{{$item->Agriculture}}</td>
                                        <td>{{$item->Tractor}}</td>
                                        <td>
                                            @if($item->verified == 0)
                                            <span class="badge bg-danger-subtle text-danger ">Non-Whatsapp</span>
                                            @endif
                                            @if($item->verified == 1)
                                            <span class="badge bg-success-subtle text-success ">verified</span>
                                            @endif
                                            @if($item->verified == 2)
                                            <span class="badge bg-info-subtle text-info ">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button onclick="window.location=`delContact/{{$item['id']}}/{{'premium_dealer_contact'}}`"  type="button" class="btn btn-soft-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bx bx-block font-size-16 align-middle"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
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
                                                        <form action="/addPremiumDealer" method="post"  enctype="multipart/form-data">
                                                        @csrf    
                                                        
                                                     
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