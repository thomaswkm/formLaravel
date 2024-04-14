<!DOCTYPE html>
<html>

<head>
<script src="{{ asset('js/script.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>

<body class="fondo">
    <h1 class="centered-header">Formación vs Formación - Selección Chilena</h1>
    <div class="container">
        <form name="form" method="POST" action="{{url('procesar_formulario')}}" onsubmit="return formulario.validar()">
        @csrf
            <div class="box-1">
                <div id="form">
                    <h2 class="centered-header">Formación 1</h2>
                    <select id="f11" name="form1_arq" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Arquero') !!}
                    </select><br>
                    <select id="f12" name="form1_def1" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f13" name="form1_def2" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f14" name="form1_def3" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f15" name="form1_def4" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f16" name="form1_mc1" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Mediocampista') !!}
                    </select><br>
                    <select id="f17" name="form1_mc2" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Mediocampista') !!}
                    </select><br>
                    <select id="f18" name="form1_mc3" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Mediocampista') !!}
                    </select><br>
                    <select id="f19" name="form1_del1" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Delantero') !!}
                    </select><br>
                    <select id="f110" name="form1_del2" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Delantero') !!}
                    </select><br>
                    <select id="f111" name="form1_del3" onchange="formulario.agregarAFormacion1(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Delantero') !!}
                    </select><br>
                </div>
            </div>
            <div class="box-2">
                <div id="form">
                    <h2 class="centered-header">Formación 2</h2>
                    <select id="f21" name="form2_arq" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Arquero') !!}
                    </select><br>
                    <select id="f22" name="form2_def1" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f23" name="form2_def2" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f24" name="form2_def3" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f25" name="form2_def4" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Defensa') !!}
                    </select><br>
                    <select id="f26" name="form2_mc1" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Mediocampista') !!}
                    </select><br>
                    <select id="f27" name="form2_mc2" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Mediocampista') !!}
                    </select><br>
                    <select id="f28" name="form2_mc3" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Mediocampista') !!}
                    </select><br>
                    <select id="f29" name="form2_del1" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Delantero') !!}
                    </select><br>
                    <select id="f210" name="form2_del2" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Delantero') !!}
                    </select><br>
                    <select id="f211" name="form2_del3" onchange="formulario.agregarAFormacion2(this,this.value)">
                    {!! \App\Http\Controllers\PostController::generarOpcionPorPosicion('Delantero') !!}
                    </select><br>
                </div>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>