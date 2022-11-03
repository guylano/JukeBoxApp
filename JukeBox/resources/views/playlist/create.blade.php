<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
@include('jukebox.header')
<h1 class="text-3xl font-bold ml-4">Selected Playlist</h1>
<h1 class="font-bold ml-4">Duration {{$time}}</h1>

<div class="row">
	@if(count($songs)!=null)
		<div class="flex flex-col w-full my-0 mx-auto ">
			<div class="flex  justify-center">
			  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 w-3/4 ">
			    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
			      <div class="overflow-hidden">
			        <table class="table-auto border text-center">
			          <thead class="border-b">
			            <tr>
			              	<th scope="col" class="text-sm font-medium  px-6 py-4 border-r w-full">
			                	Song
			              	</th>
			              	<th scope="col" class="text-sm font-medium  px-6 py-4 border-r">
			               		Time
			              	</th>
			              	<th scope="col" class="text-sm font-medium  px-1 py-2 border-r">
			               		 X
			              	</th>
							<th scope="col" class="text-sm font-medium  px-1 py-2 border-r">
			                	X
			              	</th>					              
			            </tr>
			          </thead>
			          <tbody>
		{{--foreach hier met data uit db--}}
						@foreach($songs as $song)
							
				            <tr class="bg-white border-b">
				              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{--naam--}}
				                {{$song->name}}
				              </td>
				              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{--lengte--}}
				              	
				                {{$song->time_m}}:{{$song->time_s}}
				              </td>
				              <td class="text-sm text-gray-900 font-light px-1 py-2 whitespace-nowrap">{{--linkje--}}
				                <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('song.show',['id'=>$song->id])}}">See more</a>
				              </td>
				              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{--delete--}}
				              	{{Form::open(array('route' => 'song.session', 'method' => 'post'))}}
									<input type="hidden" name="id" value="{{$song->id}}">
				            	  <input type="submit" value="Remove" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
				            	  {{Form::close()}}
				          		</td>
				            </tr>
			            @endforeach
			            
			          </tbody>
			        </table>
			      </div>
			    </div>
			</div>
		  </div>
		</div>
	@else
		<h1 class="text-center w-full text-6xl my-16">--Nothing selected--</h1>
	@endif
</div>
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
					<input type="submit" value="Save" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
					
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
</div>





</body>
</html>