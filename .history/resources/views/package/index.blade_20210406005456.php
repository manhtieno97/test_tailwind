<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

{{--Container--}}
@include('package.layout.container')
{{--box_sizing--}}
@include('package.layout.box_sizing')
{{--display--}}
@include('package.layout.display')
{{--float--}}
@include('package.layout.float')
{{--clear--}}
@include('package.layout.clear')
{{--object_fit--}}
@include('package.layout.object_fit')
{{--object_position--}}
@include('package.layout.object_position')
{{--overflow--}}
@include('package.layout.overflow')

<div class="mb-32">

</div>
</body>
</html>
