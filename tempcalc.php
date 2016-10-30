<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Temperature Calculator</title>
<link rel="stylesheet" type="text/css" href="css/portal.css" />
</head>
    
<body>

<?php include 'includes/header.php';?>    
    
<?php
// tempcalc.php

    // Converts Fahrenheit to Celsius. Error handling in case user types in a non-number.
    function fahrenheit_to_celsius($given_value)
	{
        if (is_numeric($given_value)){
            
    	$celsius=(($given_value-32)*5/9);
    	return $celsius;
    
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}

    
    // Converts Fahrenheit to Celsius. Error handling in case user types in a non-number.
	function celsius_to_fahrenheit($given_value)
	{
        if (is_numeric($given_value)){
        
    	$fahrenheit=$given_value*9/5+32;
    	return $fahrenheit;
        
        } else { 
        trigger_error('Please enter a numeric value.');
        }
        
	}


    // Converts Fahrenheit to Kelvin. Error handling in case user types in a non-number.
    function fahrenheit_to_kelvin($given_value)
	{
        if (is_numeric($given_value)){
        
        $kelvin=(($given_value - 32) * 5/9 + 273.15); 
    	return $kelvin;
            
            
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}

    
    // Converts Kelvin to Fahrenheit. Error handling in case user types in a non-number.
    function kelvin_to_fahrenheit($given_value)
	{
        if (is_numeric($given_value)){
        
        $fahrenheit=(($given_value - 273.15) * 9/5 + 32);
    	return $fahrenheit; 
	
        } else { 
        trigger_error('Please enter a numeric value.');
        }
        
        }


    // Converts Celsius to Kelvin. Error handling in case user types in a non-number.
    function celsius_to_kelvin($given_value)
	{
        if (is_numeric($given_value)){
    
        $kelvin=($given_value + 273.15); 
    	return $kelvin;
            
            
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}

    // Converts Kelvin to Celsius. Error handling in case user types in a non-number.
    function kelvin_to_celsius($given_value)
	{
    
        if (is_numeric($given_value)){
    
        $celsius=($given_value - 273.15);
    	return $celsius;
            
            
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}
?>

    <!-- HTML portion of the script. --> 

        <h4>Please type in a number, and select which temperature unit it is: </h4>
        <p> 
        <h6>-----------------------------------------------------------</h6>    

    	<form action="" method="post">
    	<table>
       
        	<tr>
            	<td>
                	<select name="second_temp_type_name">
                    	<option value="Fahrenheit">Enter the number in Fahrenheit:</option>
                    	<option value="Celsius">Enter the number in Celsius:</option>
                    	<option value="Kelvin">Enter the number in Kelvin:</option>
                	</select>
            	</td>
        	</tr>
        	<tr>
            	<td>
                	<input type="text" name="given_value">
            	</td>
        	</tr>
        	<tr>
            	<td>
                	<input type="submit" name="btn" value="SUBMIT">
            	</td>
        	</tr>
        	<tr>
            	<td>
                	<?php
                    
// The switch sends the input to the functions, and produces the output.
                    
if(isset($_POST['btn'])) // The form handler.
{ // show data.

    $second_temp_type_name=$_POST['second_temp_type_name'];
    $given_value=$_POST['given_value'];
                    
    switch($second_temp_type_name){ 

        case 'Fahrenheit':
                        
                    	{
                        	$celsius=fahrenheit_to_celsius($given_value);
                            $celsius2 = number_format($celsius, 2);
                            echo "Fahrenheit  $given_value = $celsius2 Celsius </br>";
                        }
                    	    
                        {
                            $kelvin=fahrenheit_to_kelvin($given_value); 
                            $kelvin2 = number_format($kelvin, 2);
                            echo "Fahrenheit  $given_value = $kelvin2 Kelvin </br>";
                        }
                 
        break;

        case 'Celsius':
                     
                        {
                        	$fahrenheit=celsius_to_fahrenheit($given_value);
                            $fahrenheit2 = number_format($fahrenheit, 2);
                        	echo "Celsius  $given_value = $fahrenheit2 Fahrenheit </br>";
                    	}
                        
                        {
                            $kelvin=celsius_to_kelvin($given_value); 
                            $kelvin2 = number_format($kelvin, 2);
                            echo "Celsius  $given_value = $kelvin Kelvin </br>";
                        }
                         
        break;
        
        case 'Kelvin':
                      
                        {
                        	$fahrenheit=kelvin_to_fahrenheit($given_value);
                            $fahrenheit2 = number_format($fahrenheit, 2);
                        	echo "Kelvin  $given_value = $fahrenheit Fahrenheit </br>";
                    	}  
                  	 
                        {
                            $celsius=kelvin_to_celsius($given_value);
                            $celsius2 = number_format($celsius, 2);
                            echo "Kelvin  $given_value = $celsius2 Celsius </br>";
                        }
                         
        break;
            
    }
}
                    
                    
                        
                	?>
            	</td>
        	</tr>
    	</table>
    	</form>
	</body>
</html>

<?php include 'includes/footer.php';?> 