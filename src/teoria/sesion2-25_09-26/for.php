<!-- <div>Caixa 1</div>
<div>Caixa 2</div>
<div>Caixa 3</div>
<div>Caixa 4</div>
<div>Caixa 5</div> -->

<?php 
$limite = 80;
>?

<?php for ($i = 1; $i <= 5; $i++): ?>
    <div>Caixa <?php echo $i; ?></div>
<?php endfor; ?>