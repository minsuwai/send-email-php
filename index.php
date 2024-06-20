<?php
    include "mail.php";

    //send_mail($recipient,$subject,$message)

    $error = "";
    if(count($_POST) > 0){

        $recipient = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(empty($recipient)){
            $error .= "Recipient can not be empty<br>";
        }

        if(empty($subject)){
            $error .= "Subject can not be empty<br>";
        }

        if(empty($message)){
            $error .= "Message can not be empty<br>";
        }

        if($error == ""){
            if (send_mail($recipient,$subject,$message)) {
                $error .= "Message sent successfully";
            } else {
                $error .= "Message not sent";
            }
        }
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        form{
            width: 50%;
            margin: auto;
            position: relative;
            margin-top: 130px;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
        <h3>Send Email</h3>

        <div>
            <?php if($error != ""): ?>
                <span class="text-danger"><?= $error ?></span>
            <?php endif; ?>
        </div>

        <div class="mb-3">

            <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Receipent Email">
            
            <!-- <label for="exampleFormControlInput1" class="form-label">Subject</label> -->
            <input type="text" name="subject" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Subject">
        
        </div>

        <div class="mb-3">
            <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>

        <button type="submit" value="Send" class="btn btn-primary">Send</button>
    </form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>