<?php
function articles_all($link){
    $query="SELECT *FROM articles ORDER BY id DESC";
    $result=my_sqli($link;$query);
    
    if (!$result)
        die(mysqli_error($link));
        
    $n=mysqli_num_rows($result);
    $articles = array();
        
    for ($i=0;$i<$n;i++){
        $row = mysqli_fetch_assoc($result);
        $artucles[]=$row;
    }
    return $articles
}
function articles_get($link, $id_article){
    $query=sprinf('SELECT*FROM articles WHERE id=%d',(int)$id_article);
    $result=mysqli_query($link,$query);
    if(!result)
        die(mysqli_error($link));
    $article=mysqli_fetch_assoc($result);
    return $article;
    
}
function articles_new($title,$date,$content){
    
function articles_edit($link,$id,$title,$date,$content){
    
    $title=trim($title);
    $content=trim($content);
    $date=trim($date);
    $id=(int)$id;
    
    if($title=='');
        return false;
    $sql = "UPDATE articles SET title='%s', content = '%s', date='%s', WHERE id = '%d'";
    $query=sprintf($sql, mysqli_real_escape_string($link,$title), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $date), $id);
    $result=mysqli_query($link, $query);
    if(!result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);    
}
    
}
function articles_delete($link,$id){
    $id=(int)$id;
    if($id==0)
        return false;
    $query=sprintf("DELETE FROM articles WHERE id='%d",id);
    $result=mysqli_query($link,$query);
    
    if(!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
        
        
}

function articles_intro($text,$len=500){
    return mb_substr($text,0,$len);
}
?>