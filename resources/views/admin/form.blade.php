@extends('admin.includes.app')
@section('title', 'Messages')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Messages</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        {{-- <div class="col-md-12 col-lg-4 col-xl-3">
            <div class="card">
                <div class="list-group list-group-transparent mb-0 mail-inbox mail-inbox-elements pb-3">
                    <div class="mt-4 mb-4 ms-4 me-4 text-center">
                        <a href="email-compose.php.html" class="btn btn-primary d-grid">Compose</a>
                    </div>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                        <i class="fe fe-inbox fs-18 me-5 ms-2 text-muted"></i>Inbox <span
                            class="ms-auto badge bg-secondary me-2">14</span>
                    </a>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                        <i class="fe fe-mail fs-18 me-5 ms-2 text-muted"></i> Sent Mail
                    </a>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                        <i class="fe fe-alert-octagon fs-18 me-5 ms-2 text-muted"></i> Important <span
                            class="ms-auto badge bg-danger me-2">3</span>
                    </a>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                        <i class="fe fe-star fs-18 me-5 ms-2 text-muted"></i> Starred
                    </a>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                        <i class="fe fe-briefcase fs-18 me-5 ms-2 text-muted"></i> Drafts
                    </a>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                        <i class="fe fe-tag fs-18 me-5 ms-2 text-muted"></i> Tags
                    </a>
                    <a href="javascript:void(0);"
                        class="list-group-item list-group-item-action d-flex align-items-center font-weight-semibold text-muted	mb-2">
                        <i class="fe fe-trash-2 fs-18 me-5 ms-2 text-muted"></i> Trash
                    </a>
                </div>
                <div class="p-1">
                    <div class="list-group list-group-transparent mb-0 mail-inbox">
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
                            <span class="w-3 h-3 brround bg-primary me-4 ms-2"></span> Friends
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
                            <span class="w-3 h-3 brround bg-secondary me-4 ms-2"></span> Family
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
                            <span class="w-3 h-3 brround bg-success me-4 ms-2"></span> Social
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
                            <span class="w-3 h-3 brround bg-info me-4 ms-2"></span> Office
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
                            <span class="w-3 h-3 brround bg-warning me-4 ms-2"></span> Work
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
                            <span class="w-3 h-3 brround bg-danger me-4 ms-2"></span> Settings
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body p-6">
                    <div class="inbox-body">
                        {{-- <div class="mail-search mb-4">
                            <input type="text" placeholder="Search Inbox" class="form-control">
                        </div> --}}
                        {{-- <div class="mail-option">
                                 <div class="chk-all">
                                    <div class="btn-group">
                                        <a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini all"
                                            aria-expanded="false">
                                            All
                                            <i class="fa fa-angle-down "></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);"> None</a></li>
                                            <li><a href="javascript:void(0);"> Read</a></li>
                                            <li><a href="javascript:void(0);"> Unread</a></li>
                                        </ul>
                                    </div>
                                </div>
                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-bs-toggle=""
                                    href="javascript:void(0);" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini blue"
                                    aria-expanded="false">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);"><i class="fa fa-pencil me-2"></i> Mark as Read</a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-ban me-2"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-trash-o me-2"></i> Delete</a></li>
                                </ul>
                            </div>
                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 234</span></li>
                                <li>
                                    <a class="np-btn" href="javascript:void(0);"><i
                                            class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="table-responsive">
                            <table class="table table-inbox table-hover text-nowrap">
                                <tbody>
                                    @foreach ($forms as $fm)
                                        <a href="">
                                            <tr class="">
                                                <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                <td class="view-message dont-show font-weight-semibold">{{ $fm->email }}
                                                </td>
                                                <td class="view-message">{{ $fm->service->service }}</td>
                                                <td class="view-message text-end text-muted">{{ $fm->created_at }}</td>
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

                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination float-end mb-4">
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
            </ul>
        </div>
    </div>
@endsection
