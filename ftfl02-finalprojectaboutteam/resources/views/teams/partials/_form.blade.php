<div class="row">
    <div class="col-md-12">
        <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Form Actions On About Us
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
                        {{--<form action="javascript:;" class="form-horizontal">--}}
                        {{--  {!! Form::model(new App\About, ['route' => ['abouts.store']]) !!}--}}
                        <div class="form-body">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <label class="col-md-3 control-label">Name</label>

                                        <div class="col-md-4">
                                            {!! Form::label('name', 'Name:') !!}
                                            {!! Form::text('name') !!}
                                            {{--<input type="text" class="form-control input-circle" placeholder="Enter title">--}}
                                            {{--{!! Form::text('title', null, array('class'=> 'form-control input-circle', 'placeholder'=>'Enter title')) !!}--}}
                                            <span class="help-block">
                                                                                    A block of name. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <label class="col-md-3 control-label">designation</label>

                                                <div class="col-md-4">
                                                    {{--<input type="text" class="form-control input-circle" placeholder="Enter description">--}}
                                                    {!! Form::text('designation', null, array('class'=> 'form-control
                                                    input-circle', 'placeholder'=>'Enter description')) !!}
                            <span class="help-block">
                            A block of designation. </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <label class="col-md-3 control-label">description</label>

                                                    <div class="col-md-4">
                                                        {{--<input type="text" class="form-control input-circle" placeholder="Enter description">--}}
                                                        {!! Form::textarea('description', null, array('class'=>
                                                        'form-control input-circle', 'placeholder'=>'Enter
                                                        description')) !!}
                                                                            <span class="help-block">
                                                                            A block of description. </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">

                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <label class="col-md-3 control-label">image path</label>

                                                            <div class="col-md-4">
                                                                {{--<input type="text" class="form-control input-circle" placeholder="Enter video url">--}}
                                                                {!! Form::text('img_path', null, array('class'=>
                                                                'form-control input-circle', 'placeholder'=>'Enter image
                                                                path')) !!}
                                    <span class="help-block">
                                    A block of imagepath. </span>
                                                            </div>
                                                        </div>

                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-6 col-md-6"><br>
                                                                    <button type="submit" class="btn btn-circle blue">
                                                                        Submit
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-circle default">Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        {{--</form>--}}
                                                        {!! Form::close() !!}
                                                    </div>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>