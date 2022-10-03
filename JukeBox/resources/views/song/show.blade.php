<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
@include('jukebox.header')
<h1 class="text-3xl font-bold ml-4">{{$song->name}}</h1>
<div class="float-right mx-4">
	@if(is_array(session('song')))
		@if(!in_array($song->id, session('song')))
			<a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('song.session',['id'=>$song->id])}}">Add to session</a>
		@else
			<a class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('song.session',['id'=>$song->id])}}">Remove from session</a>
		@endif
	@else
		<a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('song.session',['id'=>$song->id])}}">Add to session</a>
	@endif

</div>
</body>
</html>