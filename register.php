<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
if (isset($_GET['submit'])) {
    // 1. เก็บค่าจากข้าตัวแปร
    $username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $pic = $_GET['pic'];
    $status = $_GET['status'];

    // 2. เชื่อมต่อฐานข้อมูล
    $conn = mysqli_connect("localhost", "root", "123", "member");
    if (!$conn) {
        echo "Error database not connected";
    }
    
    // Fix: Added a closing single quote for the values in the SQL query
    $sql = "INSERT INTO users values ('','$username','$password','$email','$pic','$status')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "insert ok";
    } else {
        echo "error insert";
    }
}
?>


<div class="container mt-3">
  <h2>ลงทะเบียนสมาชิก</h2>
  <form action="register.php">
  <div class="mb-3 mt-3">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pic">Picture:</label>
      <input type="text" class="form-control" id="pic" placeholder="Enter picture" name="pic">
    </div>
    <div class="mb-3">
      <label for="pic">Status:</label>
      <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">ส่งข้อมูล</button>
  </form>
</div>

</body>
</html>