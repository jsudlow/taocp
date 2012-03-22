<?

//Euclids Algorithm in PHP

//start with the remainder is one, the opposite of the terminating condition


//I turned this into a function so people can play around 
// with it using their own variables. Having this algorithm 
//is useful to have in the computer because Knuth dicusses
//the efficiency of it and its nice to verify how what he says
//actually effects the performance of the algorithm 


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
