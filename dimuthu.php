<html>
<style>
body {
    background-image: url("image.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
}
</style>
<body>
<h1> Information Finder </h1>
<br/>
<form action="dimuthu.php" method="get" align="middle">

SELECT TABLE  :-  <select name="table">
<option value="company" selected>Company</option>
<option value="personal">Personal</option>
</select>
<br/>
<br/>


SELECT A SEARCH CRITERIA   :- 
 <select name="criteria" id="criteria">
<option value="tin_no" selected>TIN</option>
<option value="reference_no">REFERENCE NO</option>
<option value="company_name">COMPANY NAME</option>
<option value="company_address">COMPANY ADDRESS</option>
<option value="person_name">PERSON NAME</option>
<option value="address">ADDRESS</option>
<option value="email">EMAIL</option>
<option value="director">DIRECTOR</option>
<option value="nic">NIC</option>
<option value="mobile_no">MOBILE NUMBER</option>
<option value="office_no">OFFICE NUMBER</option>

</select>
<br/>
<br/>

ENTER VALUE   : 
<input type="text" name="tin" placeholder="Enter" method="get" id="tin"> <br/><br/>
<input type="submit" name="submit" value="Get Selected Values" />

<br>
<br/>
</form>

</body>
</html>


<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'info_finder'; // Database Name
$lock=0;

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}


if (isset($_GET['tin']) && $_GET["tin"] != "null"){
	
$sql = "SELECT * FROM ".$_GET["table"]." where ".$_GET["criteria"]."='".$_GET["tin"]."'";
echo ".      SEARCH RESULTS FOR   ".$_GET["criteria"]."   =   ".$_GET["tin"].   "   IN   ".$_GET["table"] ." VIEW.";


	

		
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
$lock=1;
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 570px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>







	
	<table class="data-table">
		<caption class="title">VIEW</caption>
		<thead>
			<tr>
				<th>REFERENCE Number</th>
				<th>TIN</th>
				<th>NAME</th>
				<th>ADDRESS</th>
				
				<th>EMAIL</th>
				<th>DIRECTOR</th>
				<th>NIC</th>
				<th>MOBILE NUMBER</th>
				<th>OFFICE NUMBER</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		if($lock==1){
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			
			if($_GET["table"]=="company"){
			echo '<tr>
					
					<td>'.$row['reference_no'].'</td>
					<td>'.$row['tin_no'].'</td>
					<td>'.$row['company_name'].'</td>
					<td>'.$row['company_address'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['director'].'</td>
					<td>'.$row['nic'].'</td>
					<td>'.$row['mobile_no'].'</td>
					<td>'.$row['office_no'].'</td>
					
					
				
				</tr>';
			}
			else{
				echo '<tr>
					
					<td>'.$row['reference_no'].'</td>
					<td>'.$row['tin_no'].'</td>
					<td>'.$row['person_name'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['email'].'</td>
					<td>'."NONE".'</td>
					<td>'.$row['nic'].'</td>
					<td>'.$row['mobile_no'].'</td>
					<td>'.$row['office_no'].'</td>
					
					
				
				</tr>';
			}
			
			$no++;
		}
		}?>
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
</body>
</html>