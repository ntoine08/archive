
    <ul class="index">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="function/logout.php">Se déconnecter <?php
                            if (isset($_SESSION['id_personne']) AND isset($_SESSION['pseudo']))
                            {
                                echo $_SESSION['pseudo'];
                            } ?>
            </a></li>
    </ul>
        
        <h1>Liste des étagères</h1>

        <table class="t2">
                    <tr>
                        <th>Nom de l'étagère</th>
                        <th>Nom de la zone</th>
                    </tr>
        <?php
            include 'function/connexion.php';  
             
            $sel = $bdd->query('SELECT nomEtagere, nomZone 
                                FROM etagere 
                                LEFT JOIN zone 
                                ON etagere.id_zone = zone.id_zone 
                                ORDER BY etagere.id_zone');
            $etageres = $sel->fetchAll();
            foreach($etageres as $etagere){
                ?>
                <tr>
                  <td><?= $etagere['nomEtagere'];?></td>
                  <td><?= $etagere['nomZone'];?></td>
                </tr>
                                  
        <?php
            };
        ?> 
        </table>         

    </body>
    </html>
