<?php

//this is the second way of using namespaces with the use keyword
use Html\Table ;
use Html\Row ;
use Furniture\Table as Item;

require "web/html.php";
require "equipment/table.php";

$table=new Table();
$table->title="Population table";
$table->numRows=5;
$table2=new Item("office table","RCA NYABIHU",200);
$table->message();

$row1=new Row();
$row1->numCells=5;
$row1->message();

?>