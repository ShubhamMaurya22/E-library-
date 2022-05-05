
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>
<?php include 'partials/_dbconnect.php'; ?>
<?php
      $sql = "SELECT * FROM `categories` ";
      $result = mysqli_query( $conn ,$sql);
      while($row = mysqli_fetch_assoc($result)){
        // $row['category_id'];
        // $id = $row['category_id'];
        $branch_name = $row['branch_name'];
      }
    session_start();
    echo '   <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
     <div class="container-fluid">
       <a class="navbar-brand " href="index.php">E-Library</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
           </li>
          
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="categorylist.php?catid=1">Computer Engineering</a></li>
            <li><a class="dropdown-item" href="categorylist.php?catid=2">Civil Engineering</a></li>
            <li><a class="dropdown-item" href="categorylist.php?catid=3">Mechanical Engineering</a></li>
      
            </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dmca.php">DMCA</a>
      </li>
           <li class="nav-item">
             <a class="nav-link" href="contact.php" tabindex="-1">Contact</a>
           </li>
         </ul>';
         if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          echo  ' <form class="d-flex" method="get" action="search.php">
          <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail'].' </p>
          <a href = "partials/_logout.php" role="button" class="btn btn-outline-success ml-2 me-2 ">Logout</a>
     
        </form>
        ';
         }else{    
          echo  ' <form class="d-flex" method="get" action="search.php">
              <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
            
            <button class="btn btn-outline-success mx-2 " data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
            <button class="btn btn-outline-success ml-2 " data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>';
          }
     echo ' </div>
           </div>
          </nav>' ;
      include 'partials/_loginModal.php';
      include 'partials/_signupModal.php';
      if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="true"){
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Success!</strong> You can now login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }else{
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="false"){
            echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                    <strong>Sorry!</strong> '.$_GET['error'].'.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
      }
    }
    if(isset($_GET['loginSuccess'] )&& $_POST['loginSuccess'] == "false"){
      echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>Sorry!</strong> Unable to Login. Please check your username & password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      
    }
  ?>


</html>