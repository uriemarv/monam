
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        /*
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Bello', 'Socorro'],
          ['2004',  20,      24],
          ['2005',  22,      25],
          ['2006',  23,      26],
          ['2007',  21,      25]
        ]);
        */
        
         var jsonData = $.ajax({
          url: "getData.php,
          dataType: "json",
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
          title: 'Temperatura promedio',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
</script>

<h2 align="center">Temperatura media anual de referencia Periodo 1976-2005</h2> 
<div align="center">
    <img src="clima_referencia.jpg">
</div><br>
<h2 align="center">Diferencia de Temperatura media anual 2011-2040 con respecto al Período 1976-2005</h2>
<div align="center">
    <img src="dif_temp_media_anual_2011-2040.jpg">
</div><br>
<h2 align="center">Diferencia de Temperatura media anual 2041-2070 con respecto al Período 1976-2005</h2>
<div align="center">
    <img src="dif_temp_media_anual_2041-2070.jpg">
</div><br>
<h2 align="center">Diferencia de Temperatura media anual 2071-2100 con respecto al Período 1976-2005</h2>
<div align="center">
    <img src="dif_temp_media_anual_2071-2100.jpg">
</div>
<small class="text-muted">Fuente: IDEAM</small>
<!--<div id="curve_chart" style="width: 900px; height: 500px"></div>-->