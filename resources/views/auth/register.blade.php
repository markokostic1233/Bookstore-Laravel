<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body style="background-image: url('/sliders/bookstore.jpg');background-repeat: no-repeat ;background-attachment: fixed;  background-size: 100% 100%;">


        <section >
        <div class="row">
            <div class="container-fluid">
            <div class="offset-lg-4 col-lg-4">

            <form action="{{ route('register') }}" class="pt-5" method="POST">

                @csrf

                <div class="form-group">
                    <label for="inputUserName" class="control-label text-white">Name</label>
                    <input type="text" id="username" value="{{ old('name') }}" required class="form-control" name="name" id="inputUserName" aria-labelledby="emailnotification">
                    <div id="usernameBlank" class="bg-danger text-white mb-2 mt-2 pl-2"></div>

                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label text-white">Email</label>
                    <input type="email" id="email" value="{{ old('email') }}" required class="form-control" name="email" aria-labelledby="passwordnotification">
                    <div id="emailBlank" class="bg-danger text-white mb-2 mt-2 pl-2"></div>

                </div>
                <div class="form-group">
                    <label for="inputPassword" class="control-label  text-white">Password</label>
                    <input type="password" id="password"  name="password" required class="form-control"  id="inputPassword" aria-labelledby="passwordnotification">
                    <div id="passwordBlank" class="bg-danger text-white mb-2 mt-2 pl-2"></div>

                </div>

                <div class="form-group">
                    <label for="inputPassword" class="control-label  text-white">Retype password</label>
                    <input type="password" id="repeatPass" name="password_confirmation" required class="form-control"  id="inputPassword" aria-labelledby="passwordnotification">
                    <div id="repeatpassBlank" class="bg-danger text-white mb-2 mt-2 pl-2"></div>

                </div>

                <div class="form-group">
                    <button onclick="myfun()" class="form-control btn btn-dark disabled text-white" type="submit"  name="submit" > SUBMIT </button>
                </div>
                <div id="Success" class="bg-primary text-white mb-2 mt-2 pl-2"></div>

            </form>

        </div>
        </div>
    </div>

</div>
        </section>

        <script type="text/javascript">

            function myfun(){

              var Myusername = document.getElementById('username').value;
              var Myemail = document.getElementById('email').value;
              var Mypassword = document.getElementById('password').value;
              var MypasswordAgain = document.getElementById('repeatPass').value;
              var emailReg = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;

              if(Myusername == ''){

                document.getElementById('usernameBlank').innerHTML="Please enter name..";

             }else if(Myusername !== ''){

                document.getElementById('usernameBlank').innerHTML="";
             }

              if(Myemail == ''){

                 document.getElementById('emailBlank').innerHTML="Please enter invalid email..";

              }else if(Myemail.value.match(emailReg)){

                document.getElementById('emailBlank').innerHTML="Invalid email..";

             }else if(Myemail !== ''){

                 document.getElementById('emailBlank').innerHTML="";
              }
              if(Mypassword == ''){

                document.getElementById('passwordBlank').innerHTML="Please enter password..";

             }else if(Mypassword.length < 5){

                document.getElementById('passwordBlank').innerHTML="Less 5 charac";
             }else if(Mypassword !== ''){

                document.getElementById('passwordBlank').innerHTML="";
             }

             if(MypasswordAgain == ''){

                document.getElementById('repeatpassBlank').innerHTML="Please repeat password..";

             }else if(!MypasswordAgain === Mypassword){

                document.getElementById('repeatpassBlank').innerHTML="Password must be same";
                
             }else if(MypasswordAgain !== ''){


                 document.getElementById('repeatpassBlank').innerHTML="";
             }
             else if(MypasswordAgain !== '' && Mypassword !== '' && Myemail !== '' && Myusername !== '' ){

                  document.getElementById('Success').innerHTML="You have successflly registered.."

             }


            }

        </script>
</body>
</html>
