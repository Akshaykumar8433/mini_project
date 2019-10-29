<html>
    <head>
        <title>Hall Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://fonts.googleapis.com/css?family=Chilanka|Hepta+Slab&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <style>
            *{
                box-sizing: border-box;
            }
            .container{
                width: 100%;
            }
            .container .col{
                width: 50%;
                float: left;
                padding: 10px;
            }
            .slideshow-container{
                position: relative;
                /* margin: auto; */
            }
            .mySlides{
                display: none;
            }
            .prev,.next{
                cursor: pointer;
                position: absolute;
                top: 50%;
                margin-top: -22px;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }
            .next{
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            .prev:hover .next:hover{
                background-color:  rgba(0,0,0,0.8);
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
            .btn {
                border: none;
                background-color: inherit;
                padding: 14px 28px;
                width: 180px;
                font-size: 16px;
                cursor: pointer;
                margin-left: 30%;
                display: inline-block;
            }
            .success {
                background-color: #4CAF50;
                color: white;
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
        <h1 align="center" style="font-family: 'Hepta Slab', serif;">Public Hall</h1>
        <div class="container">
            <div class="col slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="images/slide1.jpg" style="width:100%;height:70%;">
                <!-- <div class="text">Caption Text</div> -->
                </div>

                <div class="mySlides fade">
                <img src="images/slide2.jpg" style="width:100%;height:70%;">
                <!-- <div class="text">Caption Two</div> -->
                </div>

                <div class="mySlides fade">
                <img src="images/slide3.jpg" style="width:100%;height:70%;">
                <!-- <div class="text">Caption Three</div> -->
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
            <div class="col" style="font-family: 'Poppins', sans-serif;">
                <h1 style="margin: 0 20px">Features</h1>
                <ul style="margin-left:20px;">
                    <li>React is a JavaScript library for building user interfaces. It is maintained by Facebook and a community of individual developers and companies.</li>
                    <li>HTML5 has the following new attributes: autofocus, form, formaction, formenctype, formmethod, formnovalidate, and formtarget.</li>
                    <li>Specifies where to send the form-data when a form is submitted. Only for type="submit"</li>
                    <li>Example text lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor.</li>
                    <li>Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. </li>
                </ul>
                <button class="btn success">BOOK</button>
            </div>
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