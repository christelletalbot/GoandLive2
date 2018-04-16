<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title or 'Goandlive'}}</title>

        
    </head>
    <body>
			@include('layouts/partials/_nav', ['age' => '27'])


    		@yield('content')





		<footer>
			@yield('footer')
		</footer>
		@yield('script.footer')
    </body>
</html>