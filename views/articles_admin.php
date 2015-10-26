<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title> My first blog</title>
    <link rel="stylesheet" href='style.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class ='container'>
            <h1>My first blog</h1>
            <a href="admin">Admin panel</a>
            <div>
                <table border = "1">
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                     <?php foreach($articles as $a):?>
                    <tr>
                        <td><?=$a['date']?></td>
                        <td><?=$a['title']?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a>
                        </td>
                         <td>
                            <a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a>
                        </td>
                    </tr>
                    <?php endfroeach?>
                </table>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
               
                <div class='article'>
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a> </h3>
                    <em>Опубликовано: <?=$a['date']?> </em>
                    <p><?$=$article['content']?></p>
                </div>
                
            </div>
            <footer>
                <p>My frist blog <br> Copyright $copy; 2015</p>
            </footer>
        </div>
    </body>
</html>