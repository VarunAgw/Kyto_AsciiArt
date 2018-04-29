<?php

require 'vendor/autoload.php';

use VarunAgw\AsciiArt;
use VarunAgw\SmartInterface;

$smartInterface = new SmartInterface\SmartInterface;

$size = $smartInterface->chooseFromArray([5, 7, 11]);
$treeShape = new AsciiArt\TreeShape($size);
$starShape = new AsciiArt\StarShape($size);

$smartInterface->printHeader();

echo $treeShape->getShape();
$smartInterface->printNewLine();
$smartInterface->printNewLine();

echo $starShape->getShape();
$smartInterface->printNewLine();

$smartInterface->printFooter();
