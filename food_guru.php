<!DOCTYPE html>
<html>
    <head>
        <title>Food Guru</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleregister.css">
    </head>
    <body style='background-color: wheat'>
        <img src="">
        <h1><i>Food Guru</i></h1>
        
        <p><i><strong>Welcome to Food Guru. Home to food enthusiasts all over the world. We bring people together
                    for the love of food.</strong></i></p>
        <br>
        <h3><strong> Live. Eat. Love.</strong></h3>
        <h4><strong> est. 2020 </strong></h4>
        <p>Please sign in or sign up to access our grocery.</p>
        
        <fieldset style='background-color: wheat'>
            <br>
            <fieldset>
                <legend><i><strong>Existing Foodie</strong></i></legend><br>
                <form action="user.php" method="post">
                    <label for="email">Email: </label>
                    <input type="email">
                    <br><br>
                    <label for="pass">Password: </label>
                    <input type="password" id="pass" name="user_password">
                    <br><br>
                    <button style="background-color: wheat" type="submit"><strong>Log in</strong></button>
                    <button style="background-color: wheat" type="reset"><strong>Clear</strong></button>
                    <br><br>
                </form>
        </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i><strong>New Foodie</strong></i></legend><br>
            <form action="mailto:thefoodie@foodguru.co.ke" method="post">
                <label for="fname">First Name: </label>
                <input type="text" id="fname" name="first_name">
                <br><br>
                <label for="sname">Second Name: </label>
                <input type="text" id="sname" name="second_name">
                <br><br>
                <label for="email_add">Email: </label>
                <input type="email" id="email_add" name="email_address">
                <br><br>
                <label for="dob">Birthday: </label>
                <input type="date" id="dob" name="birthday">
                <br><br>
                <label for="phone">Phone Number: </label>
                <input type="tel" id="phone" name="phone_number">
                <br><br>
                <button style="background-color: wheat" type="submit"><strong>Sign Up</strong></button>
                <button style="background-color: wheat" type="reset"><strong>Clear</strong></button>
                <br><br>
            </form>
        </fieldset>
            <br>
        </fieldset>
        <br>
        <fieldset style='background-color: wheat'>
            <h3>About us</h3>
            <img src='data:image/png;base64,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'>
            <p>It's pretty obvious we love food. We sell food, talk about food, post pictures and videos of food
            , go out to eat food, deliver food, order food. You name it.
            
            This organization was founded in the year<strong> 2020 </strong>as a way to help reduce poor nutrition in the country</p>
        </fieldset>
        <br>
        <fieldset>
            <br>
            <h3><strong>Contact us</strong></h3>
            <p>To talk to us, please contact us on :</p>
            <p>Email: <a style="background-color: bisque" href="mailto:info@foodguru.co.ke"><i>info@foodguru.co.ke</i></a></p>
            <p>Telephone: <a>0208474632</a></p>
        </fieldset>
        <br><br>
    </body>
</html>
