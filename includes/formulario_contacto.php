 <?php

// CONEXIÓN A BASE DE DATOS EN LOCAL HOST
    include 'dbconnection.php';

    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $query = "INSERT INTO formulario_contacto(nombre_completo,email,asunto,mensaje) 
              VALUES('$nombre_completo','$email','$asunto','$mensaje')";
    
    $ejecutar = mysqli_query($con, $query);

    if($ejecutar){
        echo '
            <script>
                alert("¡Mensaje enviado exitosamente!");
                window.location = "../index.php";
            </script>
        ';
    }

// ENVIAR MEDIANTE GMAIL USANDO SERVIDOR

// if (isset($_POST['enviar'])){
//     if(!empty($_POST['nombre_completo'] && !empty($_POST['email']) && !empty($_POST['asunto']) && !
//         empty($_POST['mensaje']))){
//         $nombre_completo = $_POST['nombre_completo'];
//         $email = $_POST['email'];
//         $asunto= $_POST['asunto'];
//         $mensaje = $_POST['mensaje'];
//         $header = "From: jalu.nails1@gmail.com" . "\r\n";
//         $header .= "Reply-to: jalu.nails1@gmail.com" . "\r\n";
//         $header .= "X-Mailer: PHP/". phpversion();
//         $mail = @mail($email,$asunto,$mensaje,$header);
        
//         if($mail){
//                 echo '
//                     <script>
//                         alert("¡Mensaje enviado exitosamente!");
//                         window.location = "../index.php";
//                     </script>
//                 ';
//         }
//     }
// }


//Opcion 2 Para enviar correos por Email y Outlook

    // $nombre_completo = $_POST['nombre_completo'];
    // $email = $_POST['email'];
    // $asunto = $_POST['asunto'];
    // $mensaje = $_POST['mensaje'];


    //$nombre_completo = $nombre_completo;

    //Si quisieramos envie el mismo email a multiples correos
    /*$to = "somebody@example.com, ";
    $to .= "nobody@example.com, ";
    $to .= "somebody_else@example.com";
    */
//     $destinatario   = 'jalu.nails1@gmail.com';
//     //$asunto         = utf8_decode("Cupón de Descuento)";
//     $asunto = $asunto;
//     $cuerpoEmail    = ' 
//     <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
//         <tr>
//             <td style="padding: 0">
//                 <img style="padding: 0; display: block" src="https://drive.google.com/file/d/1_kS6rq7y_eR2xK-IlymdPmk0k_BNmBDE/view?usp=sharing" width="100%">
//             </td>
//         </tr>
        
//         <tr>
//             <td style="background-color: #ffffff;">
//                 <div style="color: #34495e; margin: 4% 10% 2%; text-align: center;font-family: sans-serif">
//                     <h2 style="color: #333; margin: 0 0 7px">Hola Gracias Por Tu Mensaje..!, '.$nombre_completo.' </h2>
//                     <p style="margin: 2px; font-size: 18px"> has recibido un códigos de descuento..
//                     <p>&nbsp;</p> 
//                     <p>Gracias por visitar nuestro sitio <strong>JaLu Nails</strong>...</p>
//                     <p>&nbsp;</p>
//                 </div>
//             </td>
//         </tr>

//         <tr>
//             <td style="padding: 0;">
//                 <img style="padding: 0; display: block" src="https://drive.google.com/file/d/1VLRN3h2TOjgQN6fk4vnbMDHcx6naDQXU/view?usp=sharing" width="100%">
//             </td>
//         </tr>
//     </table>
//     '; 

//     $headers  = "MIME-Version: 1.0\r\n"; 
//     $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//     $headers .= "From: Formulario Jalu Nails <jalu.nails1@gmail.com>\r\n"; 
//     $headers .= "Reply-To: "; 
//     $headers .= "Return-path:"; 
//     $headers .= "Cc:"; 
//     $headers .= "Bcc:"; 
//     $EnvioCriador    = mail($destinatario,$asunto,$cuerpoEmail,$headers);

//         if($EnvioCriador){
//                 echo '
//                     <script>
//                         alert("¡Mensaje enviado exitosamente!");
//                         window.location = "../index.php";
//                     </script>
//                 ';
//         }

// ?>



