<?php
 session_start();
    if(isset($_POST["user"], $_POST["email"], $_POST["senha"]));{
     if(($_POST["user"]=== 'paulo' || $_POST["user"] === 'Paulo') && $_POST["senha"]==='projetosite' && $_POST["email"] === 'paulohenri@gmail.com'){
         $_SESSION["user"] = $_POST["user"];
         header('Location:categoria.php');
     }
     else{
         header('Location:loginf.php?erro=true');
         exit;
      }  
    }
?> 

<div style = "background-color:coral; margin: 10px; fonte-family: arial;">
<?php
 echo $erro ?? '';
?>
</div>