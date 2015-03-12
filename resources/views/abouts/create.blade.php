

@extends('layouts.about')

@section('content')
<div class="well">
<ul>
        @foreach($errors->all()as $error)
           <li>{{$error}}</li>
        @endforeach
</ul>
</div>
    <h2>Create About Us</h2>

    {!! Form::model(new App\About, ['route' => ['abouts.store']]) !!}
        @include('abouts/partials/_form', ['submit_text' => 'Create About'])
    {!! Form::close() !!}
@endsection




