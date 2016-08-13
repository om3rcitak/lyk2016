<?php

/* by om3rcitak */

$m = new Memcached();
$m->addServer('localhost', 11211);

if(isset($_GET['key'])){
	$key = $_GET['key'];
	// white list
	// preg_match_all('#([a-zA-Z0-9_]+)#', $key, $matches);
	// $key = implode('', $matches[1]);
	// echo $key."<br />";
	$m->set('key'.$key, 'deneme metin', 30);
}
	
echo "'key".$key."' in içindeki deger: ".$m->get('key'.$key)."<br />".PHP_EOL;
echo "<br />";
echo $m->get("omer");

// get içinde set
// $m->set('key1', 'deneme metin', 30);
// echo "'key".$key."' in içindeki deger: ".$m->get('key'.$key)."<br />".PHP_EOL;
	
/*
$m->set('int', 99);
$m->set('string', 'a simple string');
$m->set('array', array(11, 12));
$m->set('object', new stdclass, time() + 300);
var_dump($m->get('int'));
var_dump($m->get('string'));
var_dump($m->get('array'));
var_dump($m->get('object'));
*/

?>

<form action="">
	<textarea name="key" cols="30" rows="10"></textarea>
	<br />
	<input type="submit" value="kaydet" />
</form>