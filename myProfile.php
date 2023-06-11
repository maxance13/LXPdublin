<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | FitHome</title>
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
                <input type="file" name="ChangePic" id="ChangePic" class="BrowsePic">
            </div>
        </div>

        <form action="#" method="POST" class="PersonalInformation">
            <div>
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" id="FirstName" value="John">
            </div>

            <div>
                <label for="LastName">Last Name</label>
                <input type="text" name="LastName" id="LastName" value="Federal">
            </div>

            <div>
                <label for="Mail">E-mail</label>
                <input type="email" name="Mail" id="Mail" value="John.Federal@fithome.ie">
            </div>

            <div>
                <label for="PhoneNumber">Phone Number</label>
                <input type="tel" name="PhoneNumber" id="PhoneNumber" value="+353 0123456789">
            </div>

            <input type="submit" value="UPDATE" class="UpdatePersonalInformation">
        </form>
    </main>

    <div class="SessionsFutur">
        <p class="SessionAl">Sessions already scheduler</p>
        <div class="Sessions">
            <ul>
                <li>no session yet</li>
            </ul>
        </div>
    </div>

    <?php require('.\footer.php') ?>
</body>
</html>