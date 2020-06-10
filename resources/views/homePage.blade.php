<!DOCTYPE html>
<html>
    <head>
        <title>BitWeb - Início</title>
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
            <button href = "#" onclick="window.location.href='{{route('logout')}}'" class = "rightbutton">Deslogar</button>
        </nav>
    <p align="center" style="font-size: 30px;">olá{{session('nome')}}</p>
        <div class = "card">
            <img class="propaganda" src="propaganda4.png">
        </div>

        <nav class="navigation-footer">
            <img class="logoFooter" src="{{asset('homeCSS/logo.png')}}">
            <a style = "cursor: pointer;"  class = "aFooter" >Contato</a>
            <a style = "cursor: pointer;"  class = "aFooter" >Ajuda</a>
            <a style = "cursor: pointer;"  class = "aFooter" >Política de privacidade</a>
            <a style = "cursor: pointer;"  class = "aFooter" >Perguntas frequentes</a>
            <a style = "cursor: pointer;"  class = "aFooter" >Sobre</a>
            <a style = "cursor: pointer;" onclick="topFunction()" id="myBtn" title="Go to top"  class = "aFooter" >Voltar ao topo</a>
            <a style = "cursor: pointer;"  class = "aFooter" >Chat online</a>
        </nav>
    </body>
</html> 