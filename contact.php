<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
    <title>Contact | FitHome</title>
</head>
<body>
    <?php require('.\header.php') ?>

    <main>
        <p class="Home_Rep">> <a href="index.php" class="Home_Rep1">Home</a> > <a href="contact.php" class="Home_Rep1">Contact</a></p>

        <div class="ContactUs">
            <h1>CONTACT US!</h1>
        </div>

        <section class="mainSectionContact">
            <form action="#" method="POST" class="formContact">
                <div class="input1contact">
                    <input type="text" placeholder="First Name" id="FirstName" name="FirstName" class="inputName">
                    <input type="text" placeholder="Last Name" id="LastName" name="LastName" class="inputName">
                </div>
                <div class="input2contact">
                    <input type="email" placeholder="E-mail" id="email" name="email">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                </div>
                <input type="submit" value="SEND MESSAGE" class="SubmitContact">
            </form>

            <div class="InfoContact">
                <div class="MobileMailAdress">
                    <img src="Img/icons8-téléphone-50.png" alt="Mobile" width="35px">
                    <p>+353 01 344 1111</p>
                </div>
                <div class="MobileMailAdress">
                    <img src="Img/icons8-courrier-24.png" alt="Mail" width="35px"> 
                    <p>contact@fithome.com</p>
                </div>
                <div class="MobileMailAdress">
                    <img src="Img/icons8-marqueur-50.png" alt="Adress" width="35px">
                    <p>50, Dublin 9</p>
                </div>
            </div>
        </section>

        <div class="iframeContact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1821.9346848307207!2d-6.24971133557703!3d53.33736703672681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670f9109bdfdaf%3A0xb7b46bee6f2cb3a5!2sVivaBody%20Health%20Studio!5e0!3m2!1sfr!2sie!4v1686130917933!5m2!1sfr!2sie" width="70%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <?php require('.\footer.php') ?>
</body>
</html>