<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Administración Reciclick</title>
   <?php require_once "views/layout/header-admin.php" ?>
</head>

<body>
   <div class="container-scroller">
      <?php require_once "layout/navbar.php" ?>
      <div class="container-fluid page-body-wrapper">
         <?php require_once "layout/sidebar.php" ?>
         <div class="main-panel">
            <div class="content-wrapper">
               <?php require_once "modules/dashboard_module.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>
      <script src="<?php echo URL_BASE_APP; ?>javascript/admin/dashboard.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script>
         var options = {
            series: [{
               name: "STOCK ABC",
               data: [31, 40, 28, 51, 42, 109, 100]
            }],
            chart: {
               type: 'area',
               height: 350,
               zoom: {
                  enabled: false
               }
            },
            dataLabels: {
               enabled: false
            },
            stroke: {
               curve: 'straight'
            },

            title: {
               text: 'Total de manifiestos generados',
               align: 'left'
            },
            subtitle: {
               text: 'Price Movements',
               align: 'left'
            },
            labels: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"],
            xaxis: {
               type: 'datetime',
            },
            yaxis: {
               opposite: true
            },
            legend: {
               horizontalAlign: 'left'
            }
         };

         var chart = new ApexCharts(document.querySelector("#chart"), options);
         chart.render();



               
        var options2 = {
          series: [{
          data: [21, 22, 10, 28, 16, 21, 13, 30]
        }],
          chart: {
          height: 350,
          type: 'bar',
          events: {
            click: function(chart, w, e) {
              // console.log(chart, w, e)
            }
          }
        },
        plotOptions: {
          bar: {
            columnWidth: '45%',
            distributed: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false
        },
        xaxis: {
          categories: [
            ['John', 'Doe'],
            ['Joe', 'Smith'],
            ['Jake', 'Williams'],
            'Amber',
            ['Peter', 'Brown'],
            ['Mary', 'Evans'],
            ['David', 'Wilson'],
            ['Lily', 'Roberts'], 
          ],
          labels: {
            style: {
              fontSize: '12px'
            }
          }
        }
        };

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();
      </script>
</body>

</html>