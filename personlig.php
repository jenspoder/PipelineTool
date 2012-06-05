<?
/** 

Modellen for denne side er følgende:

Standard
- Inkluder standardvariabler
- Inkluder regnefunktioner   // måske
- Inkluder renderfunktioner  // måske
- Eventuelt hent pipeline ejer fra URL.

Hent data fra database

- connect
- henter tenders where pipeline-ejer er lig det der er valgt gemmer i array - her efter LOOP der
	- henter nyeste tender-revision
	- henter data fra kunde-id'er
- Render tabellen (det interessante bliver hvordan jeg får pipeline til at være specifik på den relevante afdeling // trækkes fra et array i appvars indtil videre.

**/

require_once("../PipelineTool/appvars.php");


$pipelineejer = $_POST['pipelineejer'];
$pipelineejer = htmlspecialchars($pipelineejer);
$pipelineejer = strtoupper($pipelineejer);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 80px; /* 60px to make the container go all the way to the bottom of the topbar */
        padding-bottom: 40 px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <meta charset="utf-8">
    <title><? echo $pipelineejer; ?>'s pipeline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <body>

  	<? require_once('../PipelineTool/navigation.php'); ?>

    <div class="container">
		
		<div id="table-area">
			<h1><? echo $pipelineejer; ?>'s pipeline</h1>
			<br />
						
<!-- udkommaterer table-start			
				<table class="table">
				<tr>
					<th>Kunde</th>
					<th>Projekt</th>
					<th>Værdi</th>
					<th>Analyse</th>
					<th>Sandsynlighed</th>
					<th>Forventet analyse</th>
					<th>Timing</th>
					<th>Sidste kontakt</th>
					<th>Solgt / Tabt</th>				
				</tr>
-->
				<!-- Henter tenders fra databasen --!>
				
				<?
				
				// få forbindelse til MySQL Server
				$dbc = mysqli_connect($db_host, $db_user, $db_pass, $db) or die ('error connecting to mysql server');		
				
				// kode fra et forsøg på at bruge set names til at slippe af med utf-8 problemer
				//$set_names = mysqli_query("SET NAMES 'utf8'") or die ('no set names');
				//$set_character_set = mysqli_query("SET CHARACTER_SET utf8") or die ('no set chars');
				
				//detector der viser charset - to be deleted
				
				/**
				$charset = mysqli_client_encoding($dbc);
				echo "The current character set is: $charset\n"; **/
				
				// henter tenders fra tenders
				
				$get_tenders_query = "SELECT kundeid, projekt, kd, tag FROM tender WHERE pipelineejer = '$pipelineejer' AND status = '1'";

				//kør sql
				$result_tenders = mysqli_query($dbc, $get_tenders_query) or die("Kunne ikke hente tenders");

				while ($row = mysqli_fetch_array($result_tenders)){
				
					$kundeid = $row[kundeid];
					$projekt = $row[projekt];
					$projekt = utf8_encode($projekt);
					$kd = $row[kd];
					$tag = $row[tag];
					$tag = utf8_encode($tag);
					
					// Læs kunde-navn fra kunde-id
					
					
					$get_kundedata_query = "SELECT kundenavn, kundenummer, highriselink FROM kunder WHERE id = '$kundeid'";
					
					//kør sql
					$result_kunder = mysqli_query($dbc, $get_kundedata_query) or die("Kunne ikke hente kundedata");
					
					while ($row = mysqli_fetch_array($result_kunder)){
						
						$kundenavn = $row[kundenavn];
						$kundenavn = utf8_encode($kundenavn);
						$kundenummer = $row[kundenummer];
						$highriselink = $row[highriselink];						
						}
					
					echo "<h3>" . $projekt . "</h3><ul><li>Kundeid: " . $kundeid . "</li><li>Kundenavn: " . $kundenavn . "</li><li>Tag: " . $tag . "</li><li>Kontaktdirektør: " . $kd . "</li></ul>";
				}

				
				?>
				
<!-- udkommatterer table-rows
				<tr>
					<td>3F <a href="https://peytzco.highrisehq.com/companies/33185520-3f"><i class="icon-share"></i></a></td>
					<td>Mobil spørgeskema</td>
					<td><a data-toggle="modal" href="#retValue">100000</a></td>					
					<td>50000</td>
					<td>55%</td>
					<td>27000</td>
					<td>Q3</td>
					<td>2012-06-03</td>
					<td>X / V</td>
				</tr>
			</table>
-->
		</div>		
	 
	 <p><a class="btn" href="#">Tilføj nyt projekt</a></p>
	 
	 
	<!-- Here be modals -->
	
<div class="modal hide" id="retValue">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	<h3>Ret værdi</h3>
	</div>
	<div class="modal-body">
	<p>Her rettes der så i en embedded form</p>
	</div>
	<div class="modal-footer">
	<a href="#" class="btn" data-dismiss="modal">Close</a>
	<a href="#" class="btn btn-primary">Save changes</a>
	</div>
</div>
		
	</div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    
    <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
