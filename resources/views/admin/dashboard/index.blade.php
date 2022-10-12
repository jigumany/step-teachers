@extends('layouts.admin')
@section('content')
    <div class="row m-0">
        <div class="col-md-3 col-sm-6 info-box">
            <div class="media">
                <div class="media-left">
                    <span class="icoleaf bg-primary text-white"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="info-count text-blue">2</h3>
                    <p class="info-text font-12">Schools</p>
                    <span class="hr-line"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 info-box">
            <div class="media">
                <div class="media-left">
                    <span class="icoleaf bg-primary text-white"><i class="mdi mdi-comment-text-outline"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="info-count text-blue">68</h3>
                    <p class="info-text font-12">Candidates</p>
                    <span class="hr-line"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 info-box">
            <div class="media">
                <div class="media-left">
                    <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="info-count text-blue">475</h3>
                    <p class="info-text font-12">Vacancies</p>
                    <span class="hr-line"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 info-box">
            <div class="media">
                <div class="media-left">
                    <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="info-count text-blue">300</h3>
                    <p class="info-text font-12">Billing</p>
                    <span class="hr-line"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="white-box stat-widget">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h4 class="box-title">Placements</h4>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <select class="custom-select">
                                <option selected value="0">Feb 04 - Mar 03</option>
                                <option value="1">Mar 04 - Apr 03</option>
                                <option value="2">Apr 04 - May 03</option>
                                <option value="3">May 04 - Jun 03</option>
                            </select>
                            <ul class="list-inline">
                                <li>
                                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-success"></i>New Placements</h6>
                                </li>
                                <li>
                                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-primary"></i>Existing Placements</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="stat chart-pos"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="white-box">
                    <h4 class="box-title">Task Progress</h4>
                    <div class="task-widget t-a-c">
                        <div class="task-chart" id="sparklinedashdb"></div>
                        <div class="task-content font-16 t-a-c">
                            <div class="col-sm-6 b-r">
                                Urgent Tasks
                                <h1 class="text-primary">05 <span class="font-16 text-muted">Tasks</span></h1>
                            </div>
                            <div class="col-sm-6">
                                Normal Tasks
                                <h1 class="text-primary">03 <span class="font-16 text-muted">Tasks</span></h1>
                            </div>
                        </div>
                        <div class="task-assign font-16">
                            Assigned To
                            <ul class="list-inline">
                                <li class="p-l-0">
                                    <img src="{{ asset('plugins/images/users/1.png') }}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave">
                                </li>
                                <li>
                                    <img src="{{ asset('plugins/images/users/2.png') }}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave">
                                </li>
                                <li>
                                    <img src="{{ asset('plugins/images/users/3.png') }}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave">
                                </li>
                                <li class="p-r-0">
                                    <a href="javascript:void(0);" class="btn btn-success font-16">3+</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box user-table">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="box-title">Users</h4>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-inline">
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-default btn-outline font-16"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-default btn-outline font-16"><i class="fa fa-commenting" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <select class="custom-select">
                                <option selected>Sort by</option>
                                <option value="1">Name</option>
                                <option value="2">Branch</option>
                                <option value="3">Type</option>
                                <option value="4">Role</option>
                                <option value="5">Action</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox checkbox-info">
                                            <input id="c1" type="checkbox">
                                            <label for="c1"></label>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c2" type="checkbox">
                                            <label for="c2"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Daniel Kristeen</a></td>
                                    <td>London</td>
                                    <td><span class="label label-success">Admin</span></td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c6" type="checkbox">
                                            <label for="c6"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Sergio Milardovich</a></td>
                                    <td>South Yorkshire</td>
                                    <td><span class="label label-primary">Partial</span> </td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination">
                        <li class="disabled"> <a href="#">1</a> </li>
                        <li class="active"> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">4</a> </li>
                        <li> <a href="#">5</a> </li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-success pull-right m-t-10 font-20">+</a>
                </div>
            </div>
        </div>
    </div>
@endsection