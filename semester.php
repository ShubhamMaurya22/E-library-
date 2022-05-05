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
    #ques {
        min-height: 430px;
    }
    </style>
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php
    $id = $_GET['semesterid'];
    $sql = "SELECT * FROM `semesters` WHERE semester_id=$id";
    $result = mysqli_query( $conn ,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['semester_title'];
        $id = $row['semester_id'];
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
    <div class="container my-4">
        <div class="jumbotron">
            <div class="container" id="ques">
                <h1 class="display-6"><?php echo $title; ?></h1>
                <div class="container my-4" id="$ques">
                <!-- <p>Choose Your Semester:</p> -->
                    <!-- <a href="semester.php?semesterid='. $id .'"><button type="button" class="btn btn-outline-primary"><?php echo $title; ?></button></a>
                 -->

                </div>
                <table class="container my-4">
                    
                <?php
                $id = $_GET['semesterid'];
                $sql = "SELECT * FROM `books` WHERE book_sem_id=$id";
                $result = mysqli_query( $conn ,$sql);
                while($row = mysqli_fetch_assoc($result)){
                $bookname = $row['book_name'];
                $bookauthor = $row['book_author'];
                $bookfile = $row['book_link'];
                            
            
            echo '<tr><td><div class="alert alert-primary" role="alert">' . $bookname .' -  '. $bookauthor .'</div></td><td> <div class="alert alert-secondary" role="alert"><a target="_blank" href="http://localhost/Project/files/'. $bookfile .'.pdf"><b> Click here to Download E-Book</b></a>
            </div></td></tr>';

             }
            ?>
             </table>
        </div>
    </div>
    </div>
   

        <?php include 'partials/_footer.php'; ?>
</body>

</html>