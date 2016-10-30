<!DOCTYPE html> 
<html>
<head>
    <title>Tip Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/portal.css" />
</head> 

    
<body>

<?php include 'includes/header.php';?>    

    
<h1>Tip Calculator</h1>

<?php
    /*
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
*/
?>     

<!-- Here on out is the HTML formatting of the PHP data. --> 


<main> 
     
<?php
// index_testsimple2.php

    
    // Calculates the tip amount. Error handling in case user types in a non-valid answer.
    // Given_value is the total restaurant bill, inc. tax. 
    
    // Tip calculated at 15%. 
    
    function tip15($given_value)
	{
        if (is_numeric($given_value)){
            
    	$tip=(($given_value*0.15)+$given_value);
    	return $tip;
    
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}
    
    
    // Converts Fahrenheit to Celsius. Error handling in case user types in a non-number.
    
    // Tip calculated at 18%. 
    
    function tip18($given_value)
	{
        if (is_numeric($given_value)){
        $tip=(($given_value*0.18)+$given_value);
    	return $tip;
    
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}

    
    // Converts Fahrenheit to Celsius. Error handling in case user types in a non-number.
    
    // Tip calculated at 20%. 
    
	function tip20($given_value)
	{
        if (is_numeric($given_value)){
        $tip=(($given_value*0.20)+$given_value);
    	return $tip;
        
        } else { 
        trigger_error('Please enter a numeric value.');
        }
        
	}


    // Converts Fahrenheit to Kelvin. Error handling in case user types in a non-number.
    
    // Tip calculated at 22%. 
    
    function tip22($given_value)
	{
        if (is_numeric($given_value)){
    	$tip=(($given_value*0.22)+$given_value);
    	return $tip;
            
        } else { 
        trigger_error('Please enter a numeric value.');
        }
	}

    
    // Converts Kelvin to Fahrenheit. Error handling in case user types in a non-number.
    
    // Tip calculated at 25%. 
    
    function tip25($given_value)
	{
        if (is_numeric($given_value)){
        
    	$tip=(($given_value*0.25)+$given_value);
    	return $tip;
	
        } else { 
        trigger_error('Please enter a numeric value.');
        }
        
    }


?>

    <!-- HTML portion of the script. --> 

        <h4>Please type in your bill total, and select the tip value. Then, press the 'Calculate Tip' button to calculate what your total bill will be, plus the selected tip: </h4>
        <p> 
        <h6>-----------------------------------------------------------</h6>    

    	<form action="" method="post">
    	<table>
       
        	<tr>
            	<td>
                	<select name="second_temp_type_name">
                        <option value="tip15">Calculates tip at 15%.</option>
                    	<option value="tip18">Calculates tip at 18%.</option>
                    	<option value="tip20">Calculates tip at 20%.</option>
                        <option value="tip22">Calculates tip at 22%.</option>
                        <option value="tip25">Calculates tip at 25%.</option>
                        
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
                	<input type="submit" name="btn" value="Calculate Tip">
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
            
        case 'tip15':
                        
                    	{
                            setlocale(LC_MONETARY, 'en_US');
                        	$tip=tip15($given_value);
                            $tip2 = number_format($tip, 2);
                            echo "This is the bill total: $$given_value</br>";        
                            echo "<b>This is the bill total, plus a 15% tip: $$tip2</b></br>";
                        }
        break;

        case 'tip18':
                     
                        {
                        	$tip=tip18($given_value);
                            $tip2 = number_format($tip, 2);
                            echo "This is the bill total: $$given_value</br>";        
                            echo "<b>This is the bill total, plus a 18% tip: $$tip2</b></br>";
                        }
        break;
        
        case 'tip20':
                      
                        {
                        	$tip=tip20($given_value);
                            $tip2 = number_format($tip, 2);
                            echo "This is the bill total: $$given_value</br>";        
                            echo "<b>This is the bill total, plus a 20% tip: $$tip2</b></br>";
                    	}      
        break;
            
            
        case 'tip22':
                        
                    	{
                        	$tip=tip22($given_value);
                            $tip2 = number_format($tip, 2);
                            echo "This is the bill total: $$given_value</br>";        
                            echo "<b>This is the bill total, plus a 22% tip: $$tip2</b></br>";
                        }
        break;

        case 'tip25':
                     
                        {
                        	$tip=tip25($given_value);
                            $tip2 = number_format($tip, 2);
                            echo "This is the bill total: $$given_value</br>";        
                            echo "<b>This is the bill total, plus a 25% tip: $$tip2</b></br>";
                    	}
        break;
                     
    }
}
                    
                    
                        
                	?>
            	</td>
        	</tr>
    	</table>
    	</form>
    
        <p class="error">This calculation was done on <?php echo date('m/d/y'); ?> </p>
    
</main>    
</body>        
    
</html>

        
<?php include 'includes/footer.php';?> 