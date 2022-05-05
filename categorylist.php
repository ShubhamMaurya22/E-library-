<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id";
    $result = mysqli_query( $conn ,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['branch_name'];
       
    }
    ?>
    <div class="container my-4">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-8">Welcome To E-Library</h1>
                <p>E-Library provides access to download ebook of engineering course in just one click.</p>
            </div>
        </div>
    </div>
    
    <div class="container my-4"  id="ques" >
        <div class="jumbotron">
            <div class="container" id="ques">  
            <h1 class="display-6"><?php echo $catname;?></h1>
           
            <table><tr>
            <p>Choose Your Semester:</p>
            <?php
                $id = $_GET['catid'];
                $sql = "SELECT * FROM `semesters` WHERE semester_cat_id=$id";
                $result = mysqli_query( $conn ,$sql);
                while($row = mysqli_fetch_assoc($result)){
                $title = $row['semester_title'];
                $id = $row['semester_id'];
                            
            //     echo ' <div class="container my-4 " >
            //     <a href="semester.php?semesterid='. $id .'"><button type="button"class="btn btn-outline-primary">'. $title .'</button></a>
            
            // </div>';
            echo '<td><div class="container my-4"><a href="semester.php?semesterid='. $id .'"><button type="button"class="btn btn-outline-primary">'. $title .'</button></a></div></td>';

             }
            
             
        ?>
        
         </tr></table>
         <!-- <h1 class="">ge</h1> -->
         <div class="container  flex text-align-center ">
             <img src="img/elibrary.png" alt="" style="width:900px; weight:300px; title="E-library">
    </div>
            </div>
        </div>
    </div>

   
        
                <!-- display data -->
                <!-- <div class="container my-4">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                        <a class="px-3" href="#"><b>Download E-Book</b></a>
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!
                        <a href="#"><b>Download E-Book</b></a>
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                        <a href="#"><b>Download E-Book</b></a>
                    </div>
                </div> -->
              




                <?php include 'partials/_footer.php'; ?>
</body>

</html>