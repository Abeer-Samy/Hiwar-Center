<?php

if($_POST){
      if($_SESSION["token"] != $_POST["token"]){
            die("invalid token");
      }
}
$_SESSION['token'] = md5(sha1(base64_decode(uniqid(mt_rand(),true))));
//$_SESSION['token'] = md5(sha1(uniqid(mt_rand(),true));
//$_SESSION['token'] = sha1(uniqid(mt_rand(),true));
//$_SESSION['token'] = md5(uniqid(mt_rand(),true));

echo $_SESSION['token'];


$conn = mysqli_connect('localhost', 'root', '', 'phpsecurity');

if (!$conn) {
      die("connection failed: " . mysqli_connect_error());
} else {
      echo "connected";
}

if (isset($_POST['submit'])) {
      if (!empty($_POST['username']) && !empty($_POST['password'])) {
            session_start();
            $username = $_POST['username'];
            $password = sha1(md5($_POST['password']));
           // $password = md5($_POST['password']);

          //  $password = sha1(md5($_POST['password']));
            // $_SESSION['password'] = $password;
            // $_SESSION['username'] = $username;
            // $_COOKIE['password'] = $password;
            // $_COOKIE['username'] = $username;
            // echo "Password: " . $_SESSION["password"] . ".<br>"; 
            // echo "User Name " . $_SESSION["username"] . ".";

            // use bugs of sql injection id=100 OR '1'=1
            $sql ="INSERT INTO login(id,username,passwords) VALUES ('1','$username','$password')";
            $users = "SELECT * FROM login";
            //  WHERE username = Bob’ OR 1=1--
            $users = $conn->query($users);
            if($users->num_rows > 0) {
                  while($row = $users->fetch_assoc()) {
                        echo "name: " .$row['username']. ' password: '. $row['username'] ."<br>";
                      }
            }

            if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                session_destroy();
                $conn->close();
      } 
}
?>
<fom action ="#" method=' POST' accept-char="UTF-8">

<label for="fname">Email: </label><br>
<input type="text" name="email" placeholder="email" required="required" > <br>
<label for="fname">User name: </label><br>
<input type="text" name="username" placeholder="username" required="required" > <br>
<label for="fname">Password: </label><br>
<input type="text" name="pass" placeholder="pass" required="required" > <br>
<label for="fname">User name: </label><br>
<input type="hidden" name="token" value="<?= $_SESSION['token']?>">
<input type="Submit" name="submit" value="login"> ><br>
</form>