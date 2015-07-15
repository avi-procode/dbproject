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
						<th>Substance_Tested</th>
						<th>Ref_ID</th>
						<th>Ref_Type</th>
						<th>ATC_Code</th>
						<th>ATC_1_Anatomy</th>
						<th>ATC_2_ Therapeutic</th>
						<th>ATC_3_Pharmacological</th>
						<th>ATC_4_ Chemical Subgroup</th>
						<th>ATC_5_chemical substance</th>
						<th>DDD_oral_dose_(g)</th>
						<th>Test_Name</th>
						<th>Test_Type</th>
						<th>Method_Type</th>
						<th>Taxa</th>
						<th>Species</th>
						<th>Exposure_Duration</th>
						<th>Critical_effect</th>
						<th>Exposure_Time</th>
						<th>MWt</th>
						<th>MIC</th>
						<th>LC50</th>
						<th>LC50_mg/L</th>
						<th>EC50</th>
						<th>EC50_mg/L</th>
						<th>IC50</th>
						<th>IC50_mg/L</th>
						<th>NOEC</th>
						<th>NOEC_mg/L</th>
						<th>LOEC</th>
						<th>LOEC_mg/L</th>
						<th>NOEL</th>
						<th>LOEL</th>
						<th>Effects_Comment</th>
						<th>Provisional_PNEC_(ug/L)</th>
						<th>Acute_PNEC_(ug/L)</th>
						<th>Chronic_PNEC_(ug/L)</th>
						<th>Most_Sensitive_pecies</th>
						<th>PNEC_Comment</th>
						
					</tr>
				</thead>
<?php 
$sql="SELECT * FROM ecotox";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))
{
?>
				
				<tr>

						<td><?php echo $row['Substance']?></td>
						<td><?php echo $row['Substance_Type']?></td>
						<td><?php echo $row['Substance_Tested']?></td>
						<td><?php echo $row['Ref_ID']?></td>
						<td><?php echo $row['Ref_Type']?></td>
						<td><?php echo $row['ATC_Code']?></td>
						<td><?php echo $row['ATC_1_Anatomy']?></td>
						<td><?php echo $row['ATC_2_Therapeutic']?></td>
						<td><?php echo $row['ATC_3_Pharmacological']?></td>
						<td><?php echo $row['ATC_4_Chemical Subgroup']?></td>
						<td><?php echo $row['ATC_5_chemical substance']?></td>
						<td><?php echo $row['DDD_oral_dose_g']?></td>
						<td><?php echo $row['Test_Name']?></td>
						<td><?php echo $row['Test_Type']?></td>
						<td><?php echo $row['Method_Type']?></td>
						<td><?php echo $row['Taxa']?></td>
						<td><?php echo $row['Species']?></td>
						<td><?php echo $row['Exposure_Duration']?></td>
						<td><?php echo $row['Critical_effect']?></td>
						<td><?php echo $row['Exposure_Time']?></td>
						<td><?php echo $row['MWt']?></td>
						<td><?php echo $row['MIC']?></td>
						<td><?php echo $row['LC50']?></td>
						<td><?php echo $row['LC50_mgL']?></td>
						<td><?php echo $row['EC50']?></td>
						<td><?php echo $row['EC50_mgL']?></td>
						<td><?php echo $row['IC50']?></td>
						<td><?php echo $row['IC50_mgL']?></td>
						<td><?php echo $row['NOEC']?></td>
						<td><?php echo $row['NOEC_mgL']?></td>
						<td><?php echo $row['LOEC']?></td>
						<td><?php echo $row['LOEC_mgL']?></td>
						<td><?php echo $row['NOEL']?></td>
						<td><?php echo $row['LOEL']?></td>
						<td><?php echo $row['Effects_Comment']?></td>
						<td><?php echo $row['Provisional_PNEC_ugL']?></td>
						<td><?php echo $row['Acute_PNEC_ugL']?></td>
						<td><?php echo $row['Chronic_PNEC_ugL']?></td>
						<td><?php echo $row['Most_Sensitive_pecies']?></td>
						<td><?php echo $row['PNEC_Comment']?></td>
						
					</tr> 
					
<?php } ?>
				<tfoot>
					<tr>
						<th>Substance</th>
						<th>Substance_Type</th>
						<th>Substance_Tested</th>
						<th>Ref_ID</th>
						<th>Ref_Type</th>
						<th>ATC_Code</th>
						<th>ATC_1_Anatomy</th>
						<th>ATC_2_ Therapeutic</th>
						<th>ATC_3_Pharmacological</th>
						<th>ATC_4_ Chemical Subgroup</th>
						<th>ATC_5_chemical substance</th>
						<th>DDD_oral_dose_(g)</th>
						<th>Test_Name</th>
						<th>Test_Type</th>
						<th>Method_Type</th>
						<th>Taxa</th>
						<th>Species</th>
						<th>Exposure_Duration</th>
						<th>Critical_effect</th>
						<th>Exposure_Time</th>
						<th>MWt</th>
						<th>MIC</th>
						<th>LC50</th>
						<th>LC50_mg/L</th>
						<th>EC50</th>
						<th>EC50_mg/L</th>
						<th>IC50</th>
						<th>IC50_mg/L</th>
						<th>NOEC</th>
						<th>NOEC_mg/L</th>
						<th>LOEC</th>
						<th>LOEC_mg/L</th>
						<th>NOEL</th>
						<th>LOEL</th>
						<th>Effects_Comment</th>
						<th>Provisional_PNEC_(ug/L)</th>
						<th>Acute_PNEC_(ug/L)</th>
						<th>Chronic_PNEC_(ug/L)</th>
						<th>Most_Sensitive_pecies</th>
						<th>PNEC_Comment</th>
					</tr>
				</tfoot>
			</table>

			
	
</body>
</html>