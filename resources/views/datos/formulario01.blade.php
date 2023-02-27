<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | DSM-54</title>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>

    <script>
        $(document).ready(function () {
            $("#estados").on('change', function () {
                var id_estado = $(this).find(":selected").val();
                console.log(id_estado);

                if (id_estado == 0) {
                    $("#municipios").html(
                        '<option value="0">-- Selecciona un estado antes -- </option>');
                } else {
                    $("#municipios").load('js_municipios?id_estado=' + id_estado);
                }

            });
        });
        //-----Estudios si o no----//
        //form_estudios
        $('#estudia').change(function () {
            if ($(this).is(':checked')) {
                alert('tus estudios');
                $("#form_estudios ").load('js_estudio');
            } else {
                $("#form_estudios").html('');
            }
        });

    </script>
    <style>
        body {
            background: #EEf;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-danger">Formulario dinamico</h1>
                <hr>
                <form action="" method="post">
                    <!-- matricula -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="matricula" placeholder="Ejemplo:123456"
                            name="matricula">
                        <label for="floatingInput">Matricula</label>
                    </div>
                    <!--  -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Ejemplo:Nombre" name="nombre">
                        <label for="floatingInput">Nombres </label>
                    </div>
                    <!--  -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="app" placeholder="Ejemplo: gutierrez" name="app">
                        <label for="floatingInput">Appellido Paterno </label>
                    </div>
                    <!--  -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fn" placeholder="Ejemplo:25/25/99" name="fn">
                        <label for="floatingInput">Fecha de nacimiento </label>
                    </div>
                    <!--  -->
                    <div class=" mb-3" style="background: #fff;
                        padding-left:-15px;
                        border: var(--bs-border-width) solid var(--bs-border-color);
                        border-radius:.375rem;">

                        <label for="exampleFormControllTextarea1" class="form-label">Genero | Sexo</label>
                        <div class="form-check">
                            <input classs="form-check-input" type="radio" name="gen" id="gen1" value="Femenino" checked>
                            <label classs="form-check-label" for="gen1">Femenino</label>
                        </div>

                        <div class="form-check">
                            <input classs="form-check-input" type="radio" name="gen" id="gen2" value="Masculino"
                                checked>
                            <label classs="form-check-label" for="gen2">Masculino</label>
                        </div>

                    </div>
                    <!--  -->
                    <div class="form-floating ">
                        <select name="0" id="estados" aria-label="Floating label select example">
                            <option value="0" selected>-- Selecciona un Estado---</option>
                            @foreach($estados as $estado)
                            <option value="{{$estado->id_estado}}">{{$estado->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Lista de estados</label>
                    </div>
                    <!--  -->
                    <div class="form-floating ">
                        <select class="form-select" id="municipios" aria-label="Floating label select example">
                            <option selected> -- Seleccina un estado antes --</option>
                        </select>
                        <label for="floatingSelected">Lista de municipios</label>
                    </div>
                    <!--  -->
                    <div class="form-floating ">
                        <textarea class="form-control" placeholder="tu direccion" name="dirreccion" id="direccion"
                            style="height: 80px;"></textarea>
                        <label for="direccion">Direccion</label>
                    </div>
                    <!--  -->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="estudia" name="estudia">
                        <label class="form-check-label" for="estudia" for="estudia">Estudias ?</label>
                    </div>
                    <!--  -->
                    <div id="form_estudios"></div>
                    <hr>
                    <hr>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
