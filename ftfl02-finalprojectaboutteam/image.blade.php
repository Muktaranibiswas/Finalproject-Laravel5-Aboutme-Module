Laravel 5 Image upload, storage and view ( 7 Steps)

1. php artisan make:migration create_fileentries_table --table="fileentries"

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileentriesTable extends Migration {

/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('fileentries', function(Blueprint $table)
{
$table->increments('id');
$table->string('filename');
$table->string('mime');
$table->string('original_filename');
$table->timestamps();
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop('fileentries');

}

}

2. php artisan migrate

3. php artisan make:model Fileentry
 4. Need to add at routes.php

Route::get('fileentry', 'FileEntryController@index');

Route::get('fileentry/get/{filename}', [
'as' => 'getentry', 'uses' => 'FileEntryController@get']);

Route::post('fileentry/add',[
'as' => 'addentry', 'uses' => 'FileEntryController@add']);

5. php artisan make:controller FileEntryController --plain

<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class FileEntryController extends Controller {

/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
$entries = Fileentry::all();

return view('fileentry.index', compact('entries'));
}

public function add() {

$file = Request::file('filefield');
$extension = $file->getClientOriginalExtension();
Storage::disk('local')->put($file->getFilename().'.'.$extension, File::get($file));
$entry = new Fileentry();
$entry->mime = $file->getClientMimeType();
$entry->original_filename = $file->getClientOriginalName();
$entry->filename = $file->getFilename().'.'.$extension;

$entry->save();

return redirect('fileentry');
 }

public function get($filename){

$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
$file = Storage::disk('local')->get($entry->filename);

return (new Response($file, 200))
->header('Content-Type', $entry->mime);
}

}

6. fileentry/index.blade.php

@extends('app')
@section('content')

<form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">
<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
<input type="file" name="filefield">
<input type="submit">
</form>

<h1> Pictures list</h1>
<div class="row">
<ul class="thumbnails">
@foreach($entries as $entry)
<div class="col-md-2">
<div class="thumbnail">
<img src="{{route('getentry', $entry->filename)}}" alt="ALT NAME" class="img-responsive" />
<div class="caption">
<p>{{$entry->original_filename}}</p>
</div>
</div>
</div>
@endforeach
</ul>
</div>

@endsection

7. fileentry/add.blade.php

@extends('app')
@section('content')

<form action="add" method="post" enctype="multipart/form-data">
<input type="file" name="filefield">
<input type="submit">
</form>
<h1> Pictures list</h1>
<div class="row">

<ul>
@foreach($entries as $entry)
<li>{!!entry-> filename!!}</li>
@endforeach
</ul>
</div>

@endsection