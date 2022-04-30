<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>



<?php 
  // line graph logic
  $monthSales = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));
  //line Graph
  foreach($sales as $data){
     
     $datamonth = date("M", strtotime($data->date_issued));//check the month
    //  echo date("Y", strtotime($data->date_issued));
     //echo date("Y");//current date;
    //filter the corresponding month
    for($x=0; $x<12; $x++){
      if($datamonth == $monthSales[$x][0]) {
        $monthSales[$x][1]= $monthSales[$x][1] + $data->service_fee;
      }
    } 

  }
?>

<?php for($i=0;$i<12;$i++){
      echo $monthSales[$i][0]."-".$monthSales[$i][1]."<br>";
}

?>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<!-- end of line graph -->



<div id="donutchart" style="width: 900px; height: 500px;"></div>


</body>


<!-- //line chart -->
<script>
var xValues = ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'];
 var yValues = [<?php echo $monthSales[0][1]?>,<?php echo $monthSales[1][1]?>,<?php echo $monthSales[2][1]?>,<?php echo $monthSales[3][1]?>,<?php echo $monthSales[4][1]?>,<?php echo $monthSales[5][1]?>,<?php echo $monthSales[6][1]?>,<?php echo $monthSales[7][1]?>,<?php echo $monthSales[8][1]?>,<?php echo $monthSales[9][1]?>,<?php echo $monthSales[10][1]?>,<?php echo $monthSales[11][1]?>];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "#fc4a1a",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>

<!-- pie chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Count Of All Bookings'],
          ['Successful Booking',     <?php foreach($countSuccessBooking as $data2){ echo $data2->count_success;}?>],
          ['Failed Booking',    <?php foreach($countFailBooking as $data3){ echo $data3->count_fail;}?>]
        ]);

        var options = {
          title: 'Successful - Failed Booking Ratio',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</html>



