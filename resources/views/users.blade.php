<form action="/users" method="POST">
    {{ method_field('DELETE') }}
    @csrf
      <!-- Laravel syntax shortcut -->
    
    <input type="text" name="username" placeholder="Enter the username"><br><br>
    <input type="password" name="password" placeholder="Enter the password"><br><br>
    
    <button type="submit">Login</button>
</form>
