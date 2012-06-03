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

    <meta charset="ISO-8859-1">
    <title>Peytz & Co pipeline tool</title>
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

    <!-- Chart data -->
    
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['gauge']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Analyse', 348],
        ]);

        var options = {
          width: 200, height: 200,
          redFrom: 0, redTo: 400,
          yellowFrom: 401, yellowTo: 539,
          greenFrom: 540, greenTo: 600,
          max: 600
          
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_analyse'));
        chart.draw(data, options);
      }     
    </script>

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Pipeline Tool</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Peytz overblik</a></li>
            </ul>
            <ul class="nav">
              <li class="divider-vertical"></li>
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Afdeling pipeline <b class="caret"></b></a>
              		<ul class="dropdown-menu">
              			<li><a href="afdeling.php?afd=1">Analyse</a></li>
              			<li><a href="afdeling.php?afd=2">Design</a></li>              			
              			<li><a href="afdeling.php?afd=3">Nyhedsbreve</a></li>
              			<li><a href="afdeling.php?afd=4">Udvikling</a></li>
              		</ul>
              </li>
              <li class="divider-vertical"></li>
              <li><p class="navbar-text">Din pipeline:</p></li>
            </ul>
            <form class="navbar-search pull-left" method="post" action="personlig.php">
            	<input name="pipelineejer" type="text" class="search-query" placeholder="indtast initialer">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

		<div class="container">
		      <h1>Pipeline per afdeling <small>indev�rende kvartal</small></h1>
		      <hr>
		      
		      
			      <div id="pipeline-gauges" class="row">
			      		<div class="span3">
				      		<h3>Analyse:</h3>
				      		<div id='chart_analyse'></div>
				      		<ul>
				      			<li>M�l: 540</li>
				      		</ul>
			      		</div> <!-- /span3 -->
			      		<div class="span3">
			      			<h3>Design:</h3>
			      			<div id='chart_design'></div>
			      		</div> <!-- /span3 -->
			      		<div class="span3">
			      			<h3>Nyhedsbreve:</h3>
			      			<div id='chart_nyhedsbreve'></div>
			      		</div> <!-- /span3 -->
			      		<div class="span3">
			      			<h3>Udvikling</h3>
			      			<div id="chart_udvikling"></div>
			      		</div> <!-- /span3 -->				      	
				  </div>  <!-- afslut row -->
				  
				  <hr>
			      
				  <h1>Samlet overblik <small>periodiseret</small></h1>
			      
			      <div id="overblik-periodiseret">
			
				      Her kommer google charts med overblik periodiseret	      	      
				      
			      </div>
			 <hr>
			 <div class="well">Her kommer der noget bundv�rk</div>
			 
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
