@extends('admin.layouts.layouts')

@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Bài Đăng</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.posts_store')}}" enctype="multipart/form-data" ">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label >Title</label>
                @error('title')
                <strong style="color: red">{{$message}}</strong>
                @enderror
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title" autocomplete="off">
            </div>
            <div class="form-group">
                <label >Content</label>
                @error('avatar')
                <strong style="color:red;">{{$message}}</strong>
                @enderror
                <textarea  name="content" class="form-control" id="exampleInputPassword1" placeholder="Content"> </textarea>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
@stop
