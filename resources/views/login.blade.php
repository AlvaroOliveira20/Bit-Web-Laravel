<!DOCTYPE html>
<html>
    <head>
        <title>BitWeb - login</title>
        <link rel="stylesheet" type="text/css" href="{{asset('loginCSS/login.css')}}">
        <script type="text/javascript" src="backtop.js"></script>
        <meta-charset="utf-8"/>
    </head>

    <body style="margin:0;" class = "content">
    
        <nav class="navigation-bar">
            <img class="logo" src="{{asset('loginCSS/logo.png')}}">
            <a style = "cursor: pointer;"  onclick="window.location.href='{{route('home')}}'" class = "a" >Início</a>
            <a style = "cursor: pointer;"  class = "a" >BitConta</a>
            <a style = "cursor: pointer;"  class = "a" >BitRewards</a>
            <a style = "cursor: pointer;"  class = "a" >BitCard</a>
            <a style = "cursor: pointer;"  class = "a" >Sobre</a>
        </nav>


        
        <div align = "center" class = "card">
            <p class = "texto">Faça seu login</p>
            <form action = "{{route('logar')}}" method = "post"> 
                @csrf
                @if(session('erro'))
                    <div class= "alert alert-danger">
                        <p style="color: red"> <strong>Erro!</strong>  {{session('erro')}}!</p>
                    </div>
                @endif
                <div>
                        <label class = "label">CPF:<label>
                </div>
                <input name = "cpf" type = "tel" maxlength="14" placeholder="000.000.000.00" class = "input" required></input>
                <div>
                    <label class = "label">Senha Internet Banking:<label>
                </div>
                <input name = "senha" type = "password"  placeholder = "senha" class = "input" required></input>
            
                <div>
                    <span>
                        <input name = "checkbox" type = "checkbox"></input>
                    </span>
                    <span>
                        <label class = "label">Lembrar CPF<label>
                    </span>
                    <div class = "margin-top-10px">
                        <p style = "cursor: pointer;"  class = "label">Esqueci minha senha</p>
                    </div>
                    <div class = "margin-top-10px">
                        <p style = "cursor: pointer;"  class = "label">Não tenho uma BitConta</p>
                    </div>
                </div>
                <div>
                    <input type="submit" value= "ENVIAR" class = "button"/>
             
                </div>
            </form>
            
        </div>
    
        <nav class="navigation-footer">
            <img class="logoFooter" src="{{asset('loginCSS/logo.png')}}">
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