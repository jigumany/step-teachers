@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Booking List</h3>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Candidate</th>
                                <th>School</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Pay Type</th>
                                <th>Created By</th>
                                <th>Term</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>George Test</td>
                                <td>Test School</td>
                                <td>12/10/2022</td>
                                <td>12/10/2022</td>
                                <td>PAYE</td>
                                <td>George Consultant</td>
                                <td>Short-term</td>
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