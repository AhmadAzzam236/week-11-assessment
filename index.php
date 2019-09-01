<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

$names = array('Ahmad', 'Abdullah', 'Khalil');
$salaries = array (850, 911, 524);
echo '<div style="border:1px #000000 solid;">'. $names[0].'Salary is :' . $salaries[0] . '</div>';
echo '<div style="border:1px #000000 solid;">'. $names[1].'Salary is :' . $salaries[1] . '</div>';
echo '<div style="border:1px #000000 solid;">'. $names[2].'Salary is :' . $salaries[2] . '</div>';


/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

               for($i = 0 ; $i <= count($countries) ; $countries++){
                   echo $countries[$i];
               }



/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
*/

<?php
    $n=5;
    for($i=1; $i<=$n; $i++){
        for($j=1; $j<=$i; $j++){
            echo ' * ';
        }
	    echo '<br />';
    }

    for($i=$n; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
        echo ' * ';
        }
	    echo '<br /> ';
    }
?>
/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days

*/

<?php
    $sdate = "1981-11-04"; // first date declaration
    $edate = "2013-09-04"; // second date declaration 
    $date_diff = abs(strtotime($edate) - strtotime($sdate)); // converting to date
    $years = floor($date_diff / (365*60*60*24)); // convert to year 
    $months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24)); // convert to month
    $days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24)); // convert to days
    printf("%d years, %d months, %d days", $years, $months, $days); 
    printf("\n");
?>


/* Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */
<form method='POST'>
   <span>Your name Please :</span>
   <input type="text" name="name">
   <input type="submit" value="Submit">
</form>

<?php
    $name = $_POST['name'];
    echo "<span> Hello $name </span>";
?>