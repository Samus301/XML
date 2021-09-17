<?php 
$myXML = "clients.xml";
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

$query = $connection->prepare("SELECT * FROM clients");
$query->execute();
fwrite($fh, "<clients>". "\n");

while($row = $query->fetch()) {
    fwrite($fh, "<client id='" . $row ['idClient'] . "'>\n");
    fwrite($fh, "<firstname>" . $row ['FirstName'] . "</firstname>\n");
    fwrite($fh, "<lastname>" . $row ['LastName'] . "</lastname>\n");
    fwrite($fh, "</client>". "\n");
}

fwrite($fh, "</clients>"); 

fclose($fh);
echo "File " . $myXML . " written!";
?>