<?php
    $nb = rand(0,100);
    if(EstPair($nb)){
      echo $nb." est pair !";
    } else {
      echo $nb." est impair !";
    }
?>
<?php
function EstPair($num){
    if($num%2==0){
      return true;
    } else {
      return false;
    }
  }
?>
