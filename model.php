<?php
$auto = [
    [
        'id' => 1,
        'name' => 'Forza',
        'imgs' => [
            'http://i.autoportal.ua/img/newcars34/min/zaz_sens_34.jpg',
        ]
    ],
    [
        'id' => 2,
        'name' => 'Lanos',
        'imgs' => [
            'http://hvylya.net/wp-content/uploads/2016/09/ZAZ-Lanos.png',
        ]
    ],
    [
        'id' => 3,
        'name' => 'Sens',
        'imgs' => [
            'https://autodiski.org.ua/images/cars/forza.png.pagespeed.ce.nsGQ-pEpqL.png'
        ]
        ],
        [
            'id' => 4,
            'name' => 'Forza',
            'imgs' => [
                'http://i.autoportal.ua/img/newcars34/min/zaz_sens_34.jpg',
            ]
        ],
        [
            'id' => 5,
            'name' => 'Lanos',
            'imgs' => [
                'http://hvylya.net/wp-content/uploads/2016/09/ZAZ-Lanos.png',
            ]
        ],
        [
            'id' => 6,
            'name' => 'Sens',
            'imgs' => [
                'https://autodiski.org.ua/images/cars/forza.png.pagespeed.ce.nsGQ-pEpqL.png'
            ]
        ]
];

$search = array_search($_GET['id'], array_column($auto, 'id'));
$autocard= $auto[$search];
$host = '127.0.0.1';
$db   = 'auto';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


    $stmt = $pdo->query('SELECT * FROM models');
    $models=  $stmt->fetchAll();

if(isset($_GET['id'])) {
    $model = $pdo->query('SELECT * FROM models WHERE id = ' . $_GET['id']);
    $model =  $model->fetch();
}
