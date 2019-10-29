function booking(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var phone = document.getElementById("num").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;
    var date = document.getElementById('date').value;
    var compare_date = new Date(date);
    var today = new Date();
    // var today_date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var hall_name =  document.getElementById('hall_name').value;
    if(!check_is_not_null(fname)){
        document.getElementById("message").innerHTML="Enter First name";
        return false;
    }else{
        document.getElementById("message").innerHTML="";
    }
    if(!check_is_not_null(lname)){
        document.getElementById("message").innerHTML="Enter Last name";
        return false;
    }else{
        document.getElementById("message").innerHTML="";
    }
    if(!check_is_not_null(email)){
        document.getElementById("message").innerHTML="Enter Email ID";
        return false;
    }else if(!check_email(email)){
        document.getElementById("message").innerHTML="Invalid email ID";
        return false;
    }else{
        document.getElementById("message").innerHTML="";
    }
    if(!check_is_not_null(date)){
        document.getElementById('message').innerHTML="Choice date";
        return false;
    }else if(compare_date<=today){
        document.getElementById('message').innerHTML="Choice Proper date.";
        return false;
    }
    else{
        document.getElementById('message').innerHTML="";
    }
    if(!check_is_not_null(address)){
        document.getElementById("message").innerHTML="Enter Address";
        return false;
    }else{
        document.getElementById("message").innerHTML="";
    }
    if(!check_is_not_null(phone)){
        document.getElementById("message").innerHTML="Enter phone number";
        return false;
    }else if(phone.length!=10){
        document.getElementById("message").innerHTML="Phone number must be 10 digits";
        return false;
    }
    else{
        document.getElementById("message").innerHTML="";
    }
    var data = {"fname":fname,"lname":lname,"email":email,"phone":phone,"address": address,"date":date,"hall_name":hall_name};
    var formdata=new FormData();
    formdata.append('values',JSON.stringify(data));
    var request = ajax_call("POST","booking.php",formdata);

    request.done(function(msg) {
        msg=JSON.parse(msg);
        if(msg.present){
            alert(msg.status);
        }
        else{
            var formdata1=new FormData();
            formdata1.append('value',JSON.stringify({"email": email}));
            var mail_check = ajax_call('POST','con_mail2.php',formdata1);
            mail_check.done(function(msg1){
                msg1=JSON.parse(msg1);
                if(msg1.message==="Mail Send"){
                    alert("Booked Successfully");
                }
            })
            window.location="landing";
        }
    });
}

function check_is_not_null(value){
    if(value.length>0)
        return true;
    else return false;
}

function check_email(login_email){
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(login_email)){
        return true;
    }
    else{return (false)}
}

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