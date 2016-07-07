<!DOCTYPE html>
<html>
  <head>
    <title>laravel-app</title>
  </head>
  <body>
    <h1>List of items</h1>
    <ul>
    	@foreach ($items as $item)
			    <li>{{ $item->value }}</li>
			@endforeach
    </ul>
  </body>
</html>