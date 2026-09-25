
<?php 
// echo 'hola';

$edat = 89;
// #condicional simple if else
// if ($edat >= 18) {
//     echo ('<p>Eres mayor de edad</p>');
// } else {
//     echo ('<p>Eres menor de edad</p>');
// }
?>


#sinxatsis alternativa
<?php if ($edat >= 18): ?>
    <p>Eres mayor de edad</p>
<?php else: ?>
    <p>Eres menor de edad</p>
    <?php endif; ?>