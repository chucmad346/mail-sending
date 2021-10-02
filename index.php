<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel = "stylesheet" type = "text/css" href = "index.css">
</head>
<body>
    <h1>contact us</h1>
    <p>Write your message below</p>
    <form action = "send.php" method = "post">
        <input type="text" name="name" placeholder = "what is your name?"> 
        <input type="email" name="email" placeholder = "what is your email?">
        <input type="text" name="subject" placeholder = "what is the purpose of this mail?">
        <textarea name="message" placeholder = "write your message"></textarea>
        <button type="submit" name = "submit">SEND MAIL</button>
    </form>
</body>
</html>