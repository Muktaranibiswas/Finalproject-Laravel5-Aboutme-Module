
@extends('layouts.about')
<?php #var_dump($about) ?>
@section('content')
    <h2>Edit About Us</h2>

    {!! Form::model($about, ['method' => 'PATCH', 'route' => ['abouts.update', $about->id]]) !!}
        @include('abouts/partials/_form', ['submit_text' => 'Edit About'])
    {!! Form::close() !!}
@endsection
