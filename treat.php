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
						
						<th>Water_Treatment_Category</th>
						<th>Matrix_Treated</th>

						<th>Scale</th>
						<th>Treatment_Type</th>
						<th>Disinfection</th>
						<th>Specific_Removal</th>

						<th>Removal_Value</th>
						<th>Removal_Units</th>

						<th>InfEff_ngL</th>
						<th>HRT_hrs</th>
						<th>SRT_days</th>

						<th>Sample_Type</th>
						<th>Sampling_Mode</th>
						<th>Comments</th>

						<th>Data_Limitations</th>
						<th>Assay_Notes</th>
						<th>Reference</th>

						<th>Review_Reference</th>
						
						
						
					</tr>
				</thead>
<?php 
$sql="SELECT * FROM tretability";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))
{
?>
				
				<tr>

						<td><?php echo $row['Substance']?></td>
						<td><?php echo $row['Substance_Type']?></td>
						
						<td><?php echo $row['Water_Treatment_Category']?></td>
						<td><?php echo $row['Matrix_Treated']?></td>






						<td><?php echo $row['Scale']?></td>
						<td><?php echo $row['Treatment_Type']?></td>
						<td><?php echo $row['Disinfection']?></td>
						<td><?php echo $row['Specific_Removal']?></td>



						<td><?php echo $row['Removal_Value']?></td>
						<td><?php echo $row['Removal_Units']?></td>


						<td><?php echo $row['InfEff_ngL']?></td>
						<td><?php echo $row['HRT_hrs']?></td>
						<td><?php echo $row['SRT_days']?></td>




						<td><?php echo $row['Sample_Type']?></td>
						<td><?php echo $row['Sampling_Mode']?></td>
						<td><?php echo $row['Comments']?></td>


						<td><?php echo $row['Data_Limitations']?></td>
						<td><?php echo $row['Assay_Notes']?></td>
						<td><?php echo $row['Reference']?></td>

						
						<td><?php echo $row['Review_Reference']?></td>
						
						
					</tr> 
					
<?php } ?>
				<tfoot>
					<tr>
						<th>Substance</th>
						<th>Substance_Type</th>
						
						<th>Water_Treatment_Category</th>
						<th>Matrix_Treated</th>

						<th>Scale</th>
						<th>Treatment_Type</th>
						<th>Disinfection</th>
						<th>Specific_Removal</th>

						<th>Removal_Value</th>
						<th>Removal_Units</th>

						<th>InfEff_ngL</th>
						<th>HRT_hrs</th>
						<th>SRT_days</th>

						<th>Sample_Type</th>
						<th>Sampling_Mode</th>
						<th>Comments</th>

						<th>Data_Limitations</th>
						<th>Assay_Notes</th>
						<th>Reference</th>

						<th>Review_Reference</th>
					</tr>
				</tfoot>
			</table>

			
	
</body>
</html>