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
                        <form action="/admin/update/{{ $services->id }}" name="categoryForm" id="categoryForm"
                            method="get" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="service" id="name" class="form-control m-2"
                                placeholder="Enter Type Name" value="{{ $services->service }}" required>

                            <input type="text" name="slug" id="slug" class="form-control m-2 slug"
                                placeholder="Slug" value="{{ $services->slug }}" readonly>

                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customJs')
    <script>
        $('#name').change(function() {
            element = $(this);
            $.ajax({
                url: '{{ route('getSlug') }}',
                type: 'get',
                data: {
                    title: element.val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response["status"] == true) {
                        $("#slug").val(response["slug"]);
                    }
                }
            })
        });
    </script>
@endsection
