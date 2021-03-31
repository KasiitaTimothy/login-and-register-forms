<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  <center>

  <h3>Register Here</h3>

  <form action="" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="user" placeholder="Enter name Here"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="user_pass" placeholder="Enter Password Here"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="mail" placeholder="Enter Email Here"></td>
        </tr>

        <tr>
          <td>Gender:</td>
          <td>
          <input type="radio" name="gender"> Male
          <input type="radio" name="gender"> Female
          <input type="radio" name="gender"> Others
          </td>
        </tr>

        <tr>
          <td>Phone:</td>
          <td>
            <select name="country_code">
              <option value="+254">+254</option>
              <option value="+255">+255</option>
              <option value="+256">+256</option>
              <option value="+257">+257</option>
              <option value="+258">+258</option>
            </select>
            <input type="phone" name="mob_digits" placeholder="76******">
          </td>
        </tr>

        <tr>
           <td><input type="submit" name="submit" value="submit"></td>
           <td><p>Already a user? <a href="login.php">Login Here</a></p></td>
        </tr>

      </table>
  </form>
  
  </center>
</body>
</html>