@extends('admin.includes.app')
@section('title', 'Forms')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Inbox</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body p-6">
                    <div class="inbox-body">
                        <div class="table-responsive">
                            <table class="table table-inbox table-hover text-nowrap">
                                <tbody>
                                    @foreach ($forms as $fm)
                                        @csrf
                                        @method('put')
                                        <a href="/admin/message/{{ $fm->id }}">
                                            <tr class="emailForm">
                                                <td type="submit" class="inbox-small-cells">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        <i class="fa-solid fa-envelope"></i>
                                                    </a>
                                                </td>
                                                <td class="view-message dont-show font-weight-semibold">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->email }}
                                                    </a>
                                                </td>
                                                <td class="view-message">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->service->service }}
                                                    </a>
                                                </td>
                                                <td class="view-message text-end text-muted">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->created_at }}
                                                    </a>
                                                </td>
                                            </tr>
                                        </a>
                                    @endforeach
                                    {{-- <tr class="">
                                        <td class="inbox-small-cells">
                                            <label class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                    value="option2">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-lefted"></i></td>
                                        <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                        <td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
                                        <td class="view-message">Stop wasting your visitors</td>
                                        <td class="view-message text-end text-muted">May 23</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div class="row">
                                {{ $forms->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <ul class="pagination float-end mb-4">
                <li class="page-item page-prev disabled">
                    <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                </li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                <li class="page-item page-next">
                    <a class="page-link" href="javascript:void(0);">Next</a>
                </li>
            </ul> --}}
        </div>
    </div>
@endsection
