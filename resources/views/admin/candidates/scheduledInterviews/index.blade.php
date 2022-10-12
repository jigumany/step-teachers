@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Scheduled Interviews List</h3>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Candidate</th>
                                <th>School</th>
                                <th>Vacancy</th>
                                <th>Interviwer</th>
                                <th>Interview Date</th>
                                <th>Start Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>George Test</td>
                                <td>Test School</td>
                                <td>Test Vacancy</td>
                                <td>George Consultant</td>
                                <td>15/10/2022</td>
                                <td>10:00 am</td>
                                <td>
                                    <a href="#">View</a>
                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>
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