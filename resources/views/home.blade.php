<html>
    <head>
        <title>Home</title>
        <link rel="icon" type="image/png" href="{{url('img/714043.png')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
        <div id="apresentacao">
            <div class="apresentacao-text">
                <h1>PROJETOS DE DESENVOLVIMENTO</h1>
                <h4>Projetos desenvolvido por mim para testes e treinamento.</h4>
            </div>
            <a onclick="ver_projetos()" class="animated-button1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Ver meus Projetos
            </a>
        </div>
        <div id="projetos">
        <i id="bt_voltar" class="bi bi-arrow-return-left"></i>
        @for($x = 1; $x <= 6; $x++)
            <div class="box-projetos">
                <img src="{{url('img/white-image.png')}}"></img>
                <div class="text-projetos">
                    <h3>Nome do projeto</h3>
                    <h5>Ultima atualização</h5>
                </div>
            </div>
        @endfor
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="{{url('js/home/script.js')}}"></script>
        <script defer type="module" src="{{url('js/VantaJS/three.r134.min.js')}}"></script>
        <script defer type="module" src="{{url('js/VantaJS/vanta.net.min.js')}}"></script>
        <script defer type="module" src="{{url('js/VantaJS/vanta.js')}}"></script>
    </body>
</html>