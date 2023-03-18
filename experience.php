<?php
$work_experience = [
    [
        'position' => 'Frontend-Developer',
        'company' => 'ООО "Разработка"',
        'startDate' => '2020-05-01',
        'endDate' => '2021-09-30',
        'responsibilities' => 'Разработка веб-приложений, взаимодействие с бэкендом, поддержка существующего кода'

    ],
    [
        'position' => 'Web Developer',
        'company' => 'ООО "Проекты"',
        'startDate' => '2019-01-01',
        'endDate' => '2020-04-30',
        'responsibilities' => 'Создание и поддержка веб-сайтов, оптимизация страниц, работа с CMS'

    ]
];
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опыт работы</title>
</head>

<body>
    <h1>Опыт работы</h1>
    <ul>
        <?php foreach ($work_experience as $job): ?>
            <li>
                <h2>
                    <?= $job['position']; ?>
                </h2>
                <h3>
                    <?= $job['company']; ?>
                </h3>
                <p>Срок работы: с
                    <?= $job['startDate']; ?> по
                    <?= $job['endDate']; ?>
                </p>
                <p>Обязанности:
                    <?= $job['responsibilities']; ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>