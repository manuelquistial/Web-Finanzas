<?php
    
    session_start();
    if(empty($_SESSION["choix"])){
        $_SESSION["choix"]=1;
    }
    include("database_connection.php");

    $conn = connection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }    

    $annee = date("Y");           
    if(empty($_SESSION["annee"])){
        $_SESSION["annee"] = $annee;
    }
    
    $annee = $_SESSION["annee"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion de revenus </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery.js" ></script>
    <script src="js/bootstrap.js" ></script>
    <script src="js/script.js"></script>
</head>
<body>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-pills">
                    <li lass="active"><a href="#">Societe</a></li>
                    <li lass="active"><a href="#">Personne Physique</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="cf">
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td colspan="10"><center><div id="annee"><?php echo "$annee"; ?></div></center></td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td colspan="2"><span class="glyphicon glyphicon-menu-left" aria-hidden="true" id="prev_month"></span><span class="month1"></span></td>
                            <td colspan="2"><span class="month2"></span></td>
                            <td colspan="2"><span class="month3"></span></td>
                            <td colspan="2"><span class="month4"></span></td>
                            <td colspan="2"><span class="month5"></span><span class="glyphicon glyphicon-menu-right" aria-hidden="true" id="next_month"></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Dette</td>
                            <td>Mt initial</td>
                            <td>Solde dû</td>
                            <?php 
                                for($x = 1; $x <=5; $x++) {
                                    echo "<td>Entrée</td>
                                          <td>Sortie</td>";
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="box"></div>
            <div class="row">
                <button type="button" class="btn btn-success" id="btn_add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
            </div>
    </div>


</body>
</html>