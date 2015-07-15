<?php include("db.php"); ?>
<?php include("header.php"); ?>
<?php include_once "leftmenu.php"; ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
	
	<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>

	
	<script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
	$('#example').dataTable( {
		
	} );
} );


	</script>
</head>

<body class="dt-example">
	<div class="container" style="width:100%;">
		
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						
						<th>Substance</th>
						<th>Substance_Type</th>
						
						<th>ATC_Code</th>
						<th>Ref_Type</th>

						<th>Therapeutic_Type</th>
						<th>Region</th>
						<th>Country</th>
						<th>Matrix</th>

						<th>Watershed</th>
						<th>Detection_Limit</th>

						<th>MEC_low_ngL</th>
						<th>MEC_high_ngL</th>
						<th>MEC_average_ngL</th>

						<th>Median_conc_ngL</th>
						<th>Max_conc_ngL</th>
						<th>MaxMed_Ratio</th>

						<th>Num_Samples</th>
						<th>Num_Detections</th>
						<th>Num_No_Detections</th>

						<th>Detection_freq</th>
						<th>Analytical_Method</th>

						<th>Reference</th>
						<th>Comments</th>
						
						
					</tr>
				</thead>
<?php 
$sql="SELECT * FROM occurence";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))
{
?>
				
				<tr>

						<td><?php echo $row['Substance']?></td>
						<td><?php echo $row['Substance_Type']?></td>
						
						<td><?php echo $row['ATC_Code']?></td>
						<td><?php echo $row['Ref_Type']?></td>






						<td><?php echo $row['Therapeutic_Type']?></td>
						<td><?php echo $row['Region']?></td>
						<td><?php echo $row['Country']?></td>
						<td><?php echo $row['Matrix']?></td>
						<td><?php echo $row['Watershed']?></td>
						<td><?php echo $row['Detection_Limit']?></td>


						<td><?php echo $row['MEC_low_ngL']?></td>
						<td><?php echo $row['MEC_high_ngL']?></td>
						<td><?php echo $row['MEC_average_ngL']?></td>


						<td><?php echo $row['Median_conc_ngL']?></td>
						<td><?php echo $row['Max_conc_ngL']?></td>
						<td><?php echo $row['MaxMed_Ratio']?></td>


						<td><?php echo $row['Num_Samples']?></td>
						<td><?php echo $row['Num_Detections']?></td>
						<td><?php echo $row['Num_No_Detections']?></td>

						
						<td><?php echo $row['Detection_freq']?></td>
						<td><?php echo $row['Analytical_Method']?></td>
						<td><?php echo $row['Reference']?></td>
						<td><?php echo $row['Comments']?></td>
						
						
					</tr> 
					
<?php } ?>
				<tfoot>
					<tr>
						<th>Substance</th>
						<th>Substance_Type</th>
						<th>Substance_Tested</th>
						<th>ATC_Code</th>
						<th>Ref_Type</th>
						<th>Therapeutic_Type</th>
						<th>Region</th>
						<th>Country</th>
						<th>Matrix</th>
						<th>Watershed</th>
						<th>Detection_Limit</th>
						<th>MEC_low_ngL</th>
						<th>MEC_high_ngL</th>
						<th>MEC_average_ngL</th>
						<th>Median_conc_ngL</th>
						<th>Max_conc_ngL</th>
						<th>MaxMed_Ratio</th>
						<th>Num_Samples</th>
						<th>Num_Detections</th>
						<th>Num_No_Detections</th>
						<th>Detection_freq</th>
						<th>Analytical_Method</th>
						<th>Reference</th>
						<th>Comments</th>
					</tr>
				</tfoot>
			</table>

			
	
</body>
</html>