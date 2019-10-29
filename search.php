<?php
    include('sql.php');
    $search = $_GET['search'];
    if($search){
        $result = mysqli_query($conn, "SELECT hall_name,address,images FROM halls h join hall_detail hd on h.hall_id=hd.hall_id WHERE city='{$search}'");
        if(mysqli_num_rows($result)){
            $arr= [];
            while($row = mysqli_fetch_assoc($result)){
                $inner_arr =["hall_name"=>ucwords($row['hall_name']),"address"=>ucwords($row['address']),"image"=>$row['images']];
                array_push($arr, $inner_arr);
            }
        }else{
            echo "<script>alert('No Result Found')</script>";
            header('Location: landing');
        }
    }else{
        header('Location: landing');
    }
?>
<html>
    <head>
        <title>Halls</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/ico" href="images/logo.png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/search_style.css">
    </head>
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
        $(document).ready(function(e){    
            $('#search_box').keypress(function(event){
                if(event.which===13)
                    fun_search();
            });
        });
        function hall_detail(hall_name){
            window.location='hall.php?hall_name='+hall_name;
        }
    </script>
    <body style="font-family: 'Poppins', sans-serif;background-color: rgba(96, 125, 139, 0.3);">
        <div class="search-box" style="height: 30px;top: 5%;">
            <input class="search-input" type="text" id="search_box" style="margin-left: 20px;margin-top: 4px" placeholder="Search By City Name">
            <a class="search-btn" id="search" onclick="fun_search()" style="cursor: pointer">
                <i class="material-icons">search</i>
            </a>
        </div>
        <div class="search_area">
            <?php 
                foreach($arr as $arr1){
                    echo "
                        <div class='search_result' onclick='hall_detail(this.id);' id='{$arr1['hall_name']}'>
                            <img src='images/{$arr1['image']}'>
                            <div class='result_content'> 
                                <h1 id='hall_name'>{$arr1['hall_name']}</h1>
                                <div class='para'>
                                    <p>
                                        {$arr1['address']}
                                    </p>
                                    <p>
                                        Testing of this particular page,and this content is fake.
                                    </p>
                                </div>
                                <div class='star'>
                                    <span class='material-icons checked'>star</span>
                                    <span class='material-icons checked'>star</span>
                                    <span class='material-icons checked'>star</span>
                                    <span class='material-icons checked'>star</span>
                                    <span class='material-icons checked'>star</span>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
            <!-- <div class="search_result">
                <img src="images/slide2.jpg">
                    <a href="images/slide2.jpg"><img src="images/slide2.jpg"></a>
                <div class="result_content"> 
                    <h1 id="hall_name">Happy Hall</h1>
                    <div class="para">
                        <p>
                            MIG Colony, Adarsh Nagar, Worli, Mumbai, Maharashtra 400030.
                            2R8C+F9 Mumbai, Maharashtra.
                        </p>
                        <p>
                            Testing of this particular page,and this content is fake.
                        </p>
                    </div>
                    <div class="star">
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                    </div>
                </div>
            </div> -->
            <!-- <div class="search_result">
                    <img src="images/slide3.jpg">
                <a href="images/slide3.jpg"><img src="images/slide3.jpg"></a>
                <div class="result_content"> 
                    <h1>Public Hall</h1>
                    <div class="para">
                        <p>
                            MIG Colony, Adarsh Nagar, Worli, Mumbai, Maharashtra 400030.
                            2R8C+F9 Mumbai, Maharashtra.
                        </p>
                        <p>
                            Testing of this particular page,and this content is fake.
                        </p>
                    </div>
                    <div class="star">
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons">star</span>
                    </div>
                </div>
            </div>
            <div class="search_result">
                <img src="images/slide1.jpg">
                <a href="images/slide1.jpg"><img src="images/slide1.jpg"></a>
                <div class="result_content"> 
                    <h1>Satyam Bhavan</h1>
                    <div class="para">
                        <p>
                            MIG Colony, Adarsh Nagar, Worli, Mumbai, Maharashtra 400030.
                            2R8C+F9 Mumbai, Maharashtra.
                        </p>
                        <p>
                            Testing of this particular page,and this content is fake.
                        </p>
                    </div>
                    <div class="star">
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons checked">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                </div>
            </div> -->
        </div>
    </body>
    <!-- <footer class="app-footer" style="margin-bottom: 0px;position: relative;">
        <div>
            <a>Hall's</a>
            <span>&copy; 2019</span>
        </div>
        <span>Powered by</span>
        <a href="#">Hall's</a>
        <div class="ml-auto">&nbsp;
            <span>Powered by</span>
            <a href="#">Hall's</a>
        </div>
    </footer> -->
</html>