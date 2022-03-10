<?php

require_once '../views/header.php';
require_once '../../core/core.php';
require_once '../models/ArticlesModel.php';
require_once '../views/nav.php';

?>

<h1>Не доделано! Разметку не делал. Выводятся данные из БД через "print_r".</h1>
<h2>Но тем не менее всё работает. ))</h2>

<?php

if (!empty($_GET['article'])) {

    $code = $_GET['article'];

    $result = getArticlesCode($mysqli, $code);

    $row = mysqli_fetch_row($result);

    echo '<pre>';
    print_r($row);
    echo '</pre>';

    $result = getAuthor($mysqli, $row[6]);

    $row1 = mysqli_fetch_row($result);

    echo '<pre>';
    print_r($row1);
    echo '</pre>';

    $result = getArticleCategories($mysqli, $row[5]);

    $row2 = mysqli_fetch_row($result);

    echo '<pre>';
    print_r($row2);
    echo '</pre>';

}

require_once '../views/footer.html';