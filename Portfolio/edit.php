<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $Service_name = $_POST['Service_name'];
  $Price = $_POST['Price'];
  $Duration = $_POST['Duration'];

  $sql = "UPDATE `service` SET `Service_name`='$Service_name',`Price`='$Price',`Duration`='$Duration' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index1.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Edit details of a service</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #42a7ff;">
    Edit service details
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Service Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `service` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ID:</label>
                  <input type="text" class="form-control" name="id" placeholder="1">
               </div>

               <div class="col">
                  <label class="form-label">Service Name:</label>
                  <input type="text" class="form-control" name="Service_name" placeholder="video making">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Price for one item (Rs.):</label>
               <input type="text" class="form-control" name="Price" placeholder="1500.00">
            </div>

            <div class="mb-3">
               <label class="form-label">Duration:</label>
               <input type="text" class="form-control" name="Duration" placeholder="within 10 days">
            </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index1.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>