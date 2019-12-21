<!--<nav class="navbar navbar-default navbar-fixed-top navbar-collapse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#Bar">ChartJS Examples</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            <li><a href="#Bar">Bar chart</a></li>
            <li><a href="#Line">Line chart</a></li>
            <li><a href="#Doughnut">Doughnut chart</a></li>
            <li><a href="#Mixed">Mixed chart</a></li>
            <li><a href="#Bubble">Bubble chart</a></li>
            <li><a href="#Radar">Radar chart</a></li>
    </ul>
  </div>
</nav> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<!-- New navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
         <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
            <li><a href="#Bar">Bar chart</a></li>
            <li><a href="#Line">Line chart</a></li>
            <li><a href="#Doughnut">Doughnut chart</a></li>
            <li><a href="#Mixed">Mixed chart</a></li>
            <li><a href="#Bubble">Bubble chart</a></li>
            <li><a href="#Radar">Radar chart</a></li>
				</ul>
			</div>
		</nav>
  </div>

<!--- Bar Chart Section --->
<div id="Bar" class="bar"> 
  <div class="block text-center head-text extraPadding">
    <h1>Bar Chart</h1>
    <br>
     <canvas id="bar-chart"width="300" height="100"></canvas>
  </div>
</div>
<hr>

<!--- Line Chart Section --->
<div id="Line" class="line"> 
  <div class="block text-center head-text">
    <h1>Line Chart</h1>
    <br>
    <canvas id="line-chart" width="300" height="100"></canvas>
  </div>
</div>
<hr>

<!--- Doughnut Chart Section --->
<div id="Doughnut" class="doughnut"> 
  <div class="block text-center head-text">
    <h1>Doughnut Chart</h1>
    <br>
    <canvas id="doughnut-chart" width="600" height="300"></canvas>
  </div>
</div>
<hr>

<!--- Mixed Chart Section --->
<div id="Mixed" class="mixed"> 
  <div class="block text-center head-text">
    <h1>Mix Chart (Bar and Line)</h1>
    <br>
    <canvas id="mixed-chart" width="600" height="300"></canvas>
  </div>
</div>
<hr>

<!--- Bubble Chart Section --->
<div id="Bubble" class="bubble"> 
  <div class="block text-center head-text">
    <h1>Bubble Chart</h1>
    <br>
    <canvas id="bubble-chart" width="600" height="300"></canvas>
  </div>
</div>
<hr>

<!--- Radar Chart Section --->
<div id="Radar" class="radar"> 
  <div class="block text-center head-text">
    <h1>Radar Chart</h1>
    <br>
    <canvas id="radar-chart" width="600" height="300"></canvas>
  </div>
</div>
<hr>
<script>
//Chart Example from http://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/

// Bar chart
new Chart(document.getElementById("bar-chart"), {
  type: 'horizontalBar',  
  data: {
    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
    datasets: [
      {
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Predicted world population (millions) in 2050'
    },
    layout: {      
      padding: {
        left: 50
      }
    }
  }
});

//Line Chart
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Europe",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "Latin America",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "North America",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    },
    layout: {
      padding: {
        left: 50,
        right: 50
      }
    }
  }
});

//Doughnut Chart
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});

//Mixed Chart
new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [{
          label: "Europe",
          type: "line",
          borderColor: "#8e5ea2",
          data: [408,547,675,734],
          fill: false
        }, {
          label: "Africa",
          type: "line",
          borderColor: "#3e95cd",
          data: [133,221,783,2478],
          fill: false
        }, {
          label: "Europe",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          data: [408,547,675,734],
        }, {
          label: "Africa",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          backgroundColorHover: "#3e95cd",
          data: [133,221,783,2478]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions): Europe & Africa'
      },
      legend: { display: false },
      layout: {
        padding: {
          left: 50,
          right: 50
        }
      }
    }
});

//Bubble Chart
new Chart(document.getElementById("bubble-chart"), {
    type: 'bubble',
    data: {
      labels: "Africa",
      datasets: [
        {
          label: ["China"],
          backgroundColor: "rgba(255,221,50,0.2)",
          borderColor: "rgba(255,221,50,1)",
          data: [{
            x: 21269017,
            y: 5.245,
            r: 15
          }]
        }, {
          label: ["Denmark"],
          backgroundColor: "rgba(60,186,159,0.2)",
          borderColor: "rgba(60,186,159,1)",
          data: [{
            x: 258702,
            y: 7.526,
            r: 10
          }]
        }, {
          label: ["Germany"],
          backgroundColor: "rgba(0,0,0,0.2)",
          borderColor: "#000",
          data: [{
            x: 3979083,
            y: 6.994,
            r: 15
          }]
        }, {
          label: ["Japan"],
          backgroundColor: "rgba(193,46,12,0.2)",
          borderColor: "rgba(193,46,12,1)",
          data: [{
            x: 4931877,
            y: 5.921,
            r: 15
          }]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      },       
      layout: {
        padding: {
          left: 50,
          right: 50
        }
      },
      scales: {
        yAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Happiness"
          }
        }],
        xAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "GDP (PPP)"
          }
        }]
      }
    }
});

//Radar Chart
new Chart(document.getElementById("radar-chart"), {
    type: 'radar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: " edad 1950",
          fill: true,
          backgroundColor: "rgba(179,181,198,0.2)",
          borderColor: "rgba(179,181,198,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(179,181,198,1)",
          data: [8.77,55.61,21.69,6.62,6.82]
        }, {
          label: "edad 2050",
          fill: true,
          backgroundColor: "rgba(255,99,132,0.2)",
          borderColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          data: [25.48,54.16,7.61,8.06,4.45]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Distribution in % of world populatio'
      }
    }
});
</script>