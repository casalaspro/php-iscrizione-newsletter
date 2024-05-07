<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Email Subscription</title>
</head>
<body>

  <section class="emailSubscription mt-5">
    <div class="container">
      
      <h1>Email Subscription</h1>
      <p class="text-secondary">Insert your infromations in the form below, please.</p>
      <form class="row" action="./index.php" method="get">
        <div class="mb-3 col-6">
          <label for="insertName" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="insertName">
        </div>
        <div class="mb-3 col-6">
          <label for="insertLastname" class="form-label">Lastname</label>
          <input type="text" name="lastname" class="form-control" id="insertLastname">
        </div>
        <div class="mb-3 col-6">
          <label for="insertEmail" class="form-label">Email address</label>
          <input type="text" name="email" class="form-control" id="insertEmail">
        </div>
        <div class="mb-3 col-6">
          <label for="insertPassword" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="insertPassword">
        </div>

        <!-- ALERT -->
        
        <div class="mt-3 mb-3 col-12">
          <?php include __DIR__ . "/partials/utilities.php" ?>
        </div>


        <!-- END ALERT -->
        <button type="submit" class="btn btn-primary ms-2 col-1">Submit</button>
      </form>

      

    </div>
  </section>
  
</body>
</html>