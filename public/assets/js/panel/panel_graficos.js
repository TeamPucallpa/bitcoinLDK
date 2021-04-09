let ctx = document.querySelector("#myChart");
let myLineChart;
let ArrayListMes = [];
let ArrayListTotalUsuario = [];
ArrayListMes.shift();
ArrayListTotalUsuario.shift();


$.ajax({
    type: 'post',
    url: '../controllers/ClienteController.php?a=reporte-graficos',
    success:function(respuestaServidor){
       let datosJson = JSON.parse(respuestaServidor);
        datosJson.forEach(element => {
             ArrayListMes.push(element.mes);
             ArrayListTotalUsuario.push(element.total);
        });
            myLineChart = new Chart(ctx, {
                type: 'pie',
                data: {
                          labels: ArrayListMes,
                          datasets: [{
                              label: '# Personas Registradas por meses',
                              data: ArrayListTotalUsuario,
                              backgroundColor: [
                                  'rgb(0, 0, 255)',
                                  'rgb(138, 43, 226)',
                                  'rgb(165, 42, 42)',
                                  'rgb(222, 184, 135)',
                                  'rgb(95, 158, 160)',
                                  'rgb(127, 255, 0)',
                                  'rgb(210, 105, 30)',
                                  'rgb(220, 20, 60)',
                                  'rgb(184, 134, 11)',
                                  'rgb(169, 169, 169)',
                                  'rgb(143, 188, 143)',
                                  'rgb(245, 245, 220)'
                                ],
                              borderColor: 'rgb(255,255,255)',
                              scaleFontFamily : "'Arial'",
                              animationEasing : "easeOutQuart",
                          }],
                      },
                 options: { scales: { yAxes: [{ ticks: { beginAtZero: false } }] } , responsive: true}
              });
        // End Chart js Pie 
    },
    error:function(){
      alert("Hay un error");
    }
  });