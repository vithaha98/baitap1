@extends('layouts')

@section('contents')

    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">

                        <section class="content">

                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tiêu Đề: {{ $posts->title }}</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        {{--                                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">--}}
                                        {{--                                                    <i class="fas fa-times"></i></button>--}}
                                    </div>
                                </div>
                                <div class="card-body">
                                    {{ $posts->content }}
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    {{--                                            Nguồn: {{ $posts->user->name }}--}}
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->

                        </section>

                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
