<h1>Reset Password</h1>
   
Click below to reset your password
<a class="btn btn-primary" href="{{ route('customer.getPasswordResetForm', ['email' => $email, 'token' => $token]) }}">Reset Password</a>
{{-- <a class="btn btn-primary " style="padding: 10px 15px; background:rgb(67, 8, 230); text-decoration:none; display:block;" href="{{ route('customer.getPasswordResetForm', ['email' => $email, 'token' => $token]) }}">Reset Password</a> --}}