<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ´GOOGLEFONTS -->

    <title>Practica-02</title>
    <!-- STYLES -->
    <style>
        html,body{
            background-color: #3945;
            font-family:'Nunito',sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content{text-align:center;}
        
        .title{font-size: 84px;}

        .links > a{

            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight:600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>

</head>
<body>
    <div class="content">
        <h1>pattern</h1>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <p>Evaluacion 1 numeros:</p>
        <input type="text" require pattern="[0-9\/+]"/>
        <br>
        <br>
        <br>
        <p>Evaluacion 1 texto:</p>
        <input type="text" id="evaluacion" onblur="fieldSize()">
        <br>
        <p id="error"></p>
        
        <script>
            const $input=document.querySelector("#evaluacion");
            const patron =/[0-9 a-z A-Z @_.]+/;
            $input=addEventListener("keydown", event => {
                if (patron.test(event.key)) {
                document.getElementById('evaluacion').style.border = "1px solid #00cc00";
            }
            else{
                if (event.keyCode == 8){
                console.log("backspace");
                }
                else {
                    event.preventDefault();
                var tcla = event.keyCode;
                console.log(tcla);
                };
            }
        });
        //-----------------------------------------------------------------
        function fieldSize(){
            var tam = document.getElementById("evaluacion").value;
            if (tam.length>=2 && tam.length<=10){
                document.getElementById("error").innerHTML = "";
            }
            else{
                document.getElementById("error").innerHTML = "Error: Tamaño del texto";
                document.getElementById("evaluacion").style.border = "1px solid #FF0000";
            }
        }
    
        </script>
    <br>
    <br>
    Indica los valores textuales/numericos: <br>
    <input type="text"  size="40" onkeypress="ifTxt(event)">
    <p id="salida"></p>

    <script>
    function ifTxt(event) {
        var vn= event.keyCode;           //Indica el valor numerico
        var vt = String.fromCharCode(vn);   //Indica el valor textual
        document.getElementById("salida").innerHTML = "Numerico: " + vn +
        "<br>Textual: " + vt;
        }
    </script>
    </div>
</body>
</html>