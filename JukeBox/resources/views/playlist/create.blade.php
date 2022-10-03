<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
@include('jukebox.header')
<h1 class="text-3xl font-bold ml-4">create new playlist</h1>
<div class="w-full ">
	<div class="flex  justify-center">
		<div class="table">
			{{Form::open(array('route' => 'playlist.store', 'method' => 'post'))}}
			<div class="row m-4">
				<div class="cell p-1">
							{{ Form::label('pname', 'Playlist name:') }}
				</div>
				<div class="cell p-1 text-gray-900">
							{{ Form::text('pname') }}
				</div>
			</div>
			<div class="row">
				<div class="flex justify-end">
					<input type="submit" value="Create" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
					
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
</div>





</body>
</html>