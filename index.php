
<
<?php
// Kezdő oldal.
class Main{
  public function Head(){
    echo "<meta charset='UTF-8'/>";
    echo "<title>Sharesite</title>";
    echo "<link rel='stylesheet' href='style.css'";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";

  }
  public function Ubody(){
    echo "<body>";
  }

  public function Dbody(){
    echo "<body>";
  }

  public function Content(){

    echo "<h1>Üdvözöllek a ShareSite-on!</h1>";

  }



}

    $m = new Main();

    $m->Head();
    $m->Ubody();
    $m->Content();
    $m->Dbody();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
var MyWindow;

function openlogin() {
    window.open("http://localhost/ShareSite/register.php", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=200,left=500,width=400,height=400");
}


function openRegin() {
    window.open("http://localhost/ShareSite/registration.php", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=200,left=500,width=400,height=400");

}
</script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Főoldal</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil oldal<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Profil megtekintése</a></li>
          <li><a href="#">Események és emlékeztetők tárolása</a></li>
          <li><a href="#">megosztás</a></li>
        </ul>
      </li>
      <li><a href="#">Ismerősök bejegyzései</a></li>

      <form class="navbar-form navbar-left">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Keresés...">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><button onclick="openRegin()"><span class="glyphicon glyphicon-log-in"></span> Regisztrálás</span></button></li>
      <li><button onclick="openlogin()"><span class="glyphicon glyphicon-user"></span> Bejelentkezés</span></button></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Az oldal leírása:</h3>
  <p>Bármit fel tudsz jegyezni, és azt megosztani másokkal!</p>
</div>

</body>
</html>
