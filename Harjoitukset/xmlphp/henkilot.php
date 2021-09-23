<?php

if(isset($_POST["nimi"], $_POST["lahiosoite"], $_POST["postiosoite"], $_POST["postinumero"]))
{
$name = $_POST["nimi"];
$osoite = $_POST["lahiosoite"];
$postiosoite = $_POST["postiosoite"];
$postinumero = $_POST["postinumero"];


$myXML = "yhteystiedot.xml";
$fh = fopen($myXML, 'w') or die("can't open file");
fwrite($fh, "<?xml version='2.0' encoding='UTF-8'?>\n");

    fwrite($fh, "<tiedot>". "\n");
        fwrite($fh, "<nimi>" . $name . "</nimi>\n");
        fwrite($fh, "<lahiosoite>" . $osoite. "</lahiosoite>\n");
        fwrite($fh, "<postiosoite>" . $postiosoite. "</postiosoite>\n");
        fwrite($fh, "<postinumero>" . $postinumero . "</postinumero>\n");
    fwrite($fh, "</tiedot>". "\n");   
    
    fclose($fh);
    echo "File " . $myXML . " written!";
}
?>

<form name="tiedot" action="" method="post">
<label for="nimi">Nimi</label><br />
<input type="text" name="nimi" value="<?=$name?>"><br />

<label for="lahiosoite">Lähiosoite</label><br />
<input type="text" name="lahiosoite" value="<?=$osoite?>"><br />

<label for="postiosoite">Postiosoite</label><br />
<input type="text" name="postiosoite" value="<?=$postiosoite?>" ><br />

<label for="postinumero">Postinumero</label><br />
<input type="text" name="postinumero" value="<?=$postinumero?>"><br />

<input type='submit'value='Submit'/>
</form>

