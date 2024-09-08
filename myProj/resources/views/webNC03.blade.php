<html>
    <head>
        <title>Web nang cao N03 2024-2025</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    <h1>Hello web nang cao N03 </h1>
    <form method = "post" action ="myProj/app/Http/Controllers/Controller.php">
        <a><input type = text name ="studentName" size =20/></a>
        <input type = submit name= submit value="studentNameSubmit"/>



    </form>
    <div>
        @yield('content');
    </div>
    <thead>
        <tr>
            <th>Student Name</th>
        </tr>
    </thead>
    <tbody>
        {{$student}}
        
       
    </tbody>
</body>
</html>