function contact(){
    var name = document.getElementById("name").value;
    var comment = document.getElementById("comment").value;
    var phone = document.getElementById("phone_no").value;
    var email = document.getElementById("email").value;

    if(!check_is_not_null(name)){
        alert("Enter Name");
        return false;
    }
    if(!check_is_not_null(email)){
        alert("Enter Email ID");
        return false;
    }else if(!check_email(email)){
        alert("Invalid email ID");
        return false;
    }
    if(!check_is_not_null(phone)){
        alert("Enter phone number");
        return false;
    }else if(phone.length!=10){
        alert("Phone number must be 10 digits");
        return false;
    }
    if(!check_is_not_null(comment)){
        alert("Enter Comment");
        return false;
    }
    var data = {"name":name,"comment":comment,"email":email,"phone":phone};
    var formdata=new FormData();
    formdata.append('values',JSON.stringify(data));
    var request = ajax_call("POST","contact.php",formdata);

    request.done(function(msg) {
        msg=JSON.parse(msg);
        if(msg.present){
            alert(msg.status);
        }
        else{
            alert("Comment sent");
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