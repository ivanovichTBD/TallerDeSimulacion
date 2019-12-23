<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 
</head>
<body>

    <canvas id="speedChart" width="600" height="400"></canvas>
    <div id="Bar" class="bar"> 
  <div class="block text-center head-text extraPadding">
    <h1>Bar Chart</h1>
    <br>
     <canvas id="bar-chart"width="auto" height="auto"></canvas>
  </div>
</div>


</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/6.2.5/math.min.js"></script>
<script>
var Datos=$.getJSON("ProcesadorDatosSimulacion.json",function (lista){
  var DatosGrafica= new Array();
  for (let i = 1; i < lista.length; i++) {
   var MatrizBeneficio=new Array();
    var med=media(lista[i].dato.Beneficio);
    var Ds = Math.sqrt(math.variance(lista[i].dato.Beneficio));
    var IntervaloConfianza=1.96*(Ds/ Math.sqrt(lista[i].dato.Beneficio.length));
    var Maximo=med+ IntervaloConfianza;
    var Minimo=med-IntervaloConfianza;
    DatosGrafica.push({Cantidad:lista[i].Cantidad_A_Comprar.toString(),PromedioB:med,Desviacion:Ds,IntervaloConfianz:IntervaloConfianza,Maximo:Maximo,Minimo:Minimo});
  }
  function media(arreglo){
var suma = 0;
for(var x = 0; x < arreglo.length; x++){
  suma += arreglo[x];
}
return suma/arreglo.length;
}
     var Lista_Cant_compra=new Array();
     var Lista_Promedio    =new Array();
     var Lista_Maximo=new Array();
     var Lista_Minimo=new Array();
     var Colores_Aleatorios=new Array();
   
     for (let i = 0; i <DatosGrafica.length; i++) {
      Lista_Cant_compra.push(DatosGrafica[i].Cantidad);
      Lista_Promedio.push(DatosGrafica[i].PromedioB);
      Lista_Maximo.push(DatosGrafica[i].Maximo);
      Lista_Minimo.push(DatosGrafica[i].Minimo);
      Colores_Aleatorios.push(getRandomColor());
    }
    function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

   
   console.log(Lista_Maximo);
/****grafica chart */
var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
var dataFirst = {
  label: "MAXIMO",
  data: Lista_Maximo,
  //lineTension: 0.3,
  // Set More Options
  lineTension: 0.3,
    fill: false,
    borderColor: 'red'
};
   
var dataSecond = {
  label: "MINIMO",
  data: Lista_Minimo,
  // Set More Options
  lineTension: 0.3,
    fill: false,
    borderColor: 'black'
};


var datathree = {
  label: "OBTENIDO",
  data: Lista_Promedio,
  // Set More Options
  lineTension: 0.3,
    fill: false,
    borderColor: 'green'
};
   
var speedData = {
  labels:Lista_Cant_compra,
  datasets: [dataFirst, dataSecond,datathree]
};
var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 5,
      fontColor: 'blue'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
lineChart.canvas.parentNode.style.height = '500px';
lineChart.canvas.parentNode.style.width = '500px';

  /*'''''''''''''''''''''Grafico de Barras¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡*/
  var bar=new Chart(document.getElementById("bar-chart"), {
  type: 'horizontalBar',  
  data: {
    labels: Lista_Cant_compra,
    datasets: [
      {
        label: "beneficio promedio",
        backgroundColor: Colores_Aleatorios,
        data: Lista_Promedio
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'BENEFICIO PROMEDIO DE SIMULACION'
    },
    layout: {      
      padding: {
        left: 50
      }
    }
  }
});
bar.canvas.parentNode.style.height = '500px';
bar.canvas.parentNode.style.width = '500px';

  });


/*-----------------------------------GRAFICA LINEAS ---------------------------------------*/
/*var speedData = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [{
    label: "Car Speed",
    data: [0, 59, 75, 20, 20, 55, 40],
    lineTension: 0,
    fill: false,
    borderColor: 'orange',
    backgroundColor: 'transparent',
    borderDash: [5, 5],
    pointBorderColor: 'orange',
    pointBackgroundColor: 'rgba(255,150,0,0.5)',
    pointRadius: 5,
    pointHoverRadius: 10,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rectRounded'
  }]
};
var speedData = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [{
    label: "Car Speed (mph)",
    data:[0, 59, 75, 20, 20, 55, 40],
  }]
};

var datoNuevo = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [{
    label: "Car Speed (mph)",
    data: [0, 30, 10, 15, 8, 6, 40],
  }]
};
*/

/*------------------------------GRAFICA BARRAS ------------------------------------------ */
/*var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [32, 19, 20, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
myChart.canvas.parentNode.style.height = '300px';
myChart.canvas.parentNode.style.width = '300px';
*/</script>
<style>
#area-chart,
#line-chart,
#bar-chart,
#stacked,
#pie-chart{
  min-height: 250px;
  width: 600px;
}
</style>


</html>




