<?php
try{
    $dsn = "mysql:dbname=treinamentos;host=localhost";
    $dbuser = "root";
    $dbpass = "m10021988@";
    $pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
    die($e->getMessage());
}
?>
<h3>Noticias</h3>
<?php
$query = "Select * FROm posts LIMIT 10";
$query = $pdo->query($query);

if($query->rowCount() > 0){
    foreach($query->fetchAll() as $post){
        ?>
        <h3><?= $post['titulo'] ?></h3>
        <p><?= $post['corpo'] ?></p>
        <hr>
        <?php
    }
}