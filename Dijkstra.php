<html>
 <head>
  <title>Kürzester Weg nach Dijkstra</title>
 </head>
 <body>
	<h2>Kürzester Weg nach Dijkstra</h2>
	<form action="Dijkstra.php" method="post">
		<h4>Startpunkt:</h4>
		lat:<input type="text" name="slat">
		long:<input type="text" name="slong"><br><br>
		
		<h4>Zielpunkt:</h4>
		lat:<input type="text" name="zlat">
		long:<input type="text" name="zlong"><br><br>
		
		<input type="submit" value="Submit">
	</form> 
	<?php
	//if(isset($_POST['submit']))
	//{
		$xslDoc = new DOMDocument();
		$xslDoc->load("Dijkstra.xsl");

		$xmlDoc = new DOMDocument();
		$xmlDoc->load("myXMLFile.xml");

		$proc = new XSLTProcessor();
		$proc->importStylesheet($xslDoc);
		
		$proc->setParameter('', 'slat', $_POST['slat']);
		$proc->setParameter('', 'slong', $_POST['slong']);
		$proc->setParameter('', 'zlat', $_POST['zlat']);
		$proc->setParameter('', 'zlong', $_POST['zlong']);
		
		echo $proc->transformToXML($xmlDoc);
	//}
	?>
 </body>
</html>