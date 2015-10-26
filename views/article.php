<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title> My first blog</title>
    <link rel="stylesheet" href='style.css'>
    </head>
    <body>
        <div class ='container'>
            <h1>Мой первый заголовок</h1>
            <div>
                <div class='article'>
                    <h3><?=$article['title']?></h3>
                    <em>Опубликовано: <?=$article['date']?> </em>
                    <p><?$=$article['content']?></p>
                </div>
                <footer>
                    <p>My frist blog <br> Copyright $copy; 2015</p>
                </footer>
            </div>
        </div>
    </body>
</html>