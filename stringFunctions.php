<?php 

// String functions

$first = "hello";
$second = " world";

$final = $first;

// First method
echo $final.$second;
echo "<br>";

// Second method
echo "{$first}{$second}";
echo "<br>";

// Third method
$final .= $second;
echo $final;

 ?>
<br>
allSimple : <?php echo strtolower($final); ?>

<br>
allCapital : <?php echo strtoupper($final); ?>

<br>
theNumberOfCharacters : <?php echo strlen($final); ?>

<br>
theFirstLetterOfFirstWordIsCapital : <?php echo ucfirst($final); ?>

<br>
theFirstLetterOfAllWordsAreCapital : <?php echo ucwords($final); ?>

<br>
theFindingTheWord : <?php echo strstr($final, "world1");?>

<br>
replacingTheWord : <?php echo str_replace("world", "anushan", $final); ?>
