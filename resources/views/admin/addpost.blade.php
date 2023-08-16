@extends('admin.includes.app')
@section('title', 'Add Post')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Add Posts</h4>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Post</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/admin/add" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Title of post">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Author<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="author" placeholder="Author of post">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Image<span class="text-red">*</span></label>
                                    <input type="file" class="form-control" name="media">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Country <span class="text-red">*</span></label>
                                    <select class="form-control custom-select select2">
                                        <option value="0">--Select--</option>
                                        <option value="1">Software</option>
                                        <option value="2">Production</option>
                                        <option value="3">Graphic</option>
                                        <option value="4">Social Media Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-outline-secondary" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
