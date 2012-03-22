<?

//Euclids Algorithm in PHP

//start with the remainder is one, the opposite of the terminating condition


//we use hard coded values for M and N 


function get_gcd($a, $b) {
  $r = 1;
  $m = $a;
  $n = $b;
  $counter = 0;


  while($r != 0) {
    $counter = $counter + 1;
  
    $r = $m % $n;
    echo "Remainder: " . $r . " iteration ". $counter . "\n";

    if($r != 0) {
      $m = $n;
      $n = $r;

    }

    echo "M " . $m . "iteration " . $counter . "\n";
    echo "N " . $n . "iteration " . $counter . "\n";
  }


  print "GCD IS " . $n . "\n"; 

}

get_gcd(6,8);

?>
