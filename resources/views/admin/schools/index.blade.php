@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Schools List</h3>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Region</th>
                                <th>Branch</th>
                                <th>Owner</th>
                                <th>School Name</th>
                                <th>School Email</th>
                                <th>School Address</th>
                                <th>School City</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>Region</td>
                                <td>London</td>
                                <td>George Manyara</td>
                                <td>Test School</td>
                                <td>test@test.com</td>
                                <td>15 main road</td>
                                <td>London</td>
                                <td>
                                    <a href="">View</a>
                                    <a href="">Edit</a>
                                    <a href="">Delete</a>
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