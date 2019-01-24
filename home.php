<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="#">
          <i class="fa d-inline fa-lg"></i>
          <b class="text-primary"> ITB</b>
        </a>
        <ul class="navbar-nav mx-auto"></ul>
        <ul class="navbar-nav">
          <li class="nav-item text-body"> <a class="nav-link text-primary" href="#">Log in</a> </li>
          <li class="nav-item text-dark"> <a class="nav-link text-dark" href="#">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <!--?php while ($i < 10) { 
        if ($nocol = 3)? { $nocol = 0;?-->
      <div class="row">
        <div class="col-md-3 flex-row d-flex">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/cover-moon.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <!--?php } if ($nocol != 2) else { $nocol += 1;?-->
        <div class="col-md-3 flex-row d-flex"></div>
        <!--?php } else { $nocol += 1; ?-->
        <div class="col-md-3 flex-row d-flex"></div>
      </div>
      <!--?php $i += 1; } ?-->
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" style=""></script>
</body>

</html>