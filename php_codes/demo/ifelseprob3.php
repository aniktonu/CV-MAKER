<?php
    $number = readline("Enter a number: ");    
    if($number>100 and $number<250 and $number%7==0){        
        echo "$number is greater than 100 and less than 250 and divisible by 7";            
    }
    else{
        echo "$number does not satisfy the condition";
    }
    echo "\nEND OF CODE";
?>
<?php
    // $number = readline("Enter a number: ");
    
    // if($number>100){
    //     if($number<250){
    //         if($number%7==0){
    //             echo "$number is greater than 100 and less than 250 and divisible by 7";
    //         }
    //         else{
    //             echo "$number is greater than 100 and less than 250 but is not divisible by 7";
    //         }
    //     }
    //     else{
    //         echo "$number is greater than 100 but not less than 250";
    //     }
    // }
    // else{
    //     echo "$number is not greater than 100";
    // }
    
    // echo "\nEND OF CODE";
?>