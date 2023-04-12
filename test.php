<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
      <table border=2>    
            <tr>
            <td> <strong>Récapitulatif !!!!! </strong> </td>
            </tr>
            <tr>
            <td>
             <?php 
             if (isset($_POST['Nom']) && isset($_POST['Prenom']))
             { echo "Vous etes:"." ".$_POST['Nom']." ".$_POST['Prenom']."</br>";}?>


            <?php if (isset($_POST['Age']))
            {echo "Vous avez:"." ".$_POST['Age']."ans"."<br>";}?>

            <?php echo "Vous parlez:"?>
             <ul> 
            <li>

                <?=$_POST['langue']?></li>
             </ul>
             <?php echo "Vous avez des compétences informatiques en:"?>
           <ul> <?php
                foreach($_POST['comp'] as $val) { ?>
                <li> <?php echo "$val"; ?> </li>
               <?php } ?>
            
             
              </ul>
            </td>
             </tr> 
            </table>
           
            
        
             
</body>
</html>