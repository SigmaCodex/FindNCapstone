<!DOCTYPE html>
<html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<div class="container" style="margin-top: 100px">
<center>
  <h1>Reports</h1>
  <select name="" id="report_select_date">
    <option value="0">Jan</option>
    <option value="1">Feb</option>
    <option value="2">Mar</option>
    <option value="3">Apr</option>
    <option value="4">May</option>
    <option value="5">Jun</option>
    <option value="6">July</option>
    <option value="7">Aug</option>
    <option value="8">Sep</option>
    <option value="9">Oct</option>
    <option value="10">Nov</option>
    <option value="11">Dec</option>
  </select>
  <h3><?php echo date("M");?> <?php echo date("Y");?> </h3>
  <h5>TotalSale: <p id="total_sales">0</p> </h5>
  <h5>TotalProfit:<p id="total_profit">0</p> </h5>
</center>


<?php 
  // line graph logic
  $monthSales = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));
  //line Graph
  foreach($sales as $data){
     
     $datamonth = date("M", strtotime($data->date_issued));//check the month
    //  echo date("Y", strtotime($data->date_issued));
     //echo date("Y");//current year;
    //filter the corresponding month
    for($x=0; $x<12; $x++){
      if($datamonth == $monthSales[$x][0]) {
        $monthSales[$x][1]= $monthSales[$x][1] + $data->service_fee;
      }
    } 

  }
?>


<div class="row">
  <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
  <?php for($i=0;$i<12;$i++){
      echo $monthSales[$i][0]."- ₱".$monthSales[$i][1]."<br>";
  }
?>
</div>
<canvas id="profitchart" style="width:100%;max-width:600px"></canvas>
<!-- end of line graph -->



<div id="donutchart" style="width: 900px; height: 500px;"></div>




</div>
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


    <script>
      $(document).on("change", "#report_select_date", function(){
        var date_selected = $(this).val();
   
        var varName = [<?php echo $monthSales[0][1]?>,<?php echo $monthSales[1][1]?>,<?php echo $monthSales[2][1]?>,<?php echo $monthSales[3][1]?>,<?php echo $monthSales[4][1]?>,<?php echo $monthSales[5][1]?>,<?php echo $monthSales[6][1]?>,<?php echo $monthSales[7][1]?>,<?php echo $monthSales[8][1]?>,<?php echo $monthSales[9][1]?>,<?php echo $monthSales[10][1]?>,<?php echo $monthSales[11][1]?>];
        $("#total_sales").text("₱"+varName[date_selected]);
        //profit
        var profit = varName[date_selected] * 0.3;
        $("#total_profit").text("₱"+profit);
        // alert(varName[date_selected]);
	    });
     
    </script>
</html>



