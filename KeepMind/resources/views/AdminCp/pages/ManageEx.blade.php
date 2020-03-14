@extends('AdminCp.layouts.CpApp')
@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Exercise List</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm w-100">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-hover table-responsive-sm">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Count Solved</th>
                            <th >Update</th>
                            <th >Delete</th>
                            <th >View</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                                <span class="badge bg-gray">Math</span>
                                <span class="badge bg-gray">Logic</span>
                            </td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><button class="btn btn-outline-info">Edit</button></td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <span class="badge bg-gray">Math</span>
                                <span class="badge bg-gray">Logic</span>
                            </td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                                </div>
                            </td>

                            <td><button class="btn btn-outline-info">Edit</button></td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>

                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                                <span class="badge bg-gray">Math</span>
                                <span class="badge bg-gray">Logic</span>
                            </td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                                </div>
                            </td>

                            <td><button class="btn btn-outline-info">Edit</button></td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>

                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                                <span class="badge bg-gray">Math</span>
                                <span class="badge bg-gray">Logic</span>
                            </td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                            </td>

                            <td><button class="btn btn-outline-info">Edit</button></td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination m-0 float-right ">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('scriptJs')

@endsection

