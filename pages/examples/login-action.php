<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reuters | Hot Desk</title>
  
</head>
<body class="hold-transition login-page">
    <?php
        $strUserName = htmlspecialchars($_POST['user-name']);
        $strUserPwd = htmlspecialchars($_POST['user-password']);
        $cadena = $strUserName.",".$strUserPwd;
        try{
            //URL para mandar la infromación al API para que regrese la verificación
            $url = 'http://localhost:60863/api/login/'.base64_encode($cadena);
            
            $contents = file_get_contents($url);
            //Separar los valores de la cadena obtenida
            $array = explode(",", $contents);
            $cod = explode(":", $array[0]);
            $cod= substr($cod[1],1,-1);
            //Validar usario existente
            if($cod=="1"){
                $user = explode(":", $array[1]);
                $adm = explode(":", $array[2]);
                $user = substr($user[1],1,-1);
                $adm = substr($adm[1],1,-2);
                //Validar si es administrador o usuario
                if($adm=="1"){
                  header("Location: ../../indexAdmin.php?user=".$strUserName);
			    }else if($user=="1"){
                  header("Location: ../../index.php?user=".$strUserName);
			    }
		    }else{
                header("Location: ./login.html");
		    }
		}catch(PDOException $e){
             header("Location: ./login.html");
		}

    ?>
</body>
</html>