@extends('layouts.calendar')

@section('content')
    <!-- BEGIN PAGE CONTAINER -->
    <div class="page-container">
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>User Calendar <small>calendar page</small></h1>
                </div>
                <!-- END PAGE TITLE -->

                <!-- BEGIN PAGE TOOLBAR -->
                @include('partials.pagetoolbar')
                <!-- END PAGE TOOLBAR -->
            </div>
        </div>
        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                Widget settings form goes here
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn blue">Save changes</button>
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="#">Home</a><i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="page_calendar.html">Pages</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="active">
                        User Calendar
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box green-meadow calendar">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Calendar
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <!-- BEGIN DRAGGABLE EVENTS PORTLET-->
                                        <h3 class="event-form-title">Draggable Events</h3>
                                        <div id="external-events">
                                            <form class="inline-form">
                                                <input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title"/><br/>
                                                <a href="javascript:;" id="event_add" class="btn default">
                                                    Add Event </a>
                                            </form>
                                            <hr/>
                                            <div id="event_box">
                                            </div>
                                            <label for="drop-remove">
                                                <input type="checkbox" id="drop-remove"/>remove after drop </label>
                                            <hr class="visible-xs"/>
                                        </div>
                                        <!-- END DRAGGABLE EVENTS PORTLET-->
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div id="calendar" class="has-toolbar">
                                        </div>
                                    </div>
                                </div>
                                <!-- END CALENDAR PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
@endsection