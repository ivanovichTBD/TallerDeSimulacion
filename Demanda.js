/* demandaa------------------------------------------------------------------------ */
var demandaInicial=[20,21,22,23,24,25];
var DiasDemanda=[10,20,30,30,20,10];

var PrecioVenta=[10,12,14,16,18];
var DiasVenta=[20,30,40,30,10];

var PrecioCompra=[5,7,9,11,17];
var DiasCompra=[15,25,35,25,10];

var Lista_De_Cantidad_comprar=[20,21,22,23,24,25];
var Num_Corridas=100;
var Transporte=1;
/*var TotalDiasDemanda=SumaTotalArreglo(DiasDemanda);
var ProbabilidadDem=ProbabilidadSuceso(DiasDemanda,TotalDiasDemanda);
var ProbavilidadAcumulada= ProbabilidadAcumulada(ProbabilidadDem);
console.log(ProbavilidadAcumulada);
Demanda_Dias=[demandaInicial,DiasDemanda,ProbabilidadDem,ProbavilidadAcumulada];
//console.log(Demanda_Dias);

GraficaProbabilidad(ProbabilidadDem,'barra',DiasDemanda,'Informacion','para la cantidad de dias de ');
*/
var MatrisDemanda=SacarProbabilidades(demandaInicial,DiasDemanda,'demanda','DEMANDA');

var MatrisPrecioVenta=SacarProbabilidades(PrecioVenta,DiasVenta,'venta','PRECIO VENTA');

var MatrisPrecioCompra=SacarProbabilidades(PrecioCompra,DiasCompra,'compra','PRECIO COMPRA');

function SacarProbabilidades(DatoIniciales,nroDias,contenedor,titulo){
    
    var contenido=document.getElementById(contenedor);
    var h2=document.createElement('h2');  
    title=document.createTextNode(titulo)
    var contenedorBarra=document.createElement('div');  
    var ContenedorInf=document.createElement('div');  
    contenedorBarra.setAttribute('class','barra');
    contenedorBarra.setAttribute('id',contenedor+'barra');
    ContenedorInf.setAttribute('id',contenedor+'Informacion');
    h2.appendChild(title);
    contenido.appendChild(h2);  
    contenido.appendChild(contenedorBarra);  
    contenido.appendChild(ContenedorInf);  
        
    var TotalDiasDemanda=SumaTotalArreglo(nroDias);
    var ProbabilidadDem=ProbabilidadSuceso(nroDias,TotalDiasDemanda);
    var ProbavilidadAcumulada= ProbabilidadAcumulada(ProbabilidadDem);
    //console.log(ProbavilidadAcumulada);
    //console.log(Demanda_Dias);
    
    GraficaProbabilidad(ProbabilidadDem,contenedor+'barra',DatoIniciales,contenedor+'Informacion','para la cantidad de dias de ');
    //Demanda_Dias=[DatoIniciales,DiasDemanda,ProbabilidadDem,ProbavilidadAcumulada];
    var Matriz=[DatoIniciales,DiasDemanda,ProbabilidadDem,ProbavilidadAcumulada];
    //console.log(Matriz);
    return [DatoIniciales,nroDias,ProbabilidadDem,ProbavilidadAcumulada];
}

MostrarMatriz('matris',MatrisDemanda);
function MostrarMatriz(idElemento, Matriz){
    var ubicacion=document.getElementById(idElemento);
   // for (let i = 0; i < Matriz.length; i++) {
        for (let j = 0; j < Matriz[1].length; j++) {
           // console.log(Matriz[1][j]);
            var div=document.createElement('div');  
            var datos=document.createTextNode(Matriz[0][j]);       
            div.appendChild(datos);
            ubicacion.appendChild(div); 
        }
    //}
}


/*----------------------------------Grafica de probabilidad mas informacion ------------------- */

