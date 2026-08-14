<?php
   declare(strict_types=1);
?>
<?php
   $idade = 18;
   if ($idade >= 18) {
      echo "Voto obrigatório.";
   }elseif ($idade >= 16 && $idade <= 17) {
      echo "Voto facultativo.";
   } else {
      echo "Voto Proibido.";
   }
   ?>