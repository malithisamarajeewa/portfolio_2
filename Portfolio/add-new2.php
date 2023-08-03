<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $id = $_POST['id'];
   $service_name = $_POST['service_name'];
   $no_of_items = $_POST['no_of_items'];
   $customer_name = $_POST['customer_name'];
   $email = $_POST['email'];
   $contact_number = $_POST['contact_number'];

   $sql = "INSERT INTO `new_projects`(`id`, `service_name`, `no_of_items`, `customer_name`, `email`, `contact_number`) VALUES ('$id','$service_name','$no_of_items','$customer_name','$email','$contact_number')";
   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index2.php?msg=New record created successfully");
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

   <title>New project</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #42a7ff;">
      Add new project
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Project</h3>
         <p class="text-muted">Complete the form below to add a new project</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ID:</label>
                  <input type="text" class="form-control" name="id" placeholder="001">
               </div>

               <div class="col">
                  <label class="form-label">Service name:</label>
                  <input type="text" class="form-control" name="service_name" placeholder="poster making">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">No. of items:</label>
               <input type="text" class="form-control" name="no_of_items" placeholder="4">
            </div>

            <div class="mb-3">
               <label class="form-label">Customer name:</label>
               <input type="text" class="form-control" name="customer_name" placeholder="Shalini Fernando">
            </div>

            <div class="mb-3">
               <label class="form-label">E-mail:</label>
               <input type="text" class="form-control" name="email" placeholder="shal@gmail.com">
            </div>

            <div class="mb-3">
               <label class="form-label">Contact-number :</label>
               <input type="text" class="form-control" name="contact_number" placeholder="035-5656789">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="http://localhost/Portfolio/admin_page.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>