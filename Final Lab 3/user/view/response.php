<?php
$val=$_GET['selectvalue'];





$city1 = array('LALBAGER KELLA','AHSAN MANJIL');
$city2 = array('COXSBAZAR','INANI BEACH');
$city3 = array('JAFLONG','NIJHUM ARONNO');


switch($val)
{
    case 'Dhaka': foreach ($city1 as $dhakaval)
    {
        echo "<option> $dhakaval </option>";
    }
}


switch($val)
{
    case 'Chittagong': foreach ($city2 as $chittagongval)
    {
        echo "<option> $chittagongval </option>";
    }
}

switch($val)
{
    case 'Sylhet': foreach ($city3 as $sylhetval)
    {
        echo "<option> $sylhetval </option>";
    }
}








?>