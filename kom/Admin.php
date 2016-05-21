<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
  </head>
<body background="Flat-Ocean.jpeg">
	<div>
    <a href="free.php"><img src="2-Hot-Home-icon.png" class="col-md-offset-10 col-md-2 col-xs-offset-10 col-xs-2" style="width:100px;height:50px;margin-top:5px"></a>
  </div>
  

    <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-5" style="background-color:  #FFFFCC; height:290px;margin-top:100px">
      <img src="logo.png" style="width:20%; height:25px;margin-left:60px;margin-top:15px">
<div class="form-input" style="padding-top:20px">
    
    <input type="text"  id="name" placeholder="Name">
  </div>
   <div class="form-input" style="padding-top:20px">
    
    <input type="text"  id="surname" placeholder="Surname" name="surname">
  </div>
<div class="form-input" style="padding-top:20px">
    
    <input type="text" id="email" placeholder="Email" name="email">
  </div>

<div class="form-input" style="padding-top:20px">
    
    <input type="text" id="password" placeholder="Password" name="password">
  </div>
  <div class="error" style="padding-top:20px">
<input type="submit" class="btn-sign" style="padding-bottom:0px" onClick="register()"><br>
<a href=""></a>
</div>
</div>
</body>
  </html>
  <script type="text/javascript">
  function register(){
          var name = $("#name").val();
          var surname = $("#surname").val();
          var email = $("#email").val();
          var password = $("#password").val();
          if (name=="" || surname=="" || email=="" || password==""){
            $(".error").html("Fill all fields!!!");
          }else{
            if(!validateEmail(email)){
              $(".error").html("Enter correct email");
            }else{
              if(!checkName(name) || !checkName(surname)){ 
              $(".error").html("Incorrect Name or Surname");
              }else{
            if(password==password){
              $.ajax({
            type: "POST",
            url:"reg.php",
            data: "name="+name+"&surname="+surname+"&email="+email+"&password="+password,
            success: function(data){
              if(data=="OK"){

              }else{
                $(".error").html(data);
              }
            }
          });
            }else{
              $(".error").html("Passwords are not the same");
            }
          }
        }
      }
    }
      function checkName (name){ 
return /^[a-zA-Z]+$/.test(name); 
} 
        function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
        </script>
      