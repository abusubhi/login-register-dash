<!DOCTYPE html>
<html>
<head>
  <title>Admin Add Users</title>
</head>
<body>

<button type="button" onclick="alert('Pup 1');">Pup 1</button>
</br>
<button type="button" onclick="alert('Pup 2');">Pup 2</button>
</br>
<button type="button" onclick="alert('Pup 3');">Pup 3</button>
</br>
<button type="button" onclick="alert('Pup 4');">Pup 4</button>
</br>

  <h1>Admin Add Users</h1>
  <form action="add_user.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Add User">
    <input type="submit" onclick="alert('Pup 4');" value="pop1">
  </form>
</body>
</html>