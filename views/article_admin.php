<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title> My first blog</title>
    <link rel="stylesheet" href='../style.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>My first blog</h1>
            <div>
                <form method="post" action ="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                       Title
                        <input type="text" name = "title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                         Date
                        <input type="date" name="date" value = "<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label>
                        Content
                        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                    </label>
                    <input type="submit" value="Save" class="btn">
                </form>
            </div>
            <footer>
                    <p>My frist blog <br> Copyright $copy; 2015</p>
                </footer>
        </div>
    </body>
</html>