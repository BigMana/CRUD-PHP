<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Crud en php</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h2>Crud en Php</h2>
    </div>        
    <div class="row">
        <a href="add.php" class="btn btn-success">Ajouter un user</a>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">            
                <thead>
                    <th>Name</th>                    
                    <th>Firstname</th>                    
                    <th>Age</th>                    
                    <th>Tel</th>                    
                    <th>Pays</th>                    
                    <th>Email</th>                    
                    <th>Comment</th>
                    <th>metier</th>
                    <th>Url</th>
                    <th>Edition</th>
                </thead>
                <tbody>
                    <?php include 'database.php';

                    //on inclut notre fichier de connection 
                    $pdo = Database::connect();

                    //on se connecte à la base 
                    $sql = 'SELECT * FROM user ORDER BY id DESC';

                    //on formule notre requete 
                    foreach ($pdo->query($sql) as $row) { 
                        //on cree les lignes du tableau avec chaque valeur retournée
                        echo '<tr>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['firstname'] . '</td>';
                            echo '<td>' . $row['age'] . '</td>';
                            echo '<td>' . $row['tel'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['pays'] . '</td>';
                            echo '<td>' . $row['comment'] . '</td>';
                            echo '<td>' . $row['metier'] . '</td>';
                            echo '<td>' . $row['url'] . '</td>';
                            
                            // un autre td pour le bouton d'edition
                            echo '<td>';
                            echo '<a class="btn" href="edit.php?id=' . $row['id'] . '">Read</a>';
                            echo '</td>';

                            // un autre td pour le bouton d'update
                            echo '<td>';
                            echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';
                            echo '</td>';
                            // un autre td pour le bouton de suppression
                            echo '<td>';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Delete</a>';
                            echo '</td>';
                        echo '</tr>';
                    }
                    Database::disconnect();//on se deconnecte de la base ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>