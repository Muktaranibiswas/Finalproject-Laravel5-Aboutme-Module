<form method="POST" action="http://l4todo.localhost.com/projects" accept-charset="UTF-8">
	<input name="_token" type="hidden" value="Y8uOo7SeD5tQZExezDf5a7UwiYR4P6qIHEUKJNxI">
</form>
@extends('app')
 
@section('content')
    <h2>Create Project</h2>
 
    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection