
<?php

// two table classes will be differentiated
//by using namespaces
include "equipment/table.php";
require "web/html.php";

$table1=new html\Table();
$table1->title="Population table";
$table1->numRows=5;
$table1->message();

$table2=new Furniture\Table("office table","nyabihu tvet",22192318);
echo $table2->calculateTax();

?>