<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Paul Yarangga</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full Name"><br>
            <input type="text" name="mail" placeholder="Your e-mail"><br>
            <input type="text" name="subject" placeholder="Subject"><br>
            <textarea name="message" placeholder="Mesagge"></textarea><br>
            <button type="submit" name="submit">SEND MAIL</button>

        </form>
    </main>
</body>
</html>