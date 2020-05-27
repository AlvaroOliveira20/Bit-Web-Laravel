<!DOCTYPE html>
<html>
    <head>
        <title>BitWeb - cadastro</title>
        <link rel="stylesheet" type="text/css" href="cadastroCSS/cadastro.css">
        <script type="text/javascript" src="cadastro.js"></script>
        <meta-charset="utf-8"/>
    </head>

    <body style="margin:0;" class = "content">

        <nav class="navigation-bar">
            <img class="logo" src="cadastroCSS/logo.png">
            <a style = "cursor: pointer;"  onclick="window.location.href='{{route('home')}}'" class = "a" >Início</a>
            <a style = "cursor: pointer;"  class = "a" >BitConta</a>
            <a style = "cursor: pointer;" class = "a" >BitRewards</a>
            <a style = "cursor: pointer;" class = "a" >BitCard</a>
            <a style = "cursor: pointer;" class = "a" >Sobre</a>
        </nav>


        
        <div align = "center" class = "card">
            <form action = "C:/VsPython/bootstrap/Cadastro" method = "post">
                <p class = "texto">Cadastre-se</p>
                <div>
                        <label class = "label">CPF:<label>
                </div>
                <input type = "tel" maxlength="11" placeholder="000.000.000.00" class = "input"></input>
                <div>
                    <label class = "label">Nome completo:<label>
                </div>
                <input type = "text"  placeholder = "Seu nome" class = "input"></input>
                <div>
                    <label class = "label">E-mail<label>
                </div>
                <input type = "email"  placeholder = "Seu e-mail" class = "input"></input>
                <div>
                    <label class = "label">Senha<label>
                </div>
                <input type = "password"  placeholder = "6 dígitos" class = "input"></input>
                <div>
                    <span>
                        <input type = "checkbox" id="check" onclick="enable()"  ></input>

                        <label class = "label">concordo com os termos de uso e a <a href="#" style = "color: red">política de privacidade</a><label>
                    </span>
                </div>
            </form>
            <div>
                <input class = "button" type="button" id="button" value="CONTINUAR" disabled onclick="window.location.href='ConfirmaCadastro.html'">
            </div>
            
        </div>
    
        <nav class="navigation-footer">
            <img class="logoFooter" src="cadastroCSS/logo.png">
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