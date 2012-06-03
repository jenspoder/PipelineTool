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

$pipelineejer = 'PJ';

?>

<html>
	
	<head>
		<meta charset="ISO-8859-1">
		<title>Personlig pipeline for <? echo "$pipelineejer"; ?></title>			
	</head>
	
	
	<body>
		
		<!-- Her kommer navigation til at være -->

		<div id="navigation">
			<p>Here be navigation</p>
			<hr>
		</div>

		<div id="table-area">
			<h1>JP's pipeline</h1>
			
			<table>
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
	 
	 <p><a href="#">Tilføj nyt projekt</a></p>
		
	</body>
</html>
