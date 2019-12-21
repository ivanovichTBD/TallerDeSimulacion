<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="myfirstchart" style="height: 250px;"></div>
<h3 class="text-primary text-center">
    Morris js charts
  </h3>
  <div class"row">
    <div class="col-sm-6 text-center">
      <label class="label label-success">Area Chart</label>
      <div id="area-chart" ></div>
    </div>
    <div class="col-sm-6 text-center">
       <label class="label label-success">Line Chart</label>
      <div id="line-chart"></div>
    </div>
    <div  class="col-sm-6 text-center">
       <label class="label label-success">Bar Chart</label>
      <div id="bar-chart" ></div>
    </div>
    <div class="col-sm-6 text-center">
       <label class="label label-success">Bar stacked</label>
      <div id="stacked" ></div>
    </div>
    <div class="col-sm-6 col-sm-offset-3 text-center">
       <label class="label label-success">Pie Chart</label>
      <div id="pie-chart" ></div>
    </div>
    
  </div>
</body>
</html>
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
<script>
var data = [
      { y: '2014', a: 50, b: 90},
      { y: '2015', a: 65,  b: 75},
      { y: '2016', a: 50,  b: 50},
      { y: '2017', a: 75,  b: 60},
      { y: '2018', a: 80,  b: 65},
      { y: '2019', a: 90,  b: 70},
      { y: '2020', a: 100, b: 75},
      { y: '2021', a: 115, b: 75},
      { y: '2022', a: 120, b: 85},
      { y: '2023', a: 145, b: 85},
      { y: '2024', a: 160, b: 95}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Total Income', 'Total Outcome'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
config.element = 'area-chart';
Morris.Area(config);
config.element = 'line-chart';
Morris.Line(config);
config.element = 'bar-chart';
Morris.Bar(config);
config.element = 'stacked';
config.stacked = true;
Morris.Bar(config);
Morris.Donut({
  element: 'pie-chart',
  data: [
    {label: "Friends", value: 30},
    {label: "Allies", value: 15},
    {label: "Enemies", value: 45},
    {label: "Neutral", value: 10}
  ]
});




/*'''''''''''''''''''''''''Linea'''''''''''''' */
/*new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Valor']
});*/</script>