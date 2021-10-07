<?php
//Creare una variabile con un paragrafo di testo a vostra scelta.
$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, nesciunt tempora dolor earum quis maxime illo esse delectus et quas doloribus ex cum temporibus voluptas vel inventore similique reiciendis qui!';
$strLen = strlen($text);
$newText = trim($text);
//Una parola da censurare viene passata dall'utente tramite parametro GET.
$badword = $_GET['badword'];
$new_string = str_replace($badword, '***', $newText);
?>

<h1> <?php echo $text ?></h1>

<h2> <?php echo $strLen ?></h2>
<h2> <?php echo $text ?></h2>
<?php 
   echo $new_string
 ?>