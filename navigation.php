<?

/**

Funktion der renderer navigationen baseret på hvilken side vi befinder os på.

Forudsætter at følgende variabel er hentet.

$side = $_SERVER['SCRIPT_NAME'];

Skriver den grundlæggende HTML fra toppen og sætter så class="active" på den relevante list.

**/

// Sætter lige lidt variabler

$side = $_SERVER['SCRIPT_NAME']; // det bibliotek vi befinder os i på denne side

$base_url = "/PipelineTool/";

$index = $base_url . "index.php";
$afdeling = $base_url . "afdeling.php";
$personlig = $base_url . "personlig.php";


?>
<!-- første del af header som almindelig HTML -->

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
              <li <? if ($side == $index) echo 'class="active"'?>><a href="index.php">Peytz overblik</a></li>
            </ul>
            <ul class="nav">
              <li class="divider-vertical"></li>
              <li class="dropdown <? if ($side == $afdeling) echo 'active'?>">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Afdeling pipeline <b class="caret"></b></a>
              		<ul class="dropdown-menu">
              			<li><a href="afdeling.php?afd=1">Analyse</a></li>
              			<li><a href="afdeling.php?afd=2">Design</a></li>              			
              			<li><a href="afdeling.php?afd=3">Nyhedsbreve</a></li>
              			<li><a href="afdeling.php?afd=4">Udvikling</a></li>
              		</ul>
              </li>
              <li class="divider-vertical"></li>
              <li><p class="navbar-text<? if ($side == $personlig) echo '-active'?>">Din pipeline:</p></li>
            </ul>
            <form class="navbar-search pull-left" method="post" action="personlig.php">
            	<input name="pipelineejer" type="text" class="search-query" placeholder="<? if (isset($pipelineejer)) { echo $pipelineejer;} else {echo "Indtast initialer her";} ?>">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
