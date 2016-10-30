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

<!DOCTYPE html> 
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/portal.css" />
</head> 

    
<body>
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
    
</main>    
</body>        
    
</html>

        
<?php include 'includes/footer.php';?> 