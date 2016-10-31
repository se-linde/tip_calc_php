<!DOCTYPE html> 
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/portal.css" />
</head> 

    
<body>

<?php include 'includes/header.php';?>    

    
<h1>Tip Calculator</h1>

<?php
// If the request is a POST request, validate the data. 
// This is true for all requests, except the first one. 
// This is an investment example from Stani. 

$test = 666;
    
echo '<pre>'; 
var_dump($test);
echo '</pre>';

if (isset($POST['simple'])) {
    
    // Set default values for future value variables. 
    $simple_f = ''; 
    
    // Get the data from the web form. 
    $simple = filter_input(INPUT_POST, 'simple', FILTER_VALIDATE_FLOAT);
    
    // ERROR HANDLING - validate investent entry. 
        
    if ($simple === FALSE) { 
        $error_message = 'Simple must be a valid number.';
    } else if ($simple < 0) {
        
        $error_message = 'Simple nust be greater than zero.'; 
        // Validate interest rate entry.

    } else { 
        $error_message = ''; 
    }
    
    // If the data is valid, perform the calculations and apply the formatting. 
    if ($error_message == '') {
        // calculate the future value
        $simple; 
   
        // apply currency and percent formatting
        $simple_f = $simple; 
      
        // clear text boxes
        $simple = ''; 
       
    }
} else {
    
    // first request - set default values for all variables. 
    $simple = ''; 
    $simple_f = '';    
}
?>     

<!-- Here on out is the HTML formatting of the PHP data. --> 


<main> 
    
<h1>Simple Calculator</h1>    
<?php if (!empty($error_message)) { ?>
    <p class="error"> <?php echo $error_message; ?>   </p>
    <?php } ?> 
    <form action = "" method="post">
    
        <div id="data">
            <label>Enter Simple Amount:</label>
            <input type="text" name="simple" 
                   value="<?php echo htmlspecialchars($simple); ?>"> <br>
        
        </div>
        
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>
        
    </form>
    
    <?php 
    
       echo '<pre>'; 
    var_dump($simple);
    echo '</pre>';
    
    
    
    ?>
    
    <p>
    </p>
            <label>Simple Amount:</label>
            <span><?php echo htmlspecialchars($simple_f); ?></span><br>
            
            
    <p class="error">This calculation was done on <?php echo date('m/d/y'); ?> </p>
    
    
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
    
    
</main>    
</body>        
    
</html>

        
<?php include 'includes/footer.php';?> 