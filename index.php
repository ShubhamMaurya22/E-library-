<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  <title>E-Library</title>
    <style>
        #ques{
            min-height: 430px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

    <!-- slider  start here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider1.jpg" class="img-fluid,max-width:100% height:auto;" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider2.jpg" class="img-fluid,max-width:100% height:auto;" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider3.jpg" class="img-fluid,max-width:100% height:auto;" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-3" id=" ques ">
        <h2 class="text-center">E-Library  - Browse Categories</h2>
        <div class="row">
            <!-- fetch all the categories -->
            <?php 
            $sql = "SELECT * FROM `categories` ";
            $result = mysqli_query( $conn ,$sql);
            while($row = mysqli_fetch_assoc($result)){
             // $row['category_id'];
             $id = $row['category_id'];
             $cat = $row['branch_name'];
             $desc = $row['branch_description'];

             echo '<div class="col md-4 my-2">
                <div class="card" style="width: 14rem;">
                    <img src="img/card-'.$id.'.jpg"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="categorylist.php?catid='. $id .'">'. $cat .'</a></h5>
                        <p class="card-text">'. substr($desc, 0, 45).'...</p>
                        <a href="categorylist.php?catid='. $id .'" class="btn btn-primary">View More</a>
                    </div>
                </div>
             </div>';
            }
            ?>
            


        </div>
    </div>

    <?php include 'partials/_footer.php'; ?>
</body>

</html>