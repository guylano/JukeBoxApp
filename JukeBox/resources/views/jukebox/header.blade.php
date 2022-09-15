<!DOCTYPE html>
<html class="bg-gray-800 text-white">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	
	<title>jukebox</title>
</head>
<body>
	<header class="border-b-2 border-white">
		<nav class="relative w-full flex flex-wrap items-center justify-between py-4  shadow-lg navbar navbar-expand-lg navbar-light">
	        <div class="text-6xl font-bold">
	        	<h1 class="hover:text-blue-400 focus:text-blue-400 ml-5">
	        		<a href="{{route('dashboard')}}">JukeBox</a>
	        	</h1>
	        </div>
	        <div class="pr-5 grid grid-cols-2 flex justify-center w-64">
		        <div>
		        	@if(Auth::user()!=null)
		        		{{Auth::user()->name}}
		        	@endif
		        </div>
		        @if(Auth::user()==null)
		        	<form method="POST" action="{{ route('logout') }}">
		                @csrf
		                <a class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" href="route('logout')"
		                onclick="event.preventDefault();
		                this.closest('form').submit();">
		                {{ __('Log in') }}
			            </a>
			        </form>
		    	@else
		        	<form method="POST" action="{{ route('logout') }}">
		                @csrf
		                <a class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="route('logout')"
		                onclick="event.preventDefault();
		                this.closest('form').submit();">
		                {{ __('Log Out') }}
			            </a>
			        </form>
		        @endif
	    	</div>
    	</nav>
    </header>
	
</body>
</html>