<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | DSM-54</title>
    <script src="{{asset('js/jquery-3.3.1.js') }} "> </script>
    <link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet" href="">
    <script>
        $(document).ready(function () {
            //--------Estados-> Municipios---------------------
            $("#estados").on('change', function () {
                var id_estado = $(this).find(":selected").val();
                console.log('Este es el elemento seleccionado: ' + id_estado);
                if (id_estado == 0) {
                    $("#municipios").html('<option="0">--Seleccione un estado antes --</option>');
                } else {
                    $("#municipios").load('js_municipios?id_estado=' + id_estado);
                }
            });

            //form_estudios
            
            // ----------Estudios -> SI/no --------------//
            
            $('#estudia').change(function () {
                if ($(this).is(':checked')) {
                    //Do something
                    //alert('You can rock now...');
                    $("#form_estudios").load('js_estudio');
                } else {
                    $("#form_estudios").html('');
                }
            });
            
            //-------Trabajo -> si no ---//
            $('#trabajo').change(function () {
                if ($(this).is(':checked')) {
                    //Do something
                    //alert('You can rock now...');
                    $("#form_work").load('js_work');
                } else {
                    $("#form_work").html('');
                }
            });


        });

    </script>
    <style>
        body {
            background: #EEF;
        }

    </style>

</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3 mb-3">Formulario Dinamico</h1>
        <hr>
        <!-- formulario -->
        <form name="" action="" method="POST">
            <!-- matricula -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="matricula" placeholder="Ejemplo: 222111438"
                    name="matricula">
                <label for="floatingInput">Matricula</label>
            </div>
            <!-- nombre -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder="Ejemplo: Fernando Manjarrez"
                    name="nombre">
                <label for="floatingInput">Nombre(s)</label>
            </div>
            <!-- apellid paterno  -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="app" placeholder="Ejemplo: Fernando Manjarrez" name="app">
                <label for="floatingInput">Apellido Paterno</label>
            </div>
            <!-- fechan -->
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="fn" placeholder="Ejemplo: 29/12/2003" name="fn">
                <label for="floatingInput">Fecha de Nacimiento</label>
            </div>
            <!-- SEXO -->
            <div class="mb-3" style="background: #FFF;
                padding-left: 15px;
                 border: var(--bs-border-width) solid var(--bs-border-color);
                 border-radius: .375rem;">
                <label for="exampleFormControlTextarea1" class="form-label">Genero|Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gen" id="gen1" value="Femenino" checked>
                    <label class="form-check-label" for="gen1">
                        Femenino
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gen" id="gen2" value="Masculino" checked>
                    <label class="form-check-label" for="gen2">
                        Masculino
                    </label>
                </div>
            </div>
            <!-- estados  -->
            <div class="form-floating mb-3">
                <select class="form-select" id="estados" aria-label="Floating label select example">
                    <option value="0" selected>--Selecciona un Estado --</option>
                    @foreach($estados as $estado)
                    <option value="{{ $estado->id_estados}}">{{$estado -> nombre}}</option>
                    @endforeach
                </select>
                <label for="floatinSelect">Lista de Estados</label>
            </div>
            <!-- municipios -->
            <div class="form-floating">
                <select class="form-select" id="municipios" aria-label="Floating label select example">
                    <option selected>-- Seleccione un Municipio --</option>
                </select>
                <label for="floatingSelect">Lista de Municipios</label>
            </div>
            <!-- dirrecion -->
            <br>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ejemplo: Abasolo Sur #9......." name="direccion"
                    id="direccion" style="height: 100px"></textarea>
                <label for="direccion">Direccion</label>
            </div>
            <hr>
            <hr>
            <!--area de estudios -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="estudia" name="estudia">
                <label class="form-check-label" for="estudia">Estudia ?</label>
            </div>
            <hr>
            <!-- llamar vista de estudios -->
            <div id="form_estudios"></div>
            <hr>
            <hr>
            <!--area de trabajo  -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="trabajo" name="trabajo">
                <label class="form-check-label" for="trabajo">¿Trabajas?</label>
            </div>
            <hr>
            <!-- llamar vista de trabajo  -->
            <div id="form_work"></div>
        </form>
        <br><br>

        <br><br>
    </div>
</body>

</html>
