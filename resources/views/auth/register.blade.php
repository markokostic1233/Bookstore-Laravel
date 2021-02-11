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
                    <input type="text" value="{{ old('name') }}" required class="form-control" name="name" id="inputUserName" aria-labelledby="emailnotification">
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label text-white">Email</label>
                    <input type="email" value="{{ old('email') }}" required class="form-control" name="email" aria-labelledby="passwordnotification">

                </div>
                <div class="form-group">
                    <label for="inputPassword" class="control-label  text-white">Password</label>
                    <input type="password"  name="password" required class="form-control"  id="inputPassword" aria-labelledby="passwordnotification">

                </div>

                <div class="form-group">
                    <label for="inputPassword" class="control-label  text-white">Retype password</label>
                    <input type="password" name="password_confirmation" required class="form-control"  id="inputPassword" aria-labelledby="passwordnotification">

                </div>

                <div class="form-group">
                    <button class="form-control btn btn-dark disabled text-white" type="submit"  name="submit" > SUBMIT </button>
                </div>

            </form>

        </div>
        </div>
    </div>

</div>
        </section>
</body>
</html>
