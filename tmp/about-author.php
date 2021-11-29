<?php
$form = (!$content['form']) ?
    "<hr><a href=\"/exit.php\">exit</a>"
    : "<div>
            <form action=\"/post.php\" method=\"post\">
                <label>
                    <span>Имя пользователя:</span>
                    <input required type=\"text\" name=\"name\" placeholder=\"Имя пользователя\">
                </label>
                <input type='submit'>
            </form>
         </div>";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>

<h3>Приветствие!</h3>

<?= $content['msg'] ?>
<?= $form ?>

</body>
</html>
