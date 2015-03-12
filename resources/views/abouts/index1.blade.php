@extends('layouts.about')

@section('content')
    <h2>About us</h2>

    @if ( !$abouts->count() )
        You have no projects
    @else
        <ul>

@foreach($abouts as $about)
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('abouts.destroy', $about->id))) !!}
                        <a href="{{ route('abouts.show', $about->id) }}">{{ $about->title}}</a>
                        <p>

                        </p>
                        (
                            {!! link_to_route('abouts.edit', 'Edit', array($about->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-success')) !!}
                        )
                    {!! Form::close() !!}
                </li>
@endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('abouts.create', 'Create about') !!}
    </p>
    @endsection
