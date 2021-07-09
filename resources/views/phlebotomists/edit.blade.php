@extends('layouts.app')

<!-- Page Wrapper -->
 <div id="wrapper">

    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
             @section('content')
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Topbar -->
                    <!-- End of Topbar -->
    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
    
                        <!-- Page Heading -->
                    
    <h1 class="h3 mb-4 text-gray-800">{{ $phlebotomist->full_name  }}'s Profile</h1>
    <form action="/phlebotomists/{{ $phlebotomist->id }}" method="post">
        @csrf
        @method('PUT')
      <div class="row">
    
                            <div class="col-lg-8">
    
                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                    </div>
                                    <div class="card-body">
    
     <div class="form-group">
                                <label>Registration Date: {{ $phlebotomist->created_at  }}   </label>
                                   
                                            </div>
    
                      <div class="form-group">
                                <label>Employee Id</label>
                                 <input type="text" class="form-control" id="empid" name="emp_id" 
                                  value="{{ $phlebotomist->emp_id }}"  readonly="true" >
                                                 
                                            </div>
    
                            <div class="form-group">
                                <label>Full Name</label>
                                                <input type="text" class="form-control" id="fullname" name="full_name"  placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" 
                                                value="{{ $phlebotomist->full_name }}" required="true">
                                            </div>
                                            <div class="form-group">
                                                 <label>Mobile Number</label>
                                      <input type="text" class="form-control" id="mobilenumber" name="mobile" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" 
                                      value="{{ $phlebotomist->mobile }}" required="true" >
                                              
                                            </div>
                            
    
    
            <div class="form-group">
                                     <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" >                           
                                 </div>                                        
    
                                    </div>
                                </div>
    
                            </div>
                        </div>
    </form>
    
    
                    </div>
                    <!-- /.container-fluid -->
    
                </div>
                <!-- End of Main Content -->
    
              
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
       
    
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
    @endsection