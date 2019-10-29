<?php
    session_start();
    $hall_name=$_GET['hall_name'];
    $_SESSION['hall_name']=$hall_name;
?>
<html>
    <head>
        <title>Hall Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="icon" type="image/ico" href="images/logo.png" />
        <style>
            *{
                box-sizing: border-box;
            }
            .container{
                position: relative;
                width: 100%;
                padding: 10px;
                margin-bottom: 18px;
            }
            .overlay {
                position: absolute;
                top: 10px;
                height: 90.2%;
                width: 98.5%;
                opacity: 0;
                transition: .5s ease;
                background-color: rgba(0,0,0,0.5);
            }
            .container:hover .image {
                opacity: 0.3;
            }
            .hall_img{
                width:100%;
                height:550px;
            }
            .overlay:hover{
                opacity: 1;
            }
            .text {
                color: white;
                font-size: 21px;
                width: 80%;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            .mySlides{
                display: none;
            }
            .next{
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            .prev:hover .next:hover{
                background-color:  rgba(0,0,0,0.8);
            }
            #main-footer {
                text-align: center;
                background: #444;
                color: #fff;
                padding: 20px;
            }
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }
            .active, .dot:hover {
              background-color: #717171;
            }
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }
            .changes{
                margin-left: 40%;
            }
            .btn {
                border: none;
                background-color: #16F1D4;
                color: white;
                position: absolute;
                margin: -10px 10px 0 0;
                padding: 14px 28px;
                width: 180px;
                font-size: 16px;
                cursor: pointer;
                right: 0;
            }
            /* Footer css*/
            .app-footer{
                display: inline-flex;
                padding: 10px;
                background-color: #333;
                color: #ddd;
                width: 100%;
            }
            @media screen and (max-width: 1024px){
                .overlay{
                    width: 98%;
                }
            }
            @media screen and (max-width: 900px){
                .overlay{
                    width: 97.7%;
                }
            }
            @media screen and (max-width: 600px){
                .overlay{
                    width: 96.7%;
                }
                .text{
                    font-size: 19px;
                }
                .changes{
                    margin-left: 25%;
                }
            }
            @media screen and (max-width: 450px){
                .text{
                    font-size: 17px;
                    width: 92%;
                }
                .overlay{
                    width: 95.3%;
                    height: 88.8%;
                }
                .hall_img{
                    height: 470px;
                }
                .changes{
                    margin-left: 1%;
                }
            }
            @media screen and (max-width: 375px){
                .overlay{
                    width: 94.3%;
                    height: 88.4%;
                }
                .text{
                    width: 100%;
                }
                .hall_img{
                    height: 450px;
                }
                .changes{
                    font-size: 15px;
                }
                .dot{
                    height: 12px;
                    width: 12px;
                }
                .btn{
                    width: 130px;
                }
            }
            @media screen and (max-width: 320px){
                .text{
                    font-size: 15px;
                }
                .changes{
                    font-size: 14px;
                }
                .dot{
                    margin: 0 0;
                }
            }
            @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }
        </style>
    </head>
    <body>
        <h1 align="center" id="hall_name" style="font-family: 'Hepta Slab', serif;font-size: 42px;"><?php echo($hall_name);?></h1>
        <div class="container">
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="images/slide1.jpg" class="hall_img">
                    <!-- <div class="text">Caption Text</div> -->
                </div>

                <div class="mySlides fade">
                    <img src="images/slide2.jpg" class="hall_img">
                    <!-- <div class="text">Caption Two</div> -->
                </div>

                <div class="mySlides fade">
                    <img src="images/slide3.jpg" class="hall_img">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="overlay" style="color:white">
                    <div class="text">
                        <h1 align="center">Specification</h1>
                        <ul>
                            <li>Vihang's Banquet Hall, Ghatkopar West, Mumbai is an ideal venue to host your pre-wedding functions like mehendi, sangeet and reception ceremony. Located in Gopal Lane and situated near Old Post Office, this venue is well-connected and easily accessible. This place is home to a beautiful banquet hall and is perfect to ring in your much sought-after events.</li>
                            <li>Vihang's Banquet Hall, Mumbai has a banquet hall for having an intimate function with close family and friends. The gorgeous décor of the venue gives a special touch to your big day. The venue has an inviting ambiance which makes everyone feel welcomed.</li>
                            <li>You can thus sit back and enjoy your important event while all the essentials are beautifully taken care of. Ticking all the right boxes, this venue gives you every reason to opt for it. Plan your upcoming events at Vihang's Banquet Hall, Ghatkopar West, Mumbai to make them a grand success.</li>
                        </ul>
                    </div>
                </div>
                <br>
                <!-- The dots/circles -->
                <div class="changes">
                    <a onclick="plusSlides(-1)" style="text-decoration: underline;font-color: green;cursor:pointer">&#10094;&nbspPrevies&nbsp</a>
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <a onclick="plusSlides(1)" style="text-decoration: underline;font-color: green;cursor:pointer">&nbspNext&nbsp&#10095;</a>
                    <button class="btn" name="book" onclick="location.href='booking_form'">Book Now</button>
                </div>
            </div>
        </div>
        <h1>Location</h1>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="contmap">
        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
            var setting = {"height":512,"width":1500,"zoom":4,"queryString":"India","place_id":"ChIJkbeSa_BfYzARphNChaFPjNc","satellite":false,"centerCoord":[21.715551619331528,82.75252935000003],"cid":"0xd78c4fa1854213a6","cityUrl":"/india","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"60399"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=60399';
            s.async = true;
            s.onload = function (e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
            })();</script><a href="https://1map.com/map-embed?embed_id=60399">1map.com</a>
        </div>
        <div id="main-footer">
            <p>Hall of Fame &copy; 2019, All Rights Reserved</p>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1} 
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block"; 
                dots[slideIndex-1].className += " active";
            }
        </script>
    </body>
</html>