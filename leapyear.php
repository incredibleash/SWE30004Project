<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Web Application Development :: Lab 1" />
	<meta name="keywords" content="Web,programming" />
	<title>Using if and while statements</title>
</head>
<body>
	<h1>Web Programming -  Lab 3</h1>
	<?php 
		function is_leapyear($my_year)
			{
				if((0 == $my_year % 4) and (0 != $my_year % 100) or (0 == $my_year % 400))
					{
						echo "$my_year is a Leap Year";   
					}
				else  
	        		{  
	            		echo "$my_year is not a Leap Year";    
	 	    		}  
			}  
		$my_year = 2013;
		is_leapyear($my_year);



		if (isset ($_GET["year"])) 
			{      									     
				$year = $_GET["year"];                         
				if (is_numeric($year))
			       {  
			        	if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )
							{
								echo "$year is a leap year";		
					            			
							}
							else
							{
								echo "$year is not a leap year"; 
								
							}
					}					
		    else
		     	{ 
			        echo "Input should be a numbe";  
			  	} 
		    }   
?>  