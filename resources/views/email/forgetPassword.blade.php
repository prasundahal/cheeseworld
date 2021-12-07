<h1>Forget Password Email</h1>
   
You can reset password from bellow link:
<a href="{{ route('customer.getPasswordResetForm', ['email' => $email, 'token' => $token]) }}">Reset Password</a>