<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') Tailwind CSS 3</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@section('body')
@show
</body>
</html>
