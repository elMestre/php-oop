<?php

$paco = new Seguridad();
$alberto = new Limpieza();


echo $paco->nombre;   // ✔️
echo $paco->vigila(); // ✔️
echo $paco->limpia(); // ❌
