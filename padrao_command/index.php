<?php
require 'classes.php';

$luz = new Luz();

$c = new LuzOnCommand($luz);
callCommand($c);

echo "LUZ {$luz->getStatus()}";

$c = new LuzOffCommand($luz);
callCommand($c);

echo "LUZ {$luz->getStatus()}";