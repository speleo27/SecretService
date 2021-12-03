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
        @yield("homepage")
        <div class="container mx-auto">
            @yield("content")
        </div>

    <script>

        const hamburger = document.getElementById('ham');
        const men= document.getElementById('menu')
        hamburger.addEventListener("click", ()=>{
            men.classList.toggle("hidden");

            hamburger.classList.toggle("rotate90");
        })
        </script>
    <script src="{{asset("js/app.js")}}"></script>
    </body>
</html
<!-- ... --->
