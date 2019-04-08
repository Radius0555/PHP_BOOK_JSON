<?php
$php_typy_danych = array(4.1, 3, NULL, true, false, "cześć", new StdClass(), array());
$json = json_encode($php_typy_danych);
$zdekodowane = json_decode($json);
?>
<p>Reprezentacja w JSON:<br/>
<pre>
<?php var_dump($json); ?>
</pre>
</p>
<p>Reprezentacja w PHP:<br/>
<pre>
<?php var_dump($zdekodowane); ?>
</pre>
</p>