<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Secret Service</title>
</head>
    <body>
    @include('template.header')
        <div class="container mx-auto">
            @yield("content")
        </div>
    </body>
</html
<!-- ... --->
