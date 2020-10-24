// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example

function calculator(info){
  for (let index = 0; index < info.length; index++) {
      info[index];
    
  }
};

function main(info) {
  info=info.substring(0,info.length-1);
  var d = info.split("-");
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Recuperados", "Fallecidos", "N/A", "Hospital UCI", "Hospital", "En Casa"],
      datasets: [{
        //Verde, Rojo, Gris, Naranja, Amarillo, Azul 
        backgroundColor: ['#1cc88a', '#d34240', '#cdcdcd', '#ff9800', '#fbdb48', '#4e73df'],
        hoverBackgroundColor: ['#17a673', '#c63637', '#9c9c9c', '#f57c00', '#faca0f', '#2e59d9'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
        data: d,
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
  importarScript("js/demo/chart-area2-demo.js");
});