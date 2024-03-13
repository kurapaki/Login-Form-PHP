$(document).ready(function(){
    $("#username").on("change", function(){
        if($(this).val().length<6){ 
        $("#loginerror").text("minimum username 6 karakter")
    }
    });
    $("#password").on("change", (e) =>{
        if ($(e.currentTarget).value().length<6){
        $("#loginerror").text("minimum password 6 karakter")
        }
    });
    $("#newuser").on("click" , function(e){
        e.preventDefault();
        fdata=$("#loginform").serializeArray();
        //fdata.push({name: "router_class", value:"admin\\\Login"});
        fdata.push({name: "router_function", value:"insertUser"});
        formdata = $.param(fdata);
        $.ajax({
            type: "post",
            url: base_URL + "src/ctl/router.php",
            caches: false,
            data: formdata,
            dataType: "JSON",
            success: function (result) {
                if (result["response"]=== 0 ){
                    $("#loginerror").text(result["data"]);
                }else{
                    $("#newuser").hide();
                    $("#username").focus();
                }
            },
            error:function (xhr, status, error) {
       //         var_err = JSON.parse(xhr.responseText);
        //        alert(err.Message);
            }
        });
    });
    $("#login").on("click" , function(e){
        e.preventDefault();
        console.log($("#loginform").serialize());
        $.ajax({
            type: "POST",
            url: base_URL + "/src/ctl/router.php",
            caches: false,
            data: $("#loginform").serialize()+ "&router_class=admin\\Login&router_function=loginUser",
            dataType: "JSON",
            success: function (result) {
               if (result["response"]=== 0 ){
                    $("#loginerror").text(result["data"]);
                }else{
                    var url = result["data"] === 1 ? "payment.php" : "dashboard.php";
                    window.location.replace(base_URL + "/src/view/" +url);
                }
            },
            error:function (xhr, status, error) {
                var_err = JSON.parse(xhr.responseText);
                alert(err.Message);
            }
        });
    });
});