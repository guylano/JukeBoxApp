<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Songs</title>
</head>
<body>
	@include('jukebox.header')
	<div class="grid grid-rows-3 grid-flow-col gap-4 flex justify-center mt-10">
		<div class="row-start-1 row-end-4 w-72 h-96">
	  		<div class="rounded-lg shadow-lg bg-white max-w-sm">
		    	<a href="{{route('playlist.index')}}">
		      		<img class="rounded-t-lg w-full h-auto" src='images/muziekplaatje1.png' alt=""/>
		    	</a>
		    	<div class="p-6">
		      		<h5 class="text-gray-900 text-xl font-medium mb-2">Your Playlists</h5>
		      		<p class="text-gray-700 text-base mb-4">
		      			@if(count($playlists)!=0)
			        		@foreach($playlists as $playlist)
			        			{{$playlist->name}}, 
			        		@endforeach 
			        		...
			        	@else
			        		No results
		        		@endif
		      		</p>
		      		
		    	</div>
	  		</div>
		</div>

		<div class="row-start-1 row-end-4 mx-10 w-72 h-96">
	  		<div class="rounded-lg shadow-lg bg-white max-w-sm">
		    	<a href="{{route('genre.index')}}">
		      		<img class="rounded-t-lg w-full h-auto" src="images/muziekplaatje2.png" alt=""/>
		    	</a>
		    	<div class="p-6">
		      		<h5 class="text-gray-900 text-xl font-medium mb-2">Genres</h5>
		      		<p class="text-gray-700 text-base mb-4">
		      			@if(count($genres)!=0)
			        		@foreach($genres as $genre)
			        			{{$genre->name}}, 
			        		@endforeach
			        		...
			        	@else
			        		No results
		        		@endif
		      		</p>
		      		
		    	</div>
	  		</div>
		</div>
		<div class="row-start-1 row-end-4 w-72 h-96">
	  		<div class="rounded-lg shadow-lg bg-white max-w-sm">
		    	<a href="{{route('song.index')}}">
		      		<img class="rounded-t-lg w-full h-auto" src="images/muziekplaatje3.png" alt=""/>
		    	</a>
		    	<div class="p-6">
		      		<h5 class="text-gray-900 text-xl font-medium mb-2">Reccomended</h5>
		      		<p class="text-gray-700 text-base mb-4">
		      			@if(count($recommended)!=0)
			        		@foreach($recommended as $recommend)
			        			{{$recommend->name}}, 
			        		@endforeach
			        		...
			        	@else
			        		No results
		        		@endif
		      		</p>
		      		
		    	</div>
	  		</div>
		</div>
	</div>
	
</body>
</html>