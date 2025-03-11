<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #0066cc">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Open Day</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="staff-homePage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="add-event.php">Add Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewAttendance.php">Attendance</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto"> <!-- Align to the right -->
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true): ?>
          <li class="nav-item">
            <span class="navbar-text text-black me-3">
              Welcome, <?php echo ($_SESSION['Name']); ?>!
            </span>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light" href="logout.php">Log Out</a>
          </li>
        <?php endif; ?>
      </ul>
          </div>
        </div>
      </nav> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>
