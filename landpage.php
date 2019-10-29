<html>
    <head>
        <title>Main Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/ico" href="images/logo.png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/our_team.css">
        <link rel="stylesheet" type="text/css" href="css/contact_us.css">
    </head>
    <body>                                              
        <script>
            function ajax_call(method,url,data){
                var request = $.ajax({
                    url: url,
                    type: method,
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: data
                });

                request.fail(function(jqXHR, textStatus) {
                    alert( "Request failed: " + textStatus );
                });

                return request;
            }
            function fun_search(){
                var search_input = $('#search_box').val();
                // var search_input = document.getElementById('#search_box').value;
                if(search_input){
                    var data = {"search_input":search_input};
                    var formdata=new FormData();
                    formdata.append('values',JSON.stringify(data));
                    var request = ajax_call("POST","search_result.php",formdata);
                    request.done(function(msg){
                        msg=JSON.parse(msg);
                        if(msg=="no_result"){
                            alert("No Result Found");
                        }else{
                            window.location=msg;
                        }
                    })
                }
            }
            $(window).scroll(function() {
                var height = $(window).scrollTop();
                if (height > 100) {
                    $('#back2Top').fadeIn();
                } else {
                    $('#back2Top').fadeOut();
                }
            });
            $(document).ready(function(){
                $("#welcome").fadeIn(3000);
                $(function() {
                    $('.page-scroll').click(function(event) {
                        var $anchor = $(this);
                        $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1500);
                        $anchor.addClass('active');
                        event.preventDefault();
                    });
                });
                $('#search_box').keypress(function(event){
                    if(event.which===13)
                        fun_search();
                });
                $(document).ready(function() {
                    $("#back2Top").click(function(event) {
                        event.preventDefault();
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        return false;
                    });

                });
            });
        </script>
        <div class="nav-bar">
            <!-- <a href="landing" style="float: left;text-decoration:none;font-size:15px;color:white;padding:">Halls</a> -->
            <ul id="myTopnav">
                <a></a>
                <a class="page-scroll" href="#contact">Contact</a>
                <a class="page-scroll" href="#our_team">Our Team</a>
                <a class="page-scroll" href="#about">About</a>
                <a class="page-scroll" href="#home" class="active">Home</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="material-icons">menu</i>
            </a>
            </ul>
        </div>  
        <div id="home">
            <div class="container">
                <div class="slide-figure">
                    <img class="slide" src="images/slide1.jpg">
                    <img class="slide" src="images/slide2.jpg">
                    <img class="slide" src="images/slide3.jpg">
                    <figcaption class="slide-caption">
                        <div class="search-box" style="height: 45px">
                            <input class="search-input" id="search_box" type="text" style="margin-left: 15px;margin-top: 2px" placeholder="Search By City Name">
                            <a class="search-btn" id="search" onclick="fun_search()" style="cursor: pointer">
                                <i class="material-icons">search</i>
                            </a>
                        </div>
                        <p align="center" id="welcome" style="position: absolute;left: 50%;transform: translate(-50%,-50%);">Welcome</p>
                        <p align="center" id="instruction">
                        Halls present you Ac/Non Ac Best out Best of halls on your budgets for Meeting,Wedding,parties etc.Search by city name in above search box to locate best hall's in your city.</p>
                    </figcaption>
                </div>
                <hr>    
            </div>
        </div>  
        <div id="about" class="about-container">
            <div class="content">
                <h1 style="margin-bottom: 4%;">
                    <center><u><i>About</i></u></center>
                </h1>
                <p>
                Welcome to The Halls, we provide you with best services all over the country.
                Our site helps you to find one the best halls at any location in this country.
                With best APIs, animations and more different features we provide you this
                enhanced site where you can easily decide which event where you can
                organise. Some of the best halls are linked to our site.
                </p>
                <p>So, you will get the experience of some of these best halls.With best employees
                    present at our backend part you can easily ask doubts to them and they’ll
                    come up with solution every time.            
                </p>
                <p>
                    It is our responsibility to ensure that every customer who visits our site and
                    book a hall from our site should again return to our site. With best employees
                    present at our backend part you can easily ask doubts to them and they’ll
                    come up with solution every time.
                </p>
            </div>
        </div>
        <hr>
        <div id="our_team" class="our_team">
            <h1>
                <center><u><i>Our Team</i></u></center>
            </h1>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/me.JPG" class="images" alt="Akshaykumar Deekonda" style="width:100%; height: 265px;">
                        <div class="card_container">
                            <h2>Akshaykumar Deekonda</h2>
                            <p class="title">CEO & Founder</p>
                            <p>Master in Computer Science</p>
                            <p>akshay@gmail.com</p>
                            <!-- <div class="row" style="margin-left: 10%">
                                <a href="#"><img src="images/instagram.png" class="insta" style="width: 30px;"></a>
                                <a href="#"><img src="images/facebook.png" style="width: 30px;margin-left: 20%"></a>
                                <a href="#"><img src="images/twitter.png" style="width: 30px;margin-left: 20%"></a>
                            </div> -->
                            <!-- <p><button class="button">Contact</button></p> -->
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                        <img src="images/mehul.jpg" class="images" alt="mehul gupta" style="width:100%; height: 265px;">
                        <div class="card_container">
                            <h2>Mehul Gupta</h2>
                            <p class="title">Board Director</p>
                            <p>Master in AI</p>
                            <p>mehulgupta@gmail.com</p>
                            <!-- <div class="row" style="margin-left: 10%">
                                <a href="#"><img src="images/instagram.png" class="insta" style="width: 30px;"></a>
                                <a href="#"><img src="images/facebook.png" style="width: 30px;margin-left: 20%"></a>
                                <a href="#"><img src="images/twitter.png" style="width: 30px;margin-left: 20%"></a>
                            </div> -->
                            <!-- <p><button class="button">Contact</button></p> -->
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <img src="images/gaurav.JPG" class="images" alt="gaurav kale" style="width:100%;height: 265px;">
                    <div class="card_container">
                        <h2>Gaurav Kale</h2>
                        <p class="title">Chief Board Director</p>
                        <p>Masters in Web Technology</p>
                        <p>gaurav.kale@gmail.com</p>
                        <!-- <div class="row" align="center">
                            <a href="#"><img src="images/instagram.png" class="insta" style="width: 30px;margin-left: 5%;"></a>
                            <a href="#"><img src="images/facebook.png" style="width: 30px;margin-left: 20%"></a>
                            <a href="#"><img src="images/twitter.png" style="width: 30px;margin-left: 20%"></a>
                        </div> -->
                        <!-- <p><button class="button">Contact</button></p> -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
            <section class="section2"> 
                <div class="contactform">
                <h5>Contact Form</h5>
                    <div>
                        <label for="firstname">
                            <i class="cntfrmicn fa fa-users material-icons">account_circle</i>
                            <input name="firstname" id="name" class="form-fields" type="text">
                        </label>
                        <label for="email">
                            <i class="cntfrmicn fa fa-envelope material-icons">email</i>
                            <input name="email" id="email" class="form-fields" type="text">
                        </label>
                        <label for="contact">
                            <i class="cntfrmicn fa fa-phone material-icons">phone</i>
                            <input name="contact" id="phone_no" class="form-fields" type="number">
                        </label>
                        <label for="textarea">
                            <i class="cntfrmicn fa fa-comment material-icons">comment</i>
                            <textarea class="form-fields" name="textarea" id="comment" cols="30" rows="10"></textarea>
                        </label>
                        <button class="form-fields button" value="Send" onClick="return contact();" type="submit">Send <i class="fa fa-paper-plane material-icons">send</i></button>
                    </div>
                </div>
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
                })();</script><a href="https://1map.com/map-embed?embed_id=60399">1map.com</a></div>
            </section>
        </div>

        <div id="main-footer">
            <p>Hall of Fame &copy; 2019, All Rights Reserved</p>
        </div>
        <a id="back2Top" title="Back to top" href="#">&#10148;</a>
        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
                var i;
                var x = document.getElementsByClassName("slide");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "nav-bar") {
                x.className += " responsive";
                } else {
                x.className = "nav-bar";
                }
            }
        </script>
        <script src="main.js"></script>
    </body>
</html>                                                                                         