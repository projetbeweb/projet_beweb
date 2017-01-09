<?php
if (empty($_POST['saisie'])) {
  exit();
}
$mot = $_POST['saisie'];
$mot=str_replace(' ','',$mot);
$a=0;

$result = true;
$b=strlen($mot)-1;

while ($a <= $b) {
  if ($mot[$a] != $mot[$b]) {
    $result = false;
  }
  $a++;
  $b--;
}


if ($result) {
  echo $mot." est un palindrome";
}
else {
  echo $mot." n'est pas un palindrome";
}

if ($mot == "lol") {
  echo " ponney ponney ponney ponney ponney ponney ponney ponney ponney sponney";

}

if ($mot == 'marie') {
  echo "     Individue qui aime passer du bon temps en soirée c'est du moins ce que prouve ses cheveux ;)";
}

if ($mot =='enzo') {
  echo "        Homme qui aime se pougnier sur never back down";
}


if ($mot == "palindrome") {
  echo "     t'as vraiement crue que c'etait un palindrome serieux achete toi une vie !!! ^^";
}
