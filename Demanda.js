/* demandaa------------------------------------------------------------------------ */
var demandaInicial=[20,21,22,23,24,25];
var DiasDemanda=[10,20,30,30,20,10];

var PrecioVenta=[10,12,14,16,18];
var DiasVenta=[20,30,40,30,10];

var PrecioCompra=[5,7,9,11,17];
var DiasCompra=[15,25,35,25,10];

/*var TotalDiasDemanda=SumaTotalArreglo(DiasDemanda);
var ProbabilidadDem=ProbabilidadSuceso(DiasDemanda,TotalDiasDemanda);
var ProbavilidadAcumulada= ProbabilidadAcumulada(ProbabilidadDem);
console.log(ProbavilidadAcumulada);
Demanda_Dias=[demandaInicial,DiasDemanda,ProbabilidadDem,ProbavilidadAcumulada];
//console.log(Demanda_Dias);

GraficaProbabilidad(ProbabilidadDem,'barra',DiasDemanda,'Informacion','para la cantidad de dias de ');
*/
SacarProbabilidades(demandaInicial,DiasDemanda,'demanda','DEMANDA');

SacarProbabilidades(PrecioVenta,DiasVenta,'venta','PRECIO VENTA');

var matris=SacarProbabilidades(PrecioCompra,DiasCompra,'compra','PRECIO COMPRA');

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
    
    GraficaProbabilidad(ProbabilidadDem,contenedor+'barra',nroDias,contenedor+'Informacion','para la cantidad de dias de ');
    //Demanda_Dias=[DatoIniciales,DiasDemanda,ProbabilidadDem,ProbavilidadAcumulada];
    var Matriz=[DatoIniciales,DiasDemanda,ProbabilidadDem,ProbavilidadAcumulada];
    //console.log(Matriz);
    return [DatoIniciales,nroDias,ProbabilidadDem,ProbavilidadAcumulada];
}
MostrarMatriz('matris',matris);
function MostrarMatriz(idElemento, Matriz){
    var ubicacion=document.getElementById(idElemento);
    for (let i = 0; i < Matriz.length; i++) {
        for (let j = 0; j < Matriz[1].length; j++) {
            console.log(Matriz[i][j]);
            var div=document.createElement('div');  
            var datos=document.createTextNode(Matriz[i][j]);       
            div.appendChild(datos)
            ubicacion.appendChild(div); 
        }
    }
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