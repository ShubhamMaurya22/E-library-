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
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>



    <!-- search results -->
    <div class="container my-4">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-8">Welcome To E-Library</h1>
                <p>E-Library provides access to download ebook of engineering course in just one click.</p>
            </div>
        </div>
    </div>
    <div class="container my-3" id="ques">
        <h1 class="display-6 py-2"><em>Search results for "<?php echo $_GET['search']; ?>" </em></h1>
        <table class="container my-4">
            <?php 
            $noresults = true;
            $query = $_GET["search"];
            $sql = "SELECT * FROM books WHERE MATCH (book_name,book_author) AGAINST ('$query');";
            $result = mysqli_query( $conn ,$sql);
            while($row = mysqli_fetch_assoc($result)){
            $bookname = $row['book_name'];
            $bookauthor = $row['book_author'];
            $bookfile = $row['book_link'];
            $noresults = false;
             
            echo '<tr><td><div class="alert alert-primary" role="alert">' . $bookname .' - '. $bookauthor .'</div></td><td> <div class="alert alert-secondary" role="alert"><a target="_blank" href="http://localhost/Project/files/'.$bookfile.'.pdf"><b> Click here to Download E-Book</b></a>
            </div></td></tr>';
            }
            if ($noresults){
               echo '<div class="jumbotron jumbotron-fluid">
               <div class="container">
                 <h1>No Books Found</h1>
                 <p class="lead">Suggestions: <ul>
                 <li> Make sure that all words are spelled correctly.</li>
                 <li>Try different keywords.</li>
                 <li>Try more general keywords.</li>
                 </ul>
                 </p               </div>
             </div>';
            }   
    
            ?>
        </table>

    </div>

    <?php include 'partials/_footer.php'; ?>
</body>

</html>