


function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
  }

// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {

    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  
}

function closeSidebar() {

    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;

}



// ---------- CHARTS ----------

// BAR CHART
var barChartOptions = {
  series: [{
    data: [49, 83, 79, 48, 29, 66]
  }],
  chart: {
    type: 'bar',
    height: 350,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#34495E",
    "#149077",
    "#DA8C10",
    "#34495E",
    "#CF4436",
    "#59236e"

  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '80%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["18 to 25 yrs. old", "26 to 35 yrs. old", "36 to 45 yrs. old", "46 to 55 yrs. old", "56 to 65 yrs. old", "65yrs and older"],
  },
  yaxis: {
    title: {
      text: "Count"
    }
  }
};

document.querySelectorAll(".bar-chart").forEach(function(element) {
  var barChart = new ApexCharts(element, barChartOptions);
  barChart.render();
});


// AREA CHART
var areaChartOptions = {
  series: [{
    name: '18 to 25 yrs. old',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: '26 to 35 yrs. old',
    data: [11, 32, 45, 32, 34, 52, 41]
  }, {
    name: '36 to 45 yrs. old',
    data: [12, 30, 42, 28, 63, 84, 72]
  }, {
    name: '46 to 55 yrs. old',
    data: [2, 5, 23, 34, 64, 86, 90]
  }, {
    name: '56 to 65 yrs. old',
    data: [43, 87, 93, 56, 83, 66, 61]
  }, {
    name: '65yrs and older',
    data: [89, 36, 54, 38, 81, 75, 72]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  colors: ["#34495E", "#149077",  "#DA8C10", "#34495E","#CF4436", "#59236e"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        
      },
    },
    {
      opposite: true,
      title: {
        text: 'Count',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

document.querySelectorAll(".area-chart").forEach(function(element) {
  var areaChart = new ApexCharts(element, areaChartOptions);
  areaChart.render();
}); 