<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos.css">
    <link rel="stylesheet" href="app.css">

</head>
<body>
<div class="e">
            <h1>Simulador</h1>
        </div>
        
        <form action="" id="form" class="formulario">
            <div class="formularioDiv">
                <div class="titulo">
                    <h2>Insertar los datos historicos para la simulación</h2>
                </div>
                <div class="Demanda">
                    <h3 class="titulo_demanda">Unidades vendidas</h3>
                    <input type="number" class="CantidadV formImput" name="unidades1" id="cantidad1" placeholder="cantidad de venta">
                    <input type="number" class="diasV formImput" name="dias1" id="diasD1" placeholder="dias"><br/>
                    <input type="number" class="CantidadV formImput" name="unidades2" id="cantidad2" placeholder="cantidad de venta">
                    <input type="number" class="diasV formImput" name="dias2" id="diasD2" placeholder="dias"><br/>
                    <input type="number" class="CantidadV formImput" name="unidades3" id="cantidad3" placeholder="cantidad de venta">
                    <input type="number" class="diasV formImput" name="dias3" id="diasD3" placeholder="dias"><br/>
                    <input type="number" class="CantidadV formImput" name="unidades4" id="cantidad4" placeholder="cantidad de venta">
                    <input type="number" class="diasV formImput" name="dias4" id="diasD4" placeholder="dias"><br/>
                    <input type="number" class="CantidadV formImput" name="unidades5" id="cantidad5" placeholder="cantidad de venta">
                    <input type="number" class="diasV formImput" name="dias5" id="diasD5" placeholder="dias"><br/>
                    <input type="number" class="CantidadV formImput" name="unidades6" id="cantidad6" placeholder="cantidad de venta">
                    <input type="number" class="diasV formImput" name="dias6" id="diasD6" placeholder="dias">
                </div>
                
                <div class="Ventas">
                    <h3 class="titulo_ventas">Precios de Ventas</h3>
                    <input type="number" class="PrecioV formImput" name="precioVenta1" id="venta1" placeholder="precio de venta">
                    <input type="number" class="diasPrecioV formImput" name="dias1" id="diasV1" placeholder="dias"><br/>
                    <input type="number" class="PrecioV formImput" name="precioVenta2" id="venta2" placeholder="precio de venta">
                    <input type="number" class="diasPrecioV formImput" name="dias2" id="diasV2" placeholder="dias"><br/>
                    <input type="number" class="PrecioV formImput" name="precioVenta3" id="venta3" placeholder="precio de venta">
                    <input type="number" class="diasPrecioV formImput" name="dias3" id="diasV3" placeholder="dias"><br/>
                    <input type="number" class="PrecioV formImput" name="precioVenta4" id="venta4" placeholder="precio de venta">
                    <input type="number" class="diasPrecioV formImput" name="dias4" id="diasV4" placeholder="dias"><br/>
                    <input type="number" class="PrecioV formImput" name="precioVenta5" id="venta5" placeholder="precio de venta">
                    <input type="number" class="diasPrecioV formImput" name="dias5" id="diasV5" placeholder="dias"><br/>
                </div>
                
                <div class="Compras">
                    <h3 class="titulo_compras">Precios de Compra</h3>
                    <input type="number" class="compra formImput" name="precioCompra1" id="compra1" placeholder="precio de compra">
                    <input type="number" class="diasCompra formImput" name="diasC1" id="diasC1" placeholder="dias"><br/>
                    <input type="number" class="compra formImput" name="precioCompra2" id="compra2" placeholder="precio de compra">
                    <input type="number" class="diasCompra formImput" name="diasC2" id="diasC2" placeholder="dias"><br/>
                    <input type="number" class="compra formImput" name="precioCompra3" id="compra3" placeholder="precio de compra">
                    <input type="number" class="diasCompra formImput" name="diasC3" id="diasC3" placeholder="dias"><br/>
                    <input type="number" class="compra formImput" name="precioCompra4" id="compra4" placeholder="precio de compra">
                    <input type="number" class="diasCompra formImput" name="diasC4" id="diasC4" placeholder="dias"><br/>
                    <input type="number" class="compra formImput" name="precioCompra5" id="compra5" placeholder="precio de compra">
                    <input type="number" class="diasCompra formImput" name="diasC5" id="diasC5" placeholder="dias"><br/>
                </div>
                <div class="Lista">
                    <h3 class="titulo_lista">Cantidad posible a Comprar</h3>
                    <input type="number" class="Simudias formImput" name="cantidad1" id="cantidadP1" placeholder="cantidad 1"><br/>
                    <input type="number" class="Simudias formImput" name="cantidad2" id="cantidadP2" placeholder="cantidad 2"><br/>
                    <input type="number" class="Simudias formImput" name="cantidad3" id="cantidadP3" placeholder="cantidad 3"><br/>
                    <input type="number" class="Simudias formImput" name="cantidad4" id="cantidadP4" placeholder="cantidad 4"><br/>
                    <input type="number" class="Simudias formImput" name="cantidad5" id="cantidadP5" placeholder="cantidad 5"><br/>
                    <input type="number" class="Simudias formImput" name="cantidad6" id="cantidadP6" placeholder="cantidad 6"><br/>
                </div>
                <div class="transporte">
                    <label class="labelTransporte">Transporte</label>
                    <input type="number" class="formImputTrans" name="transporte" id="transporte" placeholder="precio">
                    <label class="labelCorridas">Corridas</label>
                    <input type="number" class="formImputTrans" name="corridas" id="Num_corridas" placeholder="Numero de corridas">
                    <button type="button" class="formButton" onclick="iniciarSimulacion()">Insertar</button>
                </div>
            </div>
        </form>
        



<div id="demanda"></div>
<div id="venta"></div>
<div id="compra"></div>

   <button class="btn btn-primary" onclick="CrearNumSucesos()"> Calcular Matriz Para Graficar </button>
<!--<h2>DEMANDA</h2>

<div class="barra" id="barra"></div>
<div id="Informacion"></div>
<H2></H2>
-->
<div id="matris"></div>
    
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="Demanda.js"></script>