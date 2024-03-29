@extends('layouts.app')

@section('css-depends')
    @include('components.css.core')
    @include('components.css.dashboard')
@endsection

@section('js-depends')
    @include('components.js.core')
    @include('components.js.dashboard')
@endsection

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{ url('/user') }}">User</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Add User</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                Actions <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">Action</a>
                </li>
                <li>
                    <a href="#">Another action</a>
                </li>
                <li>
                    <a href="#">Something else here</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#">Separated link</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<h3 class="page-title">
    Add User <small></small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Twitter Auto Complete(typeahead.js)
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <form action="#" id="form-username" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Basic Auto Complete</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                    </span>
                                <input type="text" id="typeahead_example_1" name="typeahead_example_1" class="form-control"/>
                            </div>
                            <p class="help-block">
                                E.g: metronic, keenthemes.<br>
                                <span class="label label-success label-sm">
                                    Learn more: </span>
                                <a target="_blank" href="http://twitter.github.io/typeahead.js/">
                                    http://twitter.github.io/typeahead.js/ </a>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Country Auto Complete</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                    </span>
                                <input type="text" id="typeahead_example_2" name="typeahead_example_2" class="form-control"/>
                            </div>
                            <p class="help-block">
                                E.g: USA, Malaysia. Prefetch from JSON source</code>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Custom Template</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-cogs"></i>
                                    </span>
                                <input type="text" id="typeahead_example_3" name="typeahead_example_3" class="form-control"/>
                            </div>
                            <p class="help-block">
                                Uses a precompiled template to customize look of suggestion.</code>
                            </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-3 control-label">Multiple Sections with Headers</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-check"></i>
                                    </span>
                                <input type="text" id="typeahead_example_4" name="typeahead_example_4" class="form-control"/>
                            </div>
                            <p class="help-block">
                                Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
                            </p>
                        </div>
                    </div>
                    <div class="form-group last">
                        <label class="control-label col-md-3">Modal</label>
                        <div class="col-md-4">
                            <a href="#myModal_autocomplete" role="button" class="btn red" data-toggle="modal">
                                View in Modal </a>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="myModal_autocomplete" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Radio Switch in Modal</h4>
                            </div>
                            <div class="modal-body form">
                                <form action="#" class="form-horizontal form-row-seperated">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Basic Auto Complete</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                    </span>
                                                <input type="text" id="typeahead_example_modal_1" name="typeahead_example_modal_1" class="form-control"/>
                                            </div>
                                            <p class="help-block">
                                                E.g: metronic, keenthemes.<br>
                                                <span class="label label-success label-sm">
                                                    Learn more: </span>
                                                <a target="_blank" href="http://twitter.github.io/typeahead.js/">
                                                    http://twitter.github.io/typeahead.js/ </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Country Auto Complete</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <i class="fa fa-search"></i>
                                                    </span>
                                                <input type="text" id="typeahead_example_modal_2" name="typeahead_example_modal_2" class="form-control"/>
                                            </div>
                                            <p class="help-block">
                                                E.g: USA, Malaysia. Prefetch from JSON source</code>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Custom Template</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <i class="fa fa-cogs"></i>
                                                    </span>
                                                <input type="text" id="typeahead_example_modal_3" name="typeahead_example_modal_3" class="form-control"/>
                                            </div>
                                            <p class="help-block">
                                                Uses a precompiled template to customize look of suggestion.</code>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <label class="col-sm-4 control-label">Multiple Sections with Headers</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <i class="fa fa-check"></i>
                                                    </span>
                                                <input type="text" id="typeahead_example_modal_4" name="typeahead_example_modal_4" class="form-control"/>
                                            </div>
                                            <p class="help-block">
                                                Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Form Tools
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" id="form-username" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Google reCaptcha</label>
                            <div class="col-md-9">
                                <!-- BEGIN REPCAPTCHA -->
                                <div id="recaptcha_widget" class="form-recaptcha">
                                    <div class="form-recaptcha-img" style="width: 325px">
                                        <a id="recaptcha_image" href="#">
                                        </a>
                                        <div class="recaptcha_only_if_incorrect_sol display-none" style="color:red">
                                            Incorrect please try again
                                        </div>
                                    </div>
                                    <div class="input-group" style="width: 325px">
                                        <input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field">
                                        <div class="input-group-btn">
                                            <a class="btn default" href="javascript:Recaptcha.reload()">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a class="btn default recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')">
                                                <i title="Get an audio CAPTCHA" class="fa fa-headphones"></i>
                                            </a>
                                            <a class="btn default recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')">
                                                <i title="Get an image CAPTCHA" class="fa fa-picture-o"></i>
                                            </a>
                                            <a class="btn default" href="javascript:Recaptcha.showhelp()">
                                                <i class="fa fa-question-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="help-block">
                                            <span class="recaptcha_only_if_image">
                                            Enter the words above </span>
                                        <span class="recaptcha_only_if_audio">
                                            Enter the numbers you hear </span>
                                    </p>
                                </div>
                                <!-- END REPCAPTCHA -->
                                <p class="help-block">
                                        <span class="label label-sm label-danger">
                                        Note: </span>
                                    Please visit <a href="http://www.google.com/recaptcha" target="_blank">
                                        http://www.google.com/recaptcha </a>
                                    to learn more about the Google reCaptcha
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username #1</label>
                            <div class="col-md-4">
                                <div class="input-group" style="text-align:left">
                                    <input type="text" class="form-control" name="username1" id="username1_input">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn green" id="username1_checker">
                                        <i class="fa fa-check"></i> Check </a>
                                        </span>
                                </div>
                                <div class="help-block">
                                    Type a username(E.g: user1, user2) and check its availability.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username #2</label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <i class="icon-exclamation-sign"></i>
                                    <input type="text" class="form-control" name="username1" id="username2_input">
                                </div>
                                <div class="help-block">
                                    Type a username(E.g: user1, user2) and check its availability on focus lost
                                </div>
                            </div>
                        </div>
                        <div class="form-group last password-strength">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="password" id="password_strength">
                                <span class="help-block">
                                    Type a password to check its strength </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Bootstrap Input MaxLength
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Default usage</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_defaultconfig">
                                <span class="help-block">
                                    Maxlength is 25 chars. The badge will show up by default when the remaining chars are 10 or less. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Change the threshold value</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_thresholdconfig">
                                <span class="help-block">
                                    Maxlength is 25 chars. Do you want the badge to show up when there are 20 chars or less? Use the threshold option: <code>threshold: 20</code>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Advance usage</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_alloptions">
                                <span class="help-block">
                                    This is a complete example where all the options configured for the bootstrap-maxlength counter are setted. Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Textarea</label>
                            <div class="col-md-9">
                                <textarea id="maxlength_textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
                                <span class="help-block">
                                    Bootstrap maxlength supports textarea as well as inputs. Even on old IE. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Position</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_placement">
                                <span class="help-block">
                                    The field counter can be positioned at the top, bottom, left or right. You can also place the maxlength indicator on the corners: <code>bottom-right</code>, <code>top-right</code>, <code>top-left</code>, <code>bottom-left</code> and <code>centered-right</code>. All you need to do is specify the <code>placement</code> option, with one of those strings. </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box green-meadow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Spinners
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 1</label>
                            <div class="col-md-9">
                                <div id="spinner1">
                                    <div class="input-group input-small">
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn btn-group-vertical">
                                            <button type="button" class="btn spinner-up btn-xs blue">
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                            <button type="button" class="btn spinner-down btn-xs blue">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="help-block">
                                    basic example </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 2</label>
                            <div class="col-md-9">
                                <div id="spinner2">
                                    <div class="input-group input-small">
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn btn-group-vertical">
                                            <button type="button" class="btn spinner-up btn-xs red">
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                            <button type="button" class="btn spinner-down btn-xs red">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="help-block">
                                    disabled state </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 3</label>
                            <div class="col-md-9">
                                <div id="spinner3">
                                    <div class="input-group" style="width:150px;">
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn">
                                            <button type="button" class="btn spinner-up default">
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                            <button type="button" class="btn spinner-down default">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="help-block">
                                    with max value: 10 </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Spinner 4</label>
                            <div class="col-md-9">
                                <div id="spinner4">
                                    <div class="input-group" style="width:150px;">
                                        <div class="spinner-buttons input-group-btn">
                                            <button type="button" class="btn spinner-up blue">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn">
                                            <button type="button" class="btn spinner-down red">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="help-block">
                                    with step: 5 </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box yellow-crusta">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Bootstrap Switch
                </div>
                <div class="actions">
                    <input type="checkbox" class="make-switch" checked data-on="success" data-off="warning">
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Sizes</label>
                            <div class="col-md-9">
                                <input type="checkbox" checked class="make-switch" data-size="small">
                                <input type="checkbox" checked class="make-switch" data-size="normal">
                                <input type="checkbox" checked class="make-switch" data-size="large">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Colors</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
                                <input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success">
                                <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
                                <input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
                                <input type="checkbox" class="make-switch" checked data-on-color="danger" data-off-color="default">
                                <input type="checkbox" class="make-switch" checked data-on-color="default" data-off-color="primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disabled / Readonly</label>
                            <div class="col-md-9">
                                <input type="checkbox" checked disabled class="make-switch"/>
                                <input type="checkbox" checked readonly class="make-switch"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Text</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" data-on-text="Yes" data-off-text="No">
                                <input type="checkbox" class="make-switch" data-on-text="1" data-off-text="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Long Text</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" data-on-text="&nbsp;External&nbsp;" data-off-text="&nbsp;Internal&nbsp;">
                                <input type="checkbox" class="make-switch" data-on-text="&nbsp;Enabled&nbsp;&nbsp;" data-off-text="&nbsp;Disabled&nbsp;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Label Text</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" checked data-on-text="TV">
                                <input type="checkbox" class="make-switch" checked data-off-text="Signal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">HTML Text</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-user'></i>" data-off-text="<i class='fa fa-trash-o'></i>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">HTML Text Label Icon</label>
                            <div class="col-md-9">
                                <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-youtube" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Radio Group</label>
                            <div class="col-md-9">
                                <div class="margin-bottom-10">
                                    <label for="option1">Option 1</label>
                                    <input id="option1" type="radio" name="radio1" value="option1" class="make-switch switch-radio1">
                                </div>
                                <div class="margin-bottom-10">
                                    <label for="option2">Option 2</label>
                                    <input id="option2" type="radio" name="radio1" value="option2" class="make-switch switch-radio1">
                                </div>
                                <div class="margin-bottom-10">
                                    <label for="option3">Option 3</label>
                                    <input id="option3" type="radio" name="radio1" value="option3" class="make-switch switch-radio1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Modal</label>
                            <div class="col-md-9">
                                <a href="#myModal" role="button" class="btn red" data-toggle="modal">
                                    View in Modal </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Bootstrap switches</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Default Sizes</label>
                                        <div class="col-md-9">
                                            <input type="checkbox" checked class="make-switch" data-size="small">
                                            <input type="checkbox" checked class="make-switch" data-size="normal">
                                            <input type="checkbox" checked class="make-switch" data-size="large">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Colors</label>
                                        <div class="col-md-9">
                                            <input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
                                            <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
                                            <input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">Disabled / Readonly</label>
                                        <div class="col-md-9">
                                            <input type="checkbox" checked disabled class="make-switch"/>
                                            <input type="checkbox" checked readonly class="make-switch"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Bootstrap TouchSpin
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 1</label>
                            <div class="col-md-9">
                                <div class="input-inline input-medium">
                                    <input id="touchspin_demo1" type="text" value="55" name="demo1" class="form-control">
                                </div>
                                <span class="help-block">
                                    basic example </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 2</label>
                            <div class="col-md-9">
                                <div class="input-inline input-medium">
                                    <input id="touchspin_demo2" type="text" value="55" name="demo1" class="form-control">
                                </div>
                                <span class="help-block">
                                    example with decimal steps </span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green-turquoise">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>IP Address Input
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-row-seperated">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">IPV4</label>
                            <div class="col-md-4">
                                <input class="form-control" id="input_ipv4" type="text"/>
                                <span class="help-block">
                                    192.168.120.150 </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">IPV6</label>
                            <div class="col-md-4">
                                <input class="form-control" id="input_ipv6" type="text"/>
                                <span class="help-block">
                                    3ffe:1900:4545:3:200:f8ff:fe21:67cf </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box red-sunglo">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Input Masks
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Date 1</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_date" type="text"/>
                                <span class="help-block">
                                    y/m/d </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date 2</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_date1" type="text"/>
                                <span class="help-block">
                                    change the placeholder </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date 3</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_date2" type="text"/>
                                <span class="help-block">
                                    multi-char placeholder </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Phone</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_phone" type="text"/>
                                <span class="help-block">
                                    (999) 999-9999 </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tax ID</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_tin" type="text"/>
                                <span class="help-block">
                                    99-9999999 </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Number</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_number" type="text"/>
                                <span class="help-block">
                                    mask "9" or mask "99" or ... mask "9999999999" </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Currency</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_currency" type="text"/>
                                <span class="help-block">
                                    123456 => € ___.__1.234,56 </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Currency 2</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_currency2" type="text"/>
                                <span class="help-block">
                                    123456 => € ___.__1.234,56(left aligned) </span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">SSN</label>
                            <div class="col-md-4">
                                <input class="form-control" id="mask_ssn" type="text"/>
                                <span class="help-block">
                                    999-99-9999. remove the empty mask on blur or when not empty removes the optional trailing part </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Tags Input
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body ">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-3">Default</label>
                        <div class="col-md-9">
                            <input id="tags_1" type="text" class="form-control tags" value="foo,bar,baz,roffle"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fixed Width</label>
                        <div class="col-md-6">
                            <input id="tags_2" type="text" class="form-control tags medium" value="tag1,tag2"/>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Advanced File Input
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Default1</label>
                            <div class="col-md-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                                </span>
                                        </div>
                                        <span class="input-group-addon btn default btn-file">
                                            <span class="fileinput-new">
                                            Select file </span>
                                            <span class="fileinput-exists">
                                            Change </span>
                                            <input type="file" name="...">
                                            </span>
                                        <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Without input</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn default btn-file">
                                        <span class="fileinput-new">
                                        Select file </span>
                                        <span class="fileinput-exists">
                                        Change </span>
                                        <input type="file" name="...">
                                        </span>
                                    <span class="fileinput-filename">
                                        </span>
                                    &nbsp; <a href="#" class="close fileinput-exists" data-dismiss="fileinput">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-md-3">Image Upload #1</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    </div>
                                    <div>
                                            <span class="btn default btn-file">
                                            <span class="fileinput-new">
                                            Select image </span>
                                            <span class="fileinput-exists">
                                            Change </span>
                                            <input type="file" name="...">
                                            </span>
                                        <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
                                        <span class="label label-danger">
                                        NOTE! </span>
                                    Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Image Upload #2</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                    </div>
                                    <div>
                                            <span class="btn default btn-file">
                                            <span class="fileinput-new">
                                            Select image </span>
                                            <span class="fileinput-exists">
                                            Change </span>
                                            <input type="file" name="...">
                                            </span>
                                        <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
                                        <span class="label label-danger">
                                        NOTE! </span>
                                    Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXTRAS PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>CKEditor Editor
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group last">
                            <label class="control-label col-md-3">CKEditor</label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor1" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END EXTRAS PORTLET-->
    </div>
</div>
@endsection