<?php

session_start();

?>



<?php

if(isset($_POST['enregistrer'])){
        
    
            $fichier = fopen('enregistrement.txt', 'a+') or die('Unable to open');
            $Nom = "\r\nNom : " . $_SESSION['nom'];
            $Prenom = "\r\nPrenom : " . $_SESSION['prenom'];
            $Age = "\r\nAge : " . $_SESSION['age']." ans";
            $Num = "\r\nNuméro Téléphone : " . $_SESSION['num_tele'];
            $Email = "\r\nEmail : " . $_SESSION['email'];
            $Filiere = "\r\nFilière : " . $_SESSION['filiere'];
    
            if($_SESSION['annee'] == 1){
                $Annee = "\r\nAnnée : " . $_SESSION['annee']." er annee";
            }
            else{
                $Annee = "\r\nAnnée : " . $_SESSION['annee']." eme annee";
            }
            
            $module = "\r\nModules Suivies : "  . json_encode($_SESSION['module']);
            $club = "\r\nClubs : " . json_encode($_SESSION['club']);

            $Remarque = "\r\nRemarques : " . $_SESSION['remarque'];
            $File = "\r\nFichier : " . $_SESSION['file'];
            $Espace = " \r\n------------------------------ \r\n";

        
        
        
            $didUpload = move_uploaded_file('C:\xampp\htdocs\tp1-web\\', 'C:\xampp\htdocs\tp1-web\upload\\'. 'hahah');





            fwrite($fichier, $Nom);
            fwrite($fichier, $Prenom);
            fwrite($fichier, $Age);
            fwrite($fichier, $Num);
            fwrite($fichier, $Email);
            fwrite($fichier, $Filiere);
            fwrite($fichier, $Annee);
            fwrite($fichier, $module);
            fwrite($fichier, $club);
            fwrite($fichier, $Remarque);
            fwrite($fichier, $File);
            fwrite($fichier, $Espace);

            

            echo  ' <h2>Les info sont enregistree dans le fichier .</h2>';
            echo "<a href='formulaire.html'  ><button style='padding :15px 50px;border:none;border-radius:30px;margin:10px;background:#1352BC;color:#fff'>Retour</button></a>";
            
    


}


if(isset($_POST['modifier'])) {

    echo "

    <head>
    <link rel='stylesheet' href='css/style.css'>

    
    </head>

        <form action='recap.php' method='post'>
            <h1>Ficher de Renseignements</h1>

            <!-- Renseignements  Personnels -->
            <fieldset >
                <legend>Renseignements Personnels</legend>

                <div class='Renseignements-Personnels'>

                    <div class='input-text'>
                        <label>Nom :</label>
                        <input type='text' name='nom' placeholder='Entrer votre nom' style='margin-left: 108px;' value= '{$_SESSION['nom']}' required>
    
                    </div>
                    <div class='input-text'>
                        <label>Prenom :</label>
                        <input type='text' name='prenom' placeholder='Entrer votre prenom 'style='margin-left: 89px;'value= '{$_SESSION['prenom']}'  required>
                    </div>
    
                    <div class='input-text'> 
                        <label>Age :</label>
                        <input type='text' name='age' placeholder='Entrer votre age' style='margin-left: 111px;' value= '{$_SESSION['age']}' required>
                        
                    </div>
                    <div class='input-text'>
                        <label>Numero de telephone :</label>
                         <input type='text' name='num_tele' placeholder='Entrer votre numero de telephone' value= '{$_SESSION['num_tele']}' required>
    
    
                    </div>
    
                    <div class='input-text'>
                        <label>Email :</label>
                        <input type='email' name='email' placeholder='Entrer votre email' style='margin-left: 99px;' value= '{$_SESSION['email']}' required>      
                    </div>
                    
                    
                </div>
               

            </fieldset>



            <!-- Renseignements  Academique -->


            <fieldset>

                    <legend>Renseignements Academique</legend>
                    <h4>Vous etes dans :</h4>

                    <div class='partie1'>
                        <div class='radio1'>

                            <label>2AP :</label>
                            <input type='radio' name='filiere' value = '2AP'   required>
                        </div>
                        <div class='radio1'>
                            <label>GSTR :</label>
                            <input type='radio' name='filiere' value = 'GSTR' required>
    
    
                        </div>
                        <div class='radio1'>
                            <label>GI :</label>
                            <input type='radio' name='filiere' value = 'GI' required>
    
                        </div>
                        <div class='radio1'>
                            <label>SCM :</label>
                            <input type='radio' name='filiere' value = 'SCM' required>
                        </div>
                        <div class='radio1'>
                            <label>GC :</label>
                            <input type='radio' name='filiere' value = 'GC' required>
    
                        </div>
                        <div class='radio1' style='border:none' >
                            <label>MS :</label>
                            <input type='radio' name='filiere' value = 'MS'required>
                        </div>



                    </div>


                    <div class='partie2'>
                    <div class='radio2' >
                        <label>1 ere annee :</label>
                        <input type='radio' name='annee'  value='1 ere' required>
                    </div>
                    <div class='radio2' >
                        <label>2 eme annee :</label>
                        <input type='radio' name='annee' value ='2 eme'required>
                    </div>
                    <div class='radio2' style='border:none'>
                        <label>3 eme annee :</label>
                        <input type='radio' name='annee' value='3 eme' required>
                    </div>




                    </div>
                    <div class='partie3'>
                        <h4>Modules suivi cette annee :</h4>

                        <div class='checkbox1'>

                            <label>Pro Av :</label>
                            <input type='checkbox' name='module[]' value='Programmation avancee'>
                        </div>
                        <div class='checkbox1'>
                            <label>Compilation :</label>
                            <input type='checkbox' name='module[]' value='Compilation'>
    
    
                        </div>
                        <div class='checkbox1'>
                            <label>Reseau Av :</label>
                            <input type='checkbox' name='module[]' value='Reseau av'>
    
                        </div>
                        <div class='checkbox1'>
                            <label>Web avancee :</label>
                            <input type='checkbox' name='module[]' value='Web avancee'>
                        </div>
                        <div class='checkbox1'>
                            <label>POO :</label>
                            <input type='checkbox' name='module[]' value='POO'>
    
                        </div>
                        <div class='checkbox1' >
                            <label>BD :</label>
                            <input type='checkbox' name='module[]' value='BD'>
                        </div>
                        



                    </div>
                    <div class='partie4'>
                 
                   
                        <div>
                            <p>Nombre de projet realiser cette annee</p>
                            <select  name='projet'>
                                    <option  value='1'>1</option>
                                    <option  value='2'>2</option>
                                    <option  value='3'>3</option>
                                    <option  value='4'>4</option>
    
                            </select>
    
    
                        </div>



                    </div>
                   


                   
                   
            
                

            </fieldset>
            <fieldset>
                <legend>Vos remarques</legend>
                <textarea rows='5' cols='50' style='margin-left:150px' name='remarque'></textarea>
                <input type='file' name='File' id='File'>



            </fieldset>
            <div style='margin-left:280px;margin-top:20px'>
                <input type='submit' name ='submit' value='Envoyer'>
                <input type='reset' name ='reset' value='Effacer'>
            </div>
          



        </form>
        

        ";


}

                ?>