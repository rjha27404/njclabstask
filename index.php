<?php
    include("config.php");
    $search = $_GET['search'];
    $sql = "SELECT * from Movies";
    if($search==""){
        $result = mysqli_query($mysqli,$sql);
    }
    else{
        $result = mysqli_query($mysqli,"SELECT * FROM Movies Where name = '$search'");
    }
    if(!$result){
        echo "Connection Failed";
    }
    if(mysqli_num_rows($result)==0){
        echo "No Record Found".die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Movie Details</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MovieTime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Your Movie" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Actor</th>
                <th scope="col">Actress</th>
                <th scope="col">Director</th>
                <th scope="col">Year Of Release</th>
            </tr>
        </thead>
    <tbody>
        <?php
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['actor']."</td>";
                echo "<td>".$row['actress']."</td>";
                echo "<td>".$row['director']."</td>";
                echo "<td>".$row['year_of_release']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2M  
</body>
</html>