<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
</head>
<body>
<canvas id="speedChart" width="600" height="400"></canvas>
<script>
/*-----------------------------------GRAFICA LINEAS ---------------------------------------*/
var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
var dataFirst = {
  label: "Car A - Speed (mph)",
  data: [0, 59, 75, 20, 20, 55, 40],
  //lineTension: 0.3,
  // Set More Options
  lineTension: 0,
    fill: false,
    borderColor: 'red'
};
   
var dataSecond = {
  label: "Car B - Speed (mph)",
  data: [20, 15, 60, 60, 65, 30, 70],
  // Set More Options
  lineTension: 0,
    fill: false,
    borderColor: 'black'
};
   
var speedData = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [dataFirst, dataSecond]
};
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
</body>

</html>
