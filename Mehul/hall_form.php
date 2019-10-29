<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="Mystyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="validation.js"></script>
    </head>
    <body>
        <div class="box">
            <h1 align="center">Registration </h1>
            <form class="floating-form">
                <p align="center" style="margin-bottom: 22px;color: red" id="message"></p>
                <div class="floating-label">
                    <input type="text" class="floating-input" placeholder=" " id="fname">
                    <label>Fisrtname</label>
                </div>
                <div class="floating-label">
                    <input type="text" class="floating-input" placeholder=" " id="lname">
                    <label>Lastname</label>
                </div>
                <div class="floating-label">
                    <input type="text" class="floating-input" placeholder=" " id="email">
                    <label>Email Id</label>
                </div>
                <div class="floating-label">
                    <input type="text" class="floating-input" placeholder=" " id="address">
                    <label>Address</label>
                </div>
                <div class="floating-label">
                    <input type="number" class="floating-input" placeholder=" "  id="num">
                    <label>phone no</label>
                </div>
                <input type="submit" onclick="return booking();" value="submit">
            </form>
        </div>
    </body>
</html>