<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web with Laravel </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <body>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        <h1 class="text-center">Web-Laravel framework</h1>
        <div>



            <div>
                @yield('content');
            </div>

            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        Firstname
                    </div>
                    <div class="col">
                        Lastname
                    </div>
                    <div class="col">
                        Date Of Birth
                    </div>
                </div>
                @foreach($students as $st)
                <div class="row align-items-end">
                    <div class="col">

                        {{ $st->firstname}}

                    </div>
                    <div class="col">

                        {{ $st->lastname}}

                    </div>
                    <div class="col">

                        {{ $st->dateOfBirth}}

                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </body>

</html>