<?php
$gradesValue = 59;

    if (($gradesValue >= 101) || ($gradesValue <= -1))
	{
        echo("Please Input Number in between 0-100");
		} 
	
	elseif (($gradesValue >= 0) && ($gradesValue <= 39))
	{
        echo("$gradesValue"."<br> You got F");
		}
		
	elseif (($gradesValue >= 40) && ($gradesValue <= 44)) 
	{
        echo("$gradesValue"."<br> You got D");
		} 
		
	elseif (($gradesValue >= 45) && ($gradesValue <= 49))
	{
        echo("$gradesValue"."<br> You got C");
		} 
		
	elseif (($gradesValue >= 50) && ($gradesValue <= 54)) 
	{
        echo("$gradesValue"."<br> You got C+");
		} 
		
	elseif (($gradesValue >= 55) && ($gradesValue <= 59)) 
	{
        echo("$gradesValue"."<br> You got B-");
		}
		
	elseif (($gradesValue >= 60) && ($gradesValue <= 64)) 
	{
        echo("$gradesValue"."<br> You got B");
		} 
		
	elseif (($gradesValue >= 65) && ($gradesValue <= 69)) 
	{
        echo("$gradesValue"."<br> You got B+");
		} 
		
	elseif (($gradesValue >= 70) && ($gradesValue <= 74)) 
	{
        echo("$gradesValue"."<br> You got A-");
		} 
		
	elseif (($gradesValue >= 75) && ($gradesValue <= 79)) 
	{
       echo("$gradesValue"."<br> You got A");
		} 
		
	elseif (($gradesValue >= 80) && ($gradesValue <= 100))
	{
       echo("$gradesValue"."<br> You got A+");
		} 


?>