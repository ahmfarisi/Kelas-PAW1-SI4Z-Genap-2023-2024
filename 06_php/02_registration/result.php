<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration Result</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <?php
      $name = $_POST["name"];
      $gender = $_POST["gender"];
      $religion = $_POST["religion"];
      $description = $_POST["description"];
      // echo $name;
      // echo "<br/>";
      // echo $gender;
      // echo "<br/>";
      // echo $religion;
      // echo "<br/>";
      // echo $description;
    ?>
    
    <div class="container">
        <div class="col-6 mx-auto">
            <div class="card mt-3">
                <div class="card-header bg-dark text-white">
                    <h5>Registration Data</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td colspan="3">
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Registration Succeedd !</strong> Thankyou !
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                              <?php echo $name; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                              <?php echo $gender; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>:</td>
                            <td>
                                <?php echo $religion; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Self Description</td>
                           <td>:</td>
                            <td>
                                <?php echo $description; ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer d-grid">
                    <a href="index.php" class="btn btn-outline-dark">Back</a>
                </div>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>