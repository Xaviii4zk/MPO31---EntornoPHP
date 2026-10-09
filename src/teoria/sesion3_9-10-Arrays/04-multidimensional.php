<?php 

$projectes = [
    [
        'Asignatura' => 'Mates',
        'Hores' => '15',
        'Estat' => 'Fet',
        'Opinio' => 'Basura'
    ],
    [
        'Asignatura' => 'Mates',
        'Hores' => '12',
        'Estat' => 'Fet',
        'Opinio' => 'Basura'
    ],
    [
        'Asignatura' => 'Mates',
        'Hores' => '12',
        'Estat' => 'Fet',
        'Opinio' => 'Basura'
    ],
    [
        'Asignatura' => 'Mates',
        'Hores' => '12',
        'Estat' => 'Fet',
        'Opinio' => 'Basura'
    ],
];

echo '<pre>';
var_dump($projectes[0]);
echo '</pre>';

foreach ($projectes as $id => $projecte): ?>

<div>
    <h1><?= $id ?></h1>
    <button><?= $projecte['Hores'] ?></button>
    <a href="llistes.php?id=<?= $id ?>"><?= $projecte['Hores'] ?></a>
</div>

<?php endforeach; ?>