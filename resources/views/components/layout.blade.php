<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
  
     @include('reuse.menubar')

     {{$slot}}

     @include('reuse.fotter')


    <script src="{{ mix('js/app.js') }}" defer></script>
    
</body>
</html>