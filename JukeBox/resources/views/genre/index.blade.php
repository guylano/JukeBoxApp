
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	@include('jukebox.header')
	<h1 class="text-3xl font-bold ml-4">Genres</h1>
	@if(count($genres)!=null)
		<div class="flex flex-col w-3/4 mb-0 mt-8 mx-auto">
		  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
		    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
		      <div class="overflow-hidden">
		        <table class=" border text-center table-auto">
		          <thead class="border-b">
		            <tr>
		              <th scope="col" class="text-sm font-medium  px-6 py-4 border-r w-full">
		                Genre
		              </th>
		              <th scope="col" class="text-sm font-medium  px-1 py-2 border-r">
		                X
		              </th>
		              
		            </tr>
		          </thead>
		          <tbody>


	{{--foreach hier met data uit db--}}
					@foreach($genres as $G)
			            <tr class="bg-white border-b">
			              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{--naam--}}
			                {{$G->name}}
			              </td>
			              <td class="text-sm text-gray-900 font-light px-1 py-2 whitespace-nowrap">{{--linkje--}}
			                <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('genre.show',['id'=>$G->id])}}">See more</a>
			              </td>
			            </tr>
		            @endforeach
		            
		          </tbody>
		        </table>
		      </div>
		    </div>
		  </div>
		</div>
	@else
		<h1 class="text-center w-full text-6xl mt-16">--No data available--</h1>
	@endif
</body>
</html>