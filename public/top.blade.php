    <head>
        <title>BitWeb - Seu banco digital</title>
        <link rel="stylesheet" type="text/css" href="{{asset('homeCSS/home.css')}}">
        <script type="text/javascript" src="backtop.js"></script>
        <meta-charset="utf-8"/>
    </head>
    

    <body style="margin:0;" class = "content">

        <nav class="navigation-bar">
            <img class="logo" src="{{asset('homeCSS/logo.png')}}">
            <a style = "cursor: pointer;"  onclick="window.location.href='{{route('home')}}'" class = "a" >Início</a>
            <a style = "cursor: pointer;"  class = "a">BitConta</a>
            <a style = "cursor: pointer;"  class = "a" >BitRewards</a>
            <a style = "cursor: pointer;"  class = "a" >BitCard</a>
            <a style = "cursor: pointer;"  class = "a" >Sobre</a>
            <button href = "#" onclick="window.location.href='{{route('login')}}'" class = "rightbutton">Login</button>
            <button href = "#" onclick="window.location.href='{{route('cadastro')}}'" class = "button">Criar BitConta</button> 
        </nav>
