<?php
/**
 * Created by PhpStorm.
 * User: om3rcitak
 */
?>
<meta charset="utf-8"/>
Emlak dataları -> <a href="emlak.txt" target="_blank">emlak.txt</a>
En değerli arsanın kaç metrekare olduğunu bulmam lazım :(
<hr/>
<form action="" method="post">
    Flag = <input type="text" name="flag"/>
    <input type="submit"/>
</form>
<?php

$oku = file_get_contents("emlak.txt");
$oku = explode("\n", $oku);

$buyuk = 0;
$buyukm = 0;
foreach ($oku as $k => $v) {
    $parca = explode(" ", $v);
    $fiyat = explode(".", $parca[2]);
    // echo $parca[0]."-".$parca[1]."-".$fiyat[0]."\n";
    $carp = ($parca[0] * $parca[1] * $fiyat[0]);
    if ($carp > $buyuk) {
        $buyuk = $carp;
        $buyukm = $parca[0] * $parca[1];
    }
}

// echo $buyukm;

if (isset($_POST["flag"])) {
    if ($_POST["flag"] == $buyukm) {
        echo "kangırcıleyşıns! senden iyi bir emlakçı olur!";
    } else {
        echo "yanlış :( senden emlakçı olmaz";
    }
}

?>
