
<?php

session_start()


?>


<!DOCTYPE html>
<html>

        <head>
            <meta charset='UTF-8' />
            <meta name='description' content=''>
            <meta name ='keywords' content=''>
            <title>Recap</title>
            <style>
                body{

                    margin: 20px
                }
                p{

                    display:inline-block;
                    font-weight:bold;
                }
                input[type = 'submit']{


                    background-color: none;
                    border: none;
                    padding: 17px 28px;margin: 10px;
                    border-radius:23px;
                    color: #fff;font-size:17px;
                    background-color:#50C878	
                }



            </style>

        



        </head>
        <body>




        <?php

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $num_tele = $_POST['num_tele'];
            $email = $_POST['email'];
            $annee = $_POST['annee'];
            $filiere = $_POST['filiere'];
            $module = $_POST['module'];
            $club = $_POST['club'];
            $projet = $_POST['projet'];
            $remarque = $_POST['remarque'];
          



                    $tmpName = $_FILES['File']['tmp_name'];
                    $name = $_FILES['File']['name'];
                    $size = $_FILES['File']['size'];
                    $error = $_FILES['File']['error'];
                    move_uploaded_file($tmpName, './upload/'.$name);	

                    $_SESSION['file'] = './upload/'.$name;
                   


            
            
            // we store information invariable to use ghem in other pages

            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['age'] = $age;
            $_SESSION['num_tele'] = $num_tele;
            $_SESSION['email'] = $email;
            $_SESSION['annee'] = $annee;
            $_SESSION['filiere'] = $filiere;
            $_SESSION['module'] = $module;
            $_SESSION['projet'] = $projet;
            $_SESSION['remarque'] = $remarque;
            $_SESSION['club'] = $club;


           



            

            echo "<h1>Fiche recapitulatif </h1>";

            echo "Vous etes " . "<p>$nom</p>" . " " ."<p> $prenom </p>". "<br> ";
            echo "Vous avez " ."<p> $age  </p>". " ans <br> ";
            echo "Vous numero de telephone est  " . "<p> $num_tele </p>".  " et votre <br>";
            echo "email " . " <p> $email </p> <br>";
            echo "Vous etes dans   " . "<p> $annee </p>".  " annee , filiere " . "<p> $filiere </p> <br>";
            echo "Vous suivi les module suivant    " ;

            for($i = 0; $i< count($module); $i++){
                echo " ". "<p> $module[$i] </p>  , " ;

                
            }
            
            echo " <br> Nombre de projet realise cette annnee est    " . " <p>$projet </p> " . " projets <br>" ;

            echo "Votre remarque est " . "<p> $remarque</p> <br>";

            echo  "Votre fichier " . "<img  src='{$_SESSION['file']}' height='100' width='100'> ";
            echo "<br>Vous suivi les clubs suivant    " ;

            for($i = 0; $i< count($club); $i++){
                echo " ". "<p> $club[$i] </p>  , " ;

                
            }


      




            





        ?>
        <form method='post' action='traiter.php'>
        <input  type='submit' name='enregistrer' value='Valider'>
        <input  type='submit' name='modifier' value='Modidifer' style='background-color:#086DBA'>


        </form>
       

        
        </body>



</html>





