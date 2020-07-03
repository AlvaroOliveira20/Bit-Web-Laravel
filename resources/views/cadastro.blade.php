<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
        </script>
        <script>
                (function () {
                    window.onload = function () {
                        new BlipChat()
                        .withAppKey('Yml0Ym90OjQxZmZmYTViLTkwZWYtNDExNi1hMDYyLWVmNDJjZDBlMzhlYw==')
                        .withButton({"color":"#00b4a6","icon":""})
                        .withCustomCommonUrl('https://chat.blip.ai/')
                        .build();
                    }
                })();
            </script>
        <title>BitWeb - cadastro</title>
        <link rel="stylesheet" type="text/css" href="{{asset('cadastroCSS/cadastro.css')}}">
        <script type="text/javascript" src="backtop.js"></script>
        <meta-charset="utf-8"/>
    </head>

    <body style="margin:0;" class = "content">

        <nav class="navigation-bar">
            <img class="logo" src="{{asset('homeCSS/logo.png')}}">
            <a style = "cursor: pointer;"  onclick="window.location.href='{{route('home')}}'" class = "a" >Início</a>
            <a style = "cursor: pointer;"  class = "a" >BitConta</a>
            <a style = "cursor: pointer;" class = "a" >BitRewards</a>
            <a style = "cursor: pointer;" class = "a" >BitCard</a>
            <a style = "cursor: pointer;" class = "a" >Sobre</a>
        </nav>


        
        <div align = "center" class = "card">
            <form action = '{{route('cadastrar')}}' method = "post">
                @csrf
                <p class = "texto">Cadastre-se</p>
                <div>
                        <label class = "label">CPF:<label>
                </div>
                <input name = "cpf" type = "tel" maxlength="14" placeholder="000.000.000-00" class = "input"></input>
                <div>
                    <label class = "label">Nome completo:<label>
                </div>
                <input name = "name" type = "text"  placeholder = "Seu nome" class = "input"></input>
                <div>
                    <label class = "label">E-mail<label>
                </div>
                <input name = "email" type = "email"  placeholder = "Seu e-mail" class = "input"></input>
                <div>
                    <label class = "label">Senha<label>
                </div>
                <input name = "senha" type = "password"  placeholder = "6 dígitos" class = "input"></input>
                <div>
                    <span>
                        <input type = "checkbox" id="check" onclick="enable()"  ></input>

                        <label class = "label">concordo com os termos de uso e a <a href="#" style = "color: red">política de privacidade</a><label>
                    </span>
                </div>
            
            <div>
                <input type="submit" value= "Cadastrar" class = "button"/>
            </div>
        </form>
            
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