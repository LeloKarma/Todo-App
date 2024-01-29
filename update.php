<?php

require "config.php";

if (isset($_GET['upd_id'])) {
    $id = $_GET['upd_id'];

    $update = $conn->prepare("SELECT * FROM task WHERE id = :id");
    $update->execute([':id' => $id]);

    // Fetch the row using fetch method
    $rows = $update->fetch(PDO::FETCH_OBJ);

    // Check if the form field exists and is not empty
    if (isset($_POST['submit'])) {
        $task = $_POST['myTask'];

        $update = $conn->prepare("UPDATE task SET name = :name WHERE id = :id");
        $update->execute([':name' => $task, ':id' => $id]);

        header('Location: index.php');
        exit();
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>To-Do App</title>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Update Task</h4>
<form method="POST" action="update.php?upd_id=<?php echo $id; ?>" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-0 pb-2">
    <div class="col-12">
        <div class="form-outline">
            <label class="form-label" for="form1">Enter a task here</label>
            <input type="text" id="form1" class="form-control" name="myTask" value="<?php echo $rows->name; ?>">
        </div>
    </div>

    <div class="col-12">
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

</div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
