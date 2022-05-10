<?php
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator('zen');
$pdf->setAuthor('FindN ');
$pdf->setTitle('Overall Reports');

// set default header data
$pdf->setHeaderData('PDF_HEADER_LOGO', PDF_HEADER_LOGO_WIDTH, 'FindN Overall Reports');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->setFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();


$pdf->setFont('helvetica', '', 8);

// -----------------------------------------------------------------------------

$tbl = '<h1>Computer Bookings</h1>';
$tbl .= '
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Name</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>';
	foreach ($totalSalesAndBooks as $tS) {
		$tbl .= '<tr>
					<td>Total succesful books</td>
					<td>'. $tS->totalBooks. '</td>
				 </tr>';
	}
	foreach ($totalGcashBooks as $gcash) {
		$tbl .='<tr>
					<td>Total GCash Books</td>
					<td>'.  $gcash->GcashBooks  .'</td>
				</tr>';
	}
	foreach($totalOTCBooks as $OTC) {
		$tbl .='<tr>
					<td>Total Over the counter Books</td>
					<td>'.  $OTC->OTCbooks  .'</td>
				</tr>';
	}
$tbl .='
	</tbody>
</table>';

//--------------------------------------------------------

$monthFee = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));
foreach ($monthly as $month) {
	$curmonth = date("M", strtotime($month->date_issued));
	for($x=0; $x<12; $x++){	
		if($curmonth == $monthFee[$x][0]) {
		  $monthFee[$x][1]= $monthFee[$x][1] + $month->service_fee;
		} 
	}
}
$tbl .= '<h1>Monthly Booking sales</h1>';
$tbl .= '
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Month</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>';
	for($y=0; $y<12; $y++){
		if($monthFee[$y][1]!=0) {
		$tbl .= '<tr>
					<td>'.  $monthFee[$y][0] .'</td>
					<td>P'. $monthFee[$y][1] . '</td>
				 </tr>';
		}
	}
$tbl .='
	</tbody>
</table>';


//---------------------------------------

$monthSales = array(array("Jan",0,0,0), array("Feb",0,0,0), array("Mar",0,0,0), array("Apr",0,0,0), array("May",0,0,0), array("Jun",0,0,0), array("July",0,0,0), array("Aug",0,0,0), array("Sep",0,0,0), array("Oct",0,0,0), array("Nov",0,0,0), array("Dec",0,0,0));
        foreach ($MonthlyPT as $MPT) {
          $curmonth = date("M", strtotime($MPT->date_issued));
            for($x=0; $x<12; $x++){
              if($curmonth == $monthSales[$x][0] && $MPT->payment_type == "overthecounter") {
                $monthSales[$x][1] = $monthSales[$x][1] + $MPT->service_fee;
                $monthSales[$x][2] = $monthSales[$x][2] + 1;
              }
              if($curmonth == $monthSales[$x][0] && $MPT->payment_type == "gcash") {
                $monthSales[$x][1] = $monthSales[$x][1] + $MPT->service_fee;
                $monthSales[$x][3] = $monthSales[$x][3] + 1;
              } 
            } 
        }
$tbl .= '<h1>Payment Type Books</h1>';
$tbl .= '
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Month</th>
			<th>Over the Counter</th>
			<th>Gcash</th>
		</tr>
	</thead>
	<tbody>';
	for($y=0; $y<12; $y++){
		if($monthSales[$y][1]!=0) {
		$tbl .= '<tr>
					<td>'. $monthSales[$y][0] .'</td>
					<td>'. $monthSales[$y][2] . '</td>
					<td>'. $monthSales[$y][3] .'</td>
				 </tr>';
		}
	}
$tbl .='
	</tbody>
</table>';

//---------------------

$PaymentTypeSales = array(0,0);
        foreach ($MonthlyPT as $MPT) {
          $curmonth = date("M", strtotime($MPT->date_issued));
              if($MPT->payment_type == "overthecounter") {
                $totalAmount = $MPT->service_fee * $MPT->num_ticket;
                $PaymentTypeSales[0] = $PaymentTypeSales[0] + $totalAmount;
              }
              if($MPT->payment_type == "gcash") {
                $totalAmount = $MPT->service_fee * $MPT->num_ticket;
                $PaymentTypeSales[1] = $PaymentTypeSales[1] + $totalAmount;
              } 
        }

$tbl .= '<h1>Payment Type Sales</h1>';
$tbl .= '
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Over the Counter</th>
			<th>Gcash</th>
		</tr>
	</thead>
	<tbody>
				<tr>
					<td>P'. $PaymentTypeSales[0] .'</td>
					<td>P'. $PaymentTypeSales[1] . '</td>
				 </tr>';
		
$tbl .='
	</tbody>
</table>';

//-----------------------------------------

foreach ($totalSalesAndBooks as $tS) {
$tbl .= '<h1>Total Sales</h1>';
$tbl .= '
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Sales</th>
		</tr>
	</thead>
	<tbody>
				<tr>
					<td>P'. $tS->totalSales .'</td>
				 </tr>';
}
$tbl .='
	</tbody>
</table>';

//-----------------------------------------
$tbl .= '<h1>Computer shop sales</h1>';
$tbl .= '
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Shop Name</th>
			<th>OvertheCounter</th>
			<th>GCash</th>
			<th>Total Sale</th>
		</tr>
	</thead>';
foreach ($salesShop as $sS) {


	$tbl .= '	<tbody>
					<tr>
						<td>'. $sS->shop_name .'</td>
						<td>'. $sS->overthecounter .'</td>
						<td>'. $sS->gcash .'</td>
						<td>'. $sS->sumofservicefee .'</td>
					 </tr>';
	}
	$tbl .='
		</tbody>
	</table>';
	
	//-----------------------------------------

$pdf->writeHTML($tbl, true, false, false, false, '');





//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
