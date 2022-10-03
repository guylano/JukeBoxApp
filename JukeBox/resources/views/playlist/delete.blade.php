<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	@include('jukebox.header')
	<h1 class="text-3xl font-bold ml-4 flex justify-center">DELETE {{$playlist->name}}?</h1>
	<div class="w-full grid grid-cols-2 mt-5">
		<div class="flex justify-center">
			<a class="inline-block px-48 py-48 bg-red-600 text-white font-medium text-6xl leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('playlist.destroy',['id'=>$playlist->id])}}">YES</a>
		</div>
		<div class="flex justify-center">
			<a class="inline-block px-48 py-48 bg-green-600 text-white font-medium text-6xl leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('playlist.show',['id'=>$playlist->id])}}">NO</a>
		</div>
	</div>
	

</body>
</html>