@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Candidates List</h3>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Branch</th>
                                <th>Consultant</th>
                                <th>Gender</th>
                                <th>Job Title</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>George Test</td>
                                <td>London</td>
                                <td>George Consultant</td>
                                <td>male</td>
                                <td>Instructor</td>
                                <td>O83 956 2134</td>
                                <td>test@test.com</td>
                                <td>15 main road</td>
                                <td>London</td>
                                <td>
                                    <a href="#">view</a>
                                    <a href="#">edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

@endsection
@push('scripts')
<script>


    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
@endpush