<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
@include('jukebox.header')
<h1 class="text-3xl font-bold ml-4">{{$song->name}}</h1>
<h1 class=" font-bold ml-4">Duration {{$song->time_m}}:{{$song->time_s}}</h1>




<div class="float-right mx-4">
	{{Form::open(array('route' => 'song.session', 'method' => 'post'))}}
		<input type="hidden" name="id" value="{{$song->id}}">
		@if(is_array(session('song')))
			@if(!in_array($song->id, session('song')))
				<input type="submit" value="Add to session" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" >
			@else
				<input type="submit" value="Remove from session" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" >
			@endif
		@else
			<input type="submit" value="Add to session" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" >
		@endif
	</form>
</div>
<div>
	
</div>
</body>
</html>