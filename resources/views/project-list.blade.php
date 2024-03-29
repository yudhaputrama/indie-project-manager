@extends('layouts.app')

@section('css-depends')
    @include('components.css.core')
    @include('components.css.dashboard')
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap-datepicker/css/datepicker.css"/>
@endsection

@section('js-depends')
    @include('components.js.core')
    <script src="/vendor/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="/vendor/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="/vendor/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="/vendor/jquery.pulsate.min.js" type="text/javascript"></script>

    <script src="/js/metronic.js" type="text/javascript"></script>
    <script src="/js/layout.js" type="text/javascript"></script>
    <script src="/js/pages/index.js" type="text/javascript"></script>
    <script type="text/javascript" src="/vendor/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="/js/pages/form-validation.js"></script>
    <script type="text/javascript" src="/vendor/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery-validation/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>


    <script type="text/javascript" src="/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap-fileinput/bootstrap-fileinput.js"></script>

    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            Index.init();
            Index.initCalendar(); // init index page's custom scripts
            Index.initCharts(); // init index page's custom scripts
            Index.initChat();
            FormValidation.init();

            $("form#newProject").submit(function() {

                var formData = new FormData($(this)[0]);
                var _this = $(this);
                Metronic.blockUI({
                    target: _this,
                    animate: true
                });
                $.ajax({
                    url: window.location.pathname,
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        if (data.status=='success'){
                            toastr['success']("Project successfully created", "Add Project");
                            window.location.reload();
                        } else {
                            toastr['error']("Something error", "Add Project")
                        }
                        console.log(data);
                    },
                    error: function (data) {
                        toastr['error']("Can't connect to server", "Add Project")
                    },
                    complete: function (data) {
                        Metronic.unblockUI(_this)
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
                return false;
            });

            toastr.options = {
                "closeButton": true,
                "debug": true,
                "positionClass": "toast-bottom-right",
                "showDuration": "1000",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });
    </script>

@endsection

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <div class="modal fade" id="add-project" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method="post" id="newProject" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">New Project</h4>
                </div>
                <div class="modal-body">
                    <!-- BEGIN FORM-->
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                You have some form errors. Please check below.
                            </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button>
                                Your form validation is successful!
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Project Name <span class="required">* </span></label>
                                <div class="col-md-8">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Description<span class="required">* </span></label>
                                <div class="col-md-8">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <textarea class="form-control" rows="3" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Project Picture</label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                        <div>
                                            <span class="btn default btn-file">
                                            <span class="fileinput-new">
                                            Select image </span>
                                            <span class="fileinput-exists">
                                            Change </span>
                                            <input type="file" name="picture">
                                            </span>
                                            <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Start</label>
                                <div class="col-md-8">
                                    <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                        <input type="text" class="form-control" readonly="" name="start">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Deadline</label>
                                <div class="col-md-8">
                                    <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                        <input type="text" class="form-control" readonly="" name="deadline">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- END FORM-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn green">Create</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{ url('/projects') }}">Project</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <a href="#add-project" data-toggle="modal" role="button" class="btn btn-fit-height green">
                New Project <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    @if (session('error'))
        <div class="note note-warning">
            <p>
                {{ session('error') }}
            </p>
        </div>
    @endif
    <h3 class="page-title">
        Project List<small></small>
    </h3>

    <!-- END PAGE HEADER-->
    @if(isset($projects))
    @foreach($projects as $project)
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light">
                <div class="portlet-body">
                    <a href="/projects/{{ $project['id'] }}">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="project-picture img-responsive" src="{{ Config::get('image.dir.projects.picture').$project['picture'] }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 style="margin-top: 0px;">{{ $project['name'] }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>
                                    <span class="label label-primary">
                                        <i class="fa fa-file-photo-o"></i> {{ $countAll = $project['photos']->count() }}
                                    </span>
                                        <span class="label label-success">
                                        <i class="fa fa-check"></i> {{ $countDone = $project['photos']->where('status','done')->count() }}
                                    </span>
                                        <span class="label label-warning">
                                        <i class="fa fa-times"></i> {{ ($countAll-$countDone) }}
                                    </span>
                                    </p>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $countDone }}" aria-valuemin="0" aria-valuemax="{{ $countAll }}" style="width: {{ $progressDone = $countDone/(($countAll>0)?$countAll:1)*100 }}%">
                                        <span class="sr-only">

                                        </span>
                                        </div>
                                    </div>
                                    <div class="note note-warning">
                                        <p>
                                            {{ $project['description'] }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4>Shared</h4>
                                    <ul class="list-inline">
                                        @foreach($project['members'] as $member)
                                            <li class="tooltips" data-container="body" data-placement="bottom" data-original-title="{{ $member['fullname'] }}">
                                            <span class="photo">
                                                <img  src="{{ "/uploads/avatar/".(($member['avatar']!=null)?$member['avatar']:"default.jpg") }}" class="img-circle" style="width: 45px; height: 45px;">
                                            </span>
                                            </li>
                                            @if($loop->count == 4)
                                                <li class="tooltips" data-container="body" data-placement="bottom" data-original-title="Others">
                                            <span class="photo">
                                                <img  src="/img/avatar.png" class="img-circle" style="width: 45px; height: 45px;">
                                            </span>
                                                </li>
                                                @break
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
@endsection