<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<h1>Reset Password</h1>
   
Click below to reset your password
<a class="btn btn-primary" href="{{ route('customer.getPasswordResetForm', ['token' => $token]) }}">Reset Password</a>
{{-- <a class="btn btn-primary " style="padding: 10px 15px; background:rgb(67, 8, 230); text-decoration:none; display:block;" href="{{ route('customer.getPasswordResetForm', ['email' => $email, 'token' => $token]) }}">Reset Password</a> --}}


