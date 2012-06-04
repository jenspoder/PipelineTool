<?

/** 

Modellen for denne side er følgende:

Standard
- Inkluder standardvariabler
- Inkluder regnefunktioner
- Inkluder renderfunktioner
- Hent pipeline-ejer fra URL

Hent data fra database

- connect
- henter tenders where pipeline-ejer er lig det der er valgt gemmer i array - her efter LOOP der
	- henter nyeste tender-revision
	- henter data fra kunde-id'er
- Render tabellen (det interessante bliver hvordan jeg får pipeline til at være specfikt på den relevante afdeling - løses i pulldown

**/

$pipelineejer = $_POST['pipelineejer'];
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

    <meta charset="UTF-8">
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
				<tr>
					<td>3F</td>
					<td>Mobil spørgeskema</td>
					<td>100000</td>					
					<td>50000</td>
					<td>55%</td>
					<td>27000</td>
					<td>Q3</td>
					<td>2012-06-03</td>
					<td>X / V</td>
				</tr>
			</table>
		</div>		
	 
	 <p><a class="btn" href="#">Tilføj nyt projekt</a></p>
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
