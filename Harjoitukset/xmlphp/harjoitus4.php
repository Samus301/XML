<?php 
$myXML = "news.rss";
$fh = fopen($myXML, 'w') or die("can't open file");
fwrite($fh, "<?xml version='1.0' encoding='UTF-8'?>\n");
/*fwrite($fh, "<?xml-stylesheet type='text/xsl' href='clients.xsl'?>\n");*/

try {
 $connection = new PDO("mysql:host=samarium;dbname=19sammak", "19sammak", "salasana");
} catch (PDOException $e) {
 die("ERR: " . $e->getMessage());
}
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->exec("SET NAMES utf8");

$query = $connection->prepare("SELECT * FROM news");
$query->execute();


while($row = $query->fetch()) {
    fwrite($fh, "<rss version='2.0'>". "\n");
    fwrite($fh, "<channel>". "\n");
    fwrite($fh, "<news id='" . $row ['idNews'] . "'>\n");
    fwrite($fh, "<title>" . $row ['Title'] . "</title>\n");
    fwrite($fh, "<description>" . $row ['Description'] . "</description>\n");
    fwrite($fh, "<link>" . $row ['Link'] . "</link>\n");
    fwrite($fh, "<published>" . $row ['Published'] . "</published>\n");
    fwrite($fh, "</news>". "\n");
    fwrite($fh, "</channel>". "\n");
    fwrite($fh, "</rss>". "\n");
    
}



fclose($fh);
echo "File " . $myXML . " written!";
?>