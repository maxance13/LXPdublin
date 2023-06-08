<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile |FitHome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="Img/logo_startp-removebg-preview - Copie.png">
</head>
<body>
    <?php require('.\header.php') ?>

    <p class="Home_Rep">> <a href="index.php" class="Home_Rep1">Home</a> > <a href="myProfile.php" class="Home_Rep1">My Profile</a></p>
    
    <button class="LogOut">LOG OUT</button>

    <main class="mainMyProfile">
        <div class="ProfilPicDiv">
            <h1>My Profile</h1>
            <img src="Img/103061783.jpeg" alt="Profil pic" width="200px" height="200px" class="PicUSer">
            <div style="display: flex;" class="ChangePic">
                <label for="ChangePic">change your photo</label> 
                <input type="file" name="ChangePic" id="ChangePic">
            </div>
        </div>

        <form action="#" method="POST">
            <div>
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" id="FirstName" placeholder="John">
            </div>

            <div>
                <label for="LastName">Last Name</label>
                <input type="text" name="LastName" id="LastName" placeholder="Federal">
            </div>

            <div>
                <label for="Mail">E-mail</label>
                <input type="email" name="Mail" id="Mail" placeholder="John.Federal@fithome.ie">
            </div>

            <div>
                <label for="PhoneNumber">Phone Number</label>
                <input type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="+353 0123456789">
            </div>

            <input type="submit" value="UPDATE">
        </form>
    </main>

    <div>
        <p>Sessions already scheduler</p>
    </div>

    <?php require('.\footer.php') ?>
</body>
</html>