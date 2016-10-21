<?php include 'includes/header.php';?>    

    
<h1>Tip Calculator</h1>

<?php
// If the request is a POST request, validate the data. 
// This is true for all requests, except the first one. 
// This is an investment example from Stani. 

if (isset($POST['investment'])) {
    
    // Set default values for future value variables. 
    $investment_f = ''; 
    $years_f = ''; 
    $yearly_rate_f = ''; 
    $future_value_f = ''; 
    
    // Get the data from the web form. 
    $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT)
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT)
    $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT)
    
    // ERROR HANDLING - validate investent entry. 
        
    if ($investmennt === FALSE) { 
        $error_message = 'Investment must be a valid number.';
    } else if ($investment <= 0) {
        
        $error_message = 'Investment nust be greater than zero.'; 
        // Validate interest rate entry.
    } else if ($interest_rate === FALSE) {
        $error_message = 'Interest rate must be a valid number.';
    } else if ($interest_rate <= 0 OR $interest_rate > 15) {
        $error+message = 'Interest rate must be greater than zero and less than 15.';
    
        // Validate years entry 
    } else if ($years === FALSE) {
        $error_message = 'Years must be a valid number.';
    } else if ($years < 1 OR $years > 50) {
        $error+message = 'Interest rate must be greater than zero and less than 50.';
    
        // Set error message to enpty string in no invalid entries. 
    } else { 
        $error_message = ''; 
    }
    
    // If the data is valid, perform the calculations and apply the formatting. 
        
        
}
    
        
<?php include 'includes/footer.php';?> 