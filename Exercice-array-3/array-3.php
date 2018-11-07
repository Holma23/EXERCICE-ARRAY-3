<?php
$chaine="ahla";
$tab= count_chars($chaine,1);
foreach($tab as $index=> $valeur)
{$letrre= chr($index);
echo $letrre." : ".$valeur."<br>";}