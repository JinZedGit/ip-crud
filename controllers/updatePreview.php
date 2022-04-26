<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
    $load_id = $_GET['id'];

    require_once('dbconn.php');
    $sql = "SELECT name, ip, mac from list where id='$load_id'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)){
      $name = $row["name"];
      $ip = $row["ip"];
      $mac = $row["mac"];
    }
?>

  <div class="container">
    <h1 class="text-center mt-5">Updating <?php echo $name;?></h1>
    <h2 class="text-center"><?php echo "Current IP:".$ip."; Current MAC:".$mac?></h2>
    <form class="row g-3" action="update.php?id=<?php echo $load_id;?>" method="POST">
      <div class="col-md-4">
        <label for="inputName" class="form-label">Name</label>
        <input value="<?php echo $name;?>" class="form-control" id="NameId" name="inputName">
        <span></span>
      </div>
      <div class="col-md-4">
        <label for="inputIp" class="form-label">IP Address</label>
        <input value="<?php echo $ip;?>" class="form-control" id="IpId" name="inputIp">
        <span></span>
      </div>
      <div class="col-md-4">
        <label for="inputMac" class="form-label">MAC Address</label>
        <input value="<?php echo $mac;?>" class="form-control" id="MacId" name="inputMac">
        <span></span>
      </div>
      <button type="submit" class="btn btn-outline-warning m-auto mt-3">Update</button>
    </form>
</body>