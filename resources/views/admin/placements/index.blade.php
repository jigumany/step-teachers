@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Placements List</h3>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Placement No.</th>
                                <th>Vacancy</th>
                                <th>School</th>
                                <th>Candidate</th>
                                <th>start Date</th>
                                <th>End Date</th>
                                <th>Charge Rate</th>
                                <th>Timesheet Approver</th>
                                <th>Days per week</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>01</td>
                                <td>Test Vacancy</td>
                                <td>Test School</td>
                                <td>George Manyara</td>
                                <td>06/10/2022</td>
                                <td>06/10/2022</td>
                                <td>13.00</td>
                                <td>George Consultant</td>
                                <td>6</td>
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