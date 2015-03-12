@extends('layouts.about')
 
@section('content')
    <h2>Edit Team</h2>
 
    {!! Form::model($team, ['method' => 'PATCH', 'route' => ['teams.update', $team->id]]) !!}
        @include('teams/partials/_form', ['submit_text' => 'Edit team'])
    {!! Form::close() !!}
@endsection