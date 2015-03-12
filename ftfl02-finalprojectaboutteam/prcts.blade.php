<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation') !!}
</div>
 <div class="form-group">
     {!! Form::label('description', 'Description:') !!}
     {!! Form::textarea('description') !!}
 </div>
<div class="form-group">
    {!! Form::label('img_path', 'Img_path:') !!}
    {!! Form::text('img_path') !!}
</div>
<div class="form-group">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter') !!}
</div>
{{--<div class="form-group">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook') !!}
</div>


 <div class="form-group">
     {!! Form::label('linkedin', 'Linkedin:') !!}
     {!! Form::text('linkedin') !!}
 </div>
<div class="form-group">
    {!! Form::label('google', 'Google:') !!}
    {!! Form::text('google') !!}
</div>
<div class="form-group">
    {!! Form::label('skype', 'Skype:') !!}
    {!! Form::text('skype') !!}
</div>--}}



<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>

about ar form


{{--
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>
<div class="form-group">
    {!! Form::label('video_url', 'Video_url:') !!}
    {!! Form::text('video_url') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>--}}
