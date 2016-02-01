<?php
session_start();//on démarre la session
// $errors = [];
  $errors = array(); // on crée une vérif de champs
if(!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['message'])){
    header('Location: index.php#contact');
}else {
    if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {// on verifie l'existence du champ et d'un contenu
      $errors ['name'] = "Vous n'avez pas renseigné votre nom";
      }
    if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
      $errors ['mail'] = "Vous n'avez pas renseigné votre email";
      }
    if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
      $errors ['message'] = "Vous n'avez pas renseigné votre message";
      }
    //On check les infos transmises lors de la validation
      if(!empty($errors)){ // si erreur on renvoie vers la page précédente
      $_SESSION['errors'] = $errors;//on stocke les erreurs
      $_SESSION['inputs'] = $_POST;
      header('Location: contact.php');
      }else{
      $_SESSION['success'] = 1;
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
      $to = 'evan.guelard@gmail.com'; // Insérer votre adresse email ICI
      $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']) .' - ' . htmlspecialchars($_POST['email']);
      $message_content = '
      <table>
      <tr>
      <td><b>Emetteur du message:</b></td>
      </tr>
      <tr>
      <td>'. $subject . '</td>
      </tr>
      <tr>
      <td><b>Contenu du message:</b></td>
      </tr>
      <tr>
      <td>'. htmlspecialchars($_POST['message']) .'</td>
      </tr>
      </table>
      ';
    mail($to, $subject, $message_content, $headers);
      header('Location: index.php#contact');
      }
}