// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");

function calculator(info){
  for (let index = 0; index < info.length; index++) {
      info[index];
    
  }
};

function main(info) {
  info=info.substring(0,info.length-1);
  var d = info.split("-");
  
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: d,
      datasets: [{
        data: [55, 30, 15],
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });
}

function importarScript(nombre) {
  var s = document.createElement("script");
  s.src = nombre;
  document.querySelector("head").appendChild(s);
}

$.post("php/consultor-graph2.php", {}, function (response) {
  main(response);

});