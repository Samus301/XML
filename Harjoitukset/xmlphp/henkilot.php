<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("yhteystiedot.xml");
$x = $xmlDoc->documentElement;
// haetaan elementin 'nimi' tiedot:
$nimet = $x->getElementsByTagName( "nimi" );
$nimi = $nimet->item(0)->nodeValue;

$osoitteet = $x->getElementsByTagName( "lahiosoite" );
$osoite = $osoitteet->item(0)->nodeValue;

$posoitteet = $x->getElementsByTagName( "postiosoite" );
$posoite = $posoitteet->item(0)->nodeValue;

$pnumerot = $x->getElementsByTagName( "postinumero" );
$pnumero = $pnumerot->item(0)->nodeValue;



?>

<form name="tiedot" action="" method="post">
<label for "nimi">Nimi</label><br />
<input type='text' name='' /><br />

<input type='text' name='' /><br />
<input type='text' name='' /><br />
<input type='text' name='' /><br />
<input type='submit'value='Submit'/>
</form>



<!-- echo "Nimi: <input type='text'name='$nimi' /><br />";
echo "Lahiosoite: <input type='text'name='$osoite' /><br />";
echo "Postiosoite: <input type='text'name='$posoite' /><br />";
echo "Postinumero: <input type='text'name='$pnumero' /><br />";

echo "<input type='submit'name='Submit'/>" -->



?>