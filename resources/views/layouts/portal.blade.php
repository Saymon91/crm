<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @show

    <title>{{{ $title or 'CRM' }}}</title>

    <!-- Fonts -->
    @section('style')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @show
    <!-- Styles -->

</head>
<body>
@section('body')
@show
</body>
</html>
