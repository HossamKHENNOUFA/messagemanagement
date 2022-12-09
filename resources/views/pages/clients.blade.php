@extends('layouts.master')

@section('content')
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading">

                </h4>
            </div>
            <div class="modal-body">
                <form action="" name="studentForm" id="studentForm" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="student_id" id="student_id">
                    <div class="form-group">
                        Name: <br>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="" required>
                    </div>
                    <div class="form-group">
                        Email: <br>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Clients') }}</h3>
                    </div>
                    <a class="btn btn-success" href="javascript:void(0)" id="creatNewStudent" style="float: right;">{{ __('Add') }}</a>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover data-table">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection