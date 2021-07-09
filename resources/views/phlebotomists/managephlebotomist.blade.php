@extends('layouts.app')

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->

    <!-- End of Sidebar -->

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
                <h1 class="h3 mb-2 text-gray-800">Manage Phlebotomist</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="row">
                        <div class="col pt-3">
                            {{-- <div class="card-header py-3"> --}}
                                <h2 class="m-0 font-weight-bold text-primary">Phlebotomist Information</h2>
                            {{-- <div> --}}
                        </div>
                        <i class="fa fa-user"></i>
                        <div class="col-md-auto pt-2">
                            <a href="phlebotomists/create"><h3 style="background-color: rgb(208, 213, 214);color: #000; ">Add new phlebotomists</h3></a>
                        </div>
                      </div>
                    
                       
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Emp Id</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                        <th>Reg. Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Emp Id</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                         <th>Reg. Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($phlebotomists as $phlebotomist)
                                    <tr>
                                        <td>{{ $phlebotomist->id }}</td>
                                        <td>{{ $phlebotomist->emp_id }}</td>
                                        <td>{{ $phlebotomist->full_name }}</td>
                                        <td>{{ $phlebotomist->mobile }}</td>
                                        <td>{{ $phlebotomist->created_at }}</td>
                                        <td>

                            

                            <form action="phlebotomists/{{ $phlebotomist->id }}" method="POST" >
                                <a href="phlebotomists/{{ $phlebotomist->id }}/edit"><i class="fas fa-edit" style="color:blue" title="Edit this record"></i></a> |
                                @csrf
                                @method('delete')
                                <button>
                                    <i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a>
                                </button>
                                  
                            </form>
                        </td>
                             </tr>
                                    @endforeach

                                    
                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
@endsection