function GraficaProbabilidad(ArregloProb,idElemento,ArregloInfo,UbicacionInformacion,textoInfo){
    var ubicacion=document.getElementById(idElemento);
    var UbicacionInfo=document.getElementById(UbicacionInformacion);
    var Informacion=[];
    for (let i = 0; i < ArregloProb.length; i++) {
        var ColorFon=getRandomColor();
        Informacion.push(ColorFon);
        var div=document.createElement('div');  
        div.style.width=(ArregloProb[i]*100)+"%";
        //div.style.backgroundColor=getRandomColor();    
        div.style.backgroundImage="radial-gradient("+'white'+","+ColorFon+")";    
        
        div.style.border="2px solid black";
        div.style.paddingTop="2%";
        var datos=document.createTextNode(ArregloProb[i].toFixed(2));       
        
        div.appendChild(datos)
        ubicacion.appendChild(div); 
    
    }
    for (let i = 0; i < ArregloInfo.length; i++) {
        var contenedorInfo=document.createElement('div');
        contenedorInfo.setAttribute('class','info')
        var cuadritoColor=document.createElement('div');  
        var Informe=document.createElement('p');
        cuadritoColor.style.backgroundColor=Informacion[i];
        cuadritoColor.setAttribute('class','caja');
        
        Informe.setAttribute('class','txtoInfo');  
        var infArreglo=document.createTextNode(textoInfo+"  :   "+ArregloInfo[i]);       
        Informe.appendChild(infArreglo);
        
        contenedorInfo.appendChild(cuadritoColor);
        contenedorInfo.appendChild(Informe);
        
        UbicacionInfo.appendChild(contenedorInfo)

    }
    
        

}

/* Colores aleatorios */
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
 
/* Saca el total del arreglo------------------------------------------------------------------ */
function SumaTotalArreglo(arreglo){
    var acumulacion=0;
    for (let i = 0; i < arreglo.length; i++) {
        acumulacion=arreglo[i]+acumulacion;
    }
    return acumulacion;
}

/*---------------saca la probabilidad dividiendo entre cada elemento del arreglo con el total----------------------- */
function ProbabilidadSuceso(arreglo,totalAdividir){
    var Prob= [];
    for (let i = 0; i < arreglo.length; i++) {
        Prob.push(arreglo[i]/totalAdividir);
    }
    return Prob;
} 

function ProbabilidadAcumulada(ArregloProbabilidad){
        var Resultado=[];
        var cont=0;
        for (let i = 0; i < ArregloProbabilidad.length; i++) {
            cont=cont+ArregloProbabilidad[i];
            Resultado.push(cont);
            
        }
return Resultado;
}

/*-----------------------------------Crear Procesador de Datos------------------------------------------------------ */
console.log(BuscarValorProximo(0.80,MatrisDemanda));
function BuscarValorProximo(aleatorio,Matriz){
    //var aleatorio=Math.random();
    var lista=new Array();
    for (let j = 0; j < Matriz[1].length; j++) {
        var nuevo = Math.abs(aleatorio-Matriz[3][j]);
        lista.push(nuevo);
    }
        var ValMin=Math.min.apply(null,lista);
        var indiceMinimo=lista.indexOf(ValMin);
        var minimo= Math.abs(aleatorio-0);
            if (minimo<ValMin){
                 return Matriz[0][0]-1;
                     }
            else{
                    return Matriz[0][indiceMinimo];
                }
}
//listaAleatorio(100,MatrisPrecioVenta,'PrecioCompra');
 function listaAleatorio(NroSucesos,Matriz,NombreLista){
     var ListaRandom=new Array();
   
     // var nombre=NombreLista;
     for (let i = 1; i <= NroSucesos; i++) {
        
   // ListaRandom.push({lista:NombreLista,dato:BuscarValorProximo(Math.random(),Matriz)});
    ListaRandom.push(BuscarValorProximo(Math.random(),Matriz));         
        }
      // console.log(ListaRandom[50].lista);
        return ListaRandom;
    }
/*********MATRIZ FINAL DE VARIABLES ************************************* */
  

