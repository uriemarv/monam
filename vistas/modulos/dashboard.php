<?php


//$ingreso = new Ingreso();
//$ingreso -> ingresoController();

			if(isset($_SESSION["usuario"])) {

        //header("location:index.php?action=inicio");
        //exit;
			}
      
      
			
        ?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        /*
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);
        */
        
         var jsonData = $.ajax({
          url: "vistas/modulos/ajx/getData.php,
          dataType: "json",
          method: "POST",
          async: false
          }).responseText;
          
         var data = new google.visualization.DataTable(jsonData);
        
        
        
        /*
           var fin=$("#inputFin").val();
         var inicio=$("#inputInicio").val();
        //  var empresa=$("#inputEmpresa").val();
      var jsonData = $.ajax({
          url: "vistas/modulos/ajx/getData.php?inicio=" + inicio + "&fin=" + fin,
          dataType: "json",
          method: "POST",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      
      var options = {
          title : 'Linea Q',
          vAxis: {title: 'Valor'},
          hAxis: {title: 'Linea Presupuesto'},
          seriesType: 'bars',
          is3D: true,
          series: {3: {type: 'line'}}
        };
        
        
      chart.draw(data, options);
        */

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
</script>

<h2>DASHBOARD - Monitoreo Ambiental (MONAM)</h2> 
<div id="curve_chart" style="width: 900px; height: 500px"></div>