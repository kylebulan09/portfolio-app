<!DOCTYPE html>
<html>
<head>
<title>My Project</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100">
<link rel="stylesheet" type="text/css" href="/main.css">
</head>
<body style="background-color:rgba(0,0,0,.125);">
<header>
        <a href="/" class="logo">My Portfolio</a>
        <div class="menuToggle" onclick="toggleMenu();">
        </div>
        <ul class="navigation">
            <li><a href="/#home" onclick="toggleMenu();">Home</a></li>
            <li><a href="/#about" onclick="toggleMenu();">About</a></li>
            <li><a href="/#skills" onclick="toggleMenu();">Skills</a></li>
            <li><a href="/#contact" onclick="toggleMenu();">Contact</a></li>
        </ul>
</header>  
    @yield('content')

</body>
</html>