//console.log(Matriz_Final_de_Variables(Num_Corridas,Transporte,Lista_De_Cantidad_comprar));
function Matriz_Final_de_Variables(NumeroCorridas,CostoMovilidad,ListaCantidadCompra){
  
        var ArregloFinal=new Array();
        
for (let i = 0; i < ListaCantidadCompra.length; i++) {
    ArregloFinal.push({Cntidad_A_Comprar:ListaCantidadCompra[i],dato:Lista_Exceso_Beneficio(ListaCantidadCompra[i],NumeroCorridas)});
    
}


  /*Matriz Exceso BEeneficio-----------------dependiendo de la cantidad de compra */    
function Lista_Exceso_Beneficio(CantidadCompra,NumeroCorridas){
        var Exceso_Beneficio= new Array();
        var exceso=new Array();
        var ganancia=new Array(); 

var demanda =MatrisVariableAleatoria(NumeroCorridas,CostoMovilidad)[0].demanda;
var CostoCompra =MatrisVariableAleatoria(NumeroCorridas,CostoMovilidad)[0].CostoCompra;
var PrecioVenta =MatrisVariableAleatoria(NumeroCorridas,CostoMovilidad)[0].PrecioVenta;
       
                 for (let i = 0; i < NumeroCorridas; i++) {
                        var CostExceso=Coste_Exceso(CantidadCompra,demanda[i],CostoCompra[i]);
                        exceso.push(CostExceso);
                        ganancia.push(beneficio(CantidadCompra,demanda[i],PrecioVenta[i],CostoCompra[i],CostExceso));     
                     }
        return Exceso_Beneficio={CostoExceso:exceso,Beneficio:ganancia};
               
       }

       /*Saca el costo exceso en abse a compra y demanda---------------------------- */
    
function Coste_Exceso(CantidadAComprar,demanda,costeCompra){
                if(CantidadAComprar>demanda){
                    return (CantidadAComprar-demanda)*costeCompra;
                }
                else{
                  return 0;
                }

        }

function beneficio(CantidadAComprar,demanda,precioVenta,costeCompra,costeExceso){
            if(CantidadAComprar<=demanda){
                return (CantidadAComprar*precioVenta)-(CantidadAComprar*costeCompra);
            }
            else{
              return (demanda*precioVenta)-(demanda*costeCompra)-costeExceso;
            }

        }
        //console.log(beneficio(18,21,10,9,0));
     return MatrisVariableAleatoria(NumeroCorridas,CostoMovilidad).concat(ArregloFinal);
    
    }
//MatrisVariableAleatoria(100,1);
/********************Saca la Matriz de variables iniciales Variables iniciales aleatorias**************************** */
 function MatrisVariableAleatoria(NroCorridas,CosteTransporte){
   var Precio_Compra= listaAleatorio(NroCorridas,MatrisPrecioCompra,'PrecioCompra');
   var Precio_Venta=listaAleatorio(NroCorridas,MatrisPrecioVenta,'PrecioCompra');
   var Demanda=listaAleatorio(NroCorridas,MatrisDemanda,'PrecioCompra'); 
    var Coste_Compra=new Array();
    for (let i = 0; i < Precio_Compra.length; i++) {
        Coste_Compra.push(Precio_Compra[i]+CosteTransporte);
        
    }
   var ResultadoFinal=new Array();
   ResultadoFinal.push({demanda:Demanda,PrecioVenta:Precio_Venta,PrecioCompra:Precio_Compra,CostoCompra:Coste_Compra});

   return ResultadoFinal;


 }
console.log(Matriz_Final_de_Variables(Num_Corridas,Transporte,Lista_De_Cantidad_comprar));
function CrearNumSucesos(){        
  //  console.log('ingreso a la funcion');  
    var arreglo =Matriz_Final_de_Variables(Num_Corridas,Transporte,Lista_De_Cantidad_comprar);
    $.ajax({
        type:'post',
       // dataType: 'json',
        data: {'arreglo': JSON.stringify(arreglo)},
        url: 'enviarDatos.php',
       success: function(datos) {
            console.log(datos);    
            
                 },
         error: function() { alert("Error leyendo fichero jsonP"); }
    });


}