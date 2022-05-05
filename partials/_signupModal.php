<!DOCTYPE html>
<html>
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
<head>
<script type="text/javascript">
    // $(document).ready(function()){
    //     $("#email").keyup(){
    //        if(validateEmail()){
    //        //if the email ia validated 
    //        //set input email borger green 
    //        $("#email").css("border","2px solid green");
    //        //ans set table
    //        $("#emailMsg").html("<p class='text-success'>Valid</p>");
    //        }else{
    //        //if the email ia noy validated 
    //        //set input email borger red 
    //        $("#email").css("border","2px solid red");
    //        $("#emailMsg").html("<p class='text-denger'>Valid</p>");
    //        }
           
    //     });

    // });
    // function validation(){
    //    //get value of" input email
    //    var email =$("#email").val();
    //    //use regular expression
    //    var reg = /^\w([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
    //    if(reg.test(email)){
    //        return true;
    //    }else{
    //        return false;
    //    }
    // }

</script>
<body>
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup for E-library account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/project/partials/_handleSignup.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="signupemail"
                                aria-describedby="emailHelp">
                            <span id="#emailMsg"></span>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                                onkeyup="return validate()">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                        <div class="errors">
                            <ul>
                                <li id="upper">Atleast one uppercase</li>
                                <li id="special_char">Atleast one Special Symbol</li>
                                <li id="number">Atleast one number</li>
                                <li id="length">Atleast 8 characters</li>
                            </ul>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword"
                                onkeyup="return conform()">
                          
                        </div>
                        <button type="submit" class="btn btn-primary">Signup</button>
                        <button type="reset" class="btn btn-outline-primary">Reset</button>
                    
                    </div>

                </form>

            </div>
        </div>
    </div>
    <script>
     
    function validate() {
        var pass = document.getElementById('signupPassword');
        var upper = document.getElementById('upper');
        var num = document.getElementById('number');
        var sp_char = document.getElementById('special_char');
        var len = document.getElementById('length');
        //check if pass contain  a number
        if (pass.value.match(/[0-9]/)) { //match if function which match regular expresion 
            num.style.color = 'green';
        } else {
            //otherwise
            num.style.color = 'red';
        }

        //check if pass contain uppercase
        if (pass.value.match(/[A-Z]/)) { //match if function which match regular expresion A- Z 
            upper.style.color = 'green';
        } else {
            upper.style.color = 'red';
        }

        //check if pass contain special symbol
        if (pass.value.match(/[!\@\#\$\^\&\*\(\)\_\-\=\+\?]/)) { //match if function which match regular expresion 
            sp_char.style.color = 'green';
        } else {
            sp_char.style.color = 'red';
        }
        //checking length of password
        if (pass.value.length > 8) { //match if function which match regular expresion 
            len.style.color = 'green';
        } else {
            len.style.color = 'red';
        }
    }
    //now new fucntion to check passwrd are match
    function conform() {
        var pass = document.getElementById('signupPassword');
        var cpass = document.getElementById('signupcPassword');
        var pass_match = document.getElementById('password_match');
        if (pass.value == cpass.value) {
            document.getElementById('number').style.display = 'none';
            document.getElementById('upper').style.display = 'none';
            document.getElementById('special_char').style.display = 'none';
            document.getElementById('length').style.display = 'none';
        } else {
            document.getElementById('number').style.display = 'block';
            document.getElementById('upper').style.display = 'block';
            document.getElementById('special_char').style.display = 'block';
            document.getElementById('length').style.display = 'block';
        }
    }
    </script>
</body>

</html>


<!-- Modal -->
<!-- <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup for E-library account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/elibrary_demo/partials/_handleSignup.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="signupemail" name="signupemail"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Signup</button>

                </div>

            </form>
        </div>
    </div>
</div> -->






<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup for E-library account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/project/partials/_handleSignup.php" method="post">
                    <div class="modal-body">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="signupEmail" name="signupEmail"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="signupUsername" name="signupUsername"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                                onkeyup="return validate()">

                        </div>
                        <div class="errors">
                            <ul>
                                <li id="upper">Atleast one uppercase</li>
                                <li id="special_char">Atleast one Special Symbol</li>
                                <li id="number">Atleast one number</li>
                                <li id="length">Atleast 8 characters</li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword"
                                onkeyup="return conform()">
                            <div id="emailHelp" class="form-text">Make sure to type the same password.</div>

                        </div>
                        <button type="submit" class="btn btn-primary">Signup</button>
                        <button type="reset" class="btn btn-outline-primary">Reset</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
    function validate() {
        var pass = document.getElementById('signupPassword');
        var upper = document.getElementById('upper');
        var num = document.getElementById('number');
        var sp_char = document.getElementById('special_char');
        var len = document.getElementById('length');
        //check if pass contain  a number
        if (pass.value.match(/[0-9]/)) { //match if function which match regular expresion 
            num.style.color = 'green';
        } else {
            //otherwise
            num.style.color = 'red';
        }

        //check if pass contain uppercase
        if (pass.value.match(/[A-Z]/)) { //match if function which match regular expresion A- Z 
            upper.style.color = 'green';
        } else {
            upper.style.color = 'red';
        }

        //check if pass contain special symbol
        if (pass.value.match(/[!\@\#\$\^\&\*\(\)\_\-\=\+\?]/)) { //match if function which match regular expresion 
            sp_char.style.color = 'green';
        } else {
            sp_char.style.color = 'red';
        }
        //checking length of password
        if (pass.value.length > 8) { //match if function which match regular expresion 
            len.style.color = 'green';
        } else {
            len.style.color = 'red';
        }
    }
    //now new fucntion to check passwrd are match
    function conform() {
        var pass = document.getElementById('signupPassword');
        var cpass = document.getElementById('signupcPassword');
        var pass_match = document.getElementById('password_match');
        if (pass.value == cpass.value) {
            document.getElementById('number').style.display = 'none';
            document.getElementById('upper').style.display = 'none';
            document.getElementById('special_char').style.display = 'none';
            document.getElementById('length').style.display = 'none';
        } else {
            document.getElementById('number').style.display = 'block';
            document.getElementById('upper').style.display = 'block';
            document.getElementById('special_char').style.display = 'block';
            document.getElementById('length').style.display = 'block';
        }
    }
    </script>
</body>

</html> -->




