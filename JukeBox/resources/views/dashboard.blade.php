<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Songs</title>
</head>
<body>
	@include('jukebox.header')
	<div class="grid grid-rows-3 grid-flow-col gap-4 flex justify-center mt-6">
		<div class="row-start-1 row-end-4">
	  		<div class="rounded-lg shadow-lg bg-white max-w-sm">
		    	<a href="{{route('playlist.index')}}">
		      		<img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
		    	</a>
		    	<div class="p-6">
		      		<h5 class="text-gray-900 text-xl font-medium mb-2">Uw Playlists</h5>
		      		<p class="text-gray-700 text-base mb-4">
		        		favoriete, ...
		      		</p>
		      		
		    	</div>
	  		</div>
		</div>

		<div class="row-start-1 row-end-4">
	  		<div class="rounded-lg shadow-lg bg-white max-w-sm">
		    	<a href="{{route('genre.index')}}">
		      		<img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
		    	</a>
		    	<div class="p-6">
		      		<h5 class="text-gray-900 text-xl font-medium mb-2">Genres</h5>
		      		<p class="text-gray-700 text-base mb-4">
		        		favoriete, ...
		      		</p>
		      		
		    	</div>
	  		</div>
		</div>
		<div class="row-start-1 row-end-4 ">
	  		<div class="rounded-lg shadow-lg bg-white max-w-sm">
		    	<a href="{{route('song.index')}}">
		      		<img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
		    	</a>
		    	<div class="p-6">
		      		<h5 class="text-gray-900 text-xl font-medium mb-2">Aanbevolen</h5>
		      		<p class="text-gray-700 text-base mb-4">
		        		favoriete, ...
		      		</p>
		      		
		    	</div>
	  		</div>
		</div>
	</div>
	
</body>
</html>