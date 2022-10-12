@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Vacancies List</h3>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vacancy name</th>
                                <th>School</th>
                                <th>Booking Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Job Title</th>
                                <th>Min Salary</th>
                                <th>Max Salary</th>
                                <th>Consultant</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>Test Vacancy</td>
                                <td>Test School</td>
                                <td>Day</td>
                                <td>07/11/2022</td>
                                <td>07/11/2022</td>
                                <td>Administrator</td>
                                <td>456.00</td>
                                <td>866.00</td>
                                <td>George Consultant</td>
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