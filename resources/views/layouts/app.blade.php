<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title',"App" )</title>

    @vite(['resources/css/app.css','resources/css/app.js'])

    
</head>



<body>
    <nav>
        <div style="background-color: brown">

    <li>home</li>
    <li>connect</li>
    <li>preview</li>
    <li>products</li>
    
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

    </nav>

    <hr>
    @yield('content')
    <hr>

    <main>

        <h1>this is main section</h1>

    </main>
    <hr>

    <footer>
        <h1>this is footer section</h1>
    </footer>


</body>
</html>