<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Playlist {{$playlist->name}}</title>
</head>
<body>
	@include('jukebox.header')
	<h1 class="text-3xl font-bold">{{$playlist->name}}</h1>
	





	<div class="flex flex-col w-3/4 my-0 mx-auto">
	  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
	    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
	      <div class="overflow-hidden">
	        <table class="min-w-full border text-center">
	          <thead class="border-b">
	            <tr>
	              <th scope="col" class="text-sm font-medium  px-6 py-4 border-r">
	                Name
	              </th>
	              <th scope="col" class="text-sm font-medium  px-6 py-4 border-r">
	                Time
	              </th>
	              <th scope="col" class="text-sm font-medium  px-1 py-2 border-r">
	                X
	              </th>
	              
	            </tr>
	          </thead>
	          <tbody>


{{--foreach hier met data uit db--}}
				@foreach($playlist->song as $song)
					
		            <tr class="bg-white border-b">
		              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{--naam--}}
		                {{$song->song->name}}
		              </td>
		              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{--lengte--}}
		              	
		                {{$song->song->time}}
		              </td>
		              <td class="text-sm text-gray-900 font-light px-1 py-2 whitespace-nowrap">{{--linkje--}}
		                <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('song.show',['id'=>$song->id])}}">bekijk</a>
		              </td>
		            </tr>
	            @endforeach
	            
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>