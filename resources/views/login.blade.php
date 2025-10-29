<h1> form Start</h1>
@if($errors->any())
@foreach($errors->all() as $err)
<li> {{ $err }}</li>
@endforeach
@endif
<form action ="/login" method="POST">
  @csrf 
  <input type="text" name="username" placeholder="enter the uname "><br>
  <input type="password" name="password"placeholder="enter the password"><br>
 
  <button type="submit">Login</button>
</form>
 