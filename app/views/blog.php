<?php

require_once '../views/header.php';
require_once '../../core/core.php';
require_once '../models/ArticlesModel.php';
require_once '../views/nav.php';
?>

    <h1>Мой блог</h1>

    <div class="container__blog__content">
        <ul>
            <?php
            $result = getArticles($mysqli);

            if ($result) {
                while ($row = mysqli_fetch_row($result)) { ?>
                    <li><a href="/app/views/article.php?article=<?php echo $row[3] ?>"><?php echo $row[2] ?></a>
                    </li><?php
                }
            }
            ?>
        </ul>
    </div>

<?php
require_once '../views/footer.html';
?>