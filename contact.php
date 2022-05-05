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
     <!-- <style class="">
     #contact{
        background-color: black;
        color: white;
        padding: 3rem 0;
    }
    #contact-form{
        width: 60%;
        margin: 0 auto;
    }
    #contact-form h1{
        margin-top: 0;
        text-align: center;
    }
    #contact-form label{
        display: block;
        margin-bottom: 1rem;
    }
    #contact-form div{
        margin-top: 1rem;
    }
    </style> -->
     <style>
     body {
         font-family: 'Lato', sans-serif
     }

     h1 {
         margin-bottom: 40px
     }

     label {
         color: #333
     }

     .btn-send {
         font-weight: 300;
         text-transform: uppercase;
         letter-spacing: 0.2em;
         width: 80%;
         margin-left: 3px
     }

     .help-block.with-errors {
         color: #ff5050;
         margin-top: 5px
     }

     .card {
         margin-left: 10px;
         margin-right: 10px
     }
     </style>
 </head>

 <body>
     <?php include 'partials/_header.php'; ?>
     <div class="container-fluid">
         <div class=" text-center mt-2">
             <h1>How Can We Help?</h1>
         </div>
         <div class="row">
             <div class="col-lg-7 mx-auto">
                 <div class="card mt-2 mx-auto p-4 bg-light md-3">
                     <div class="card-body bg-light">
                         <div class="container">
                             <form id="contact-form" role="form">
                                 <div class="controls md-3">
                                     <div class="row  md-2">
                                         <div class="col-md-6 md-2">
                                             <div class="form-group mt-2 "> <label for="form_name">Firstname </label> <input
                                                     id="form_name" type="text" name="name" class="form-control mt-2"
                                                     placeholder="Please enter your firstname " required="required"
                                                     data-error="Firstname is required."> </div>
                                         </div>
                                         <div class="col-md-6 mb-2">
                                             <div class="form-group mt-2"> <label for="form_lastname">Lastname </label>
                                                 <input id="form_lastname" type="text" name="surname"
                                                     class="form-control  mt-2" placeholder="Please enter your lastname "
                                                     required="required" data-error="Lastname is required.">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row md-2">
                                         <div class="col-md-6  md-2">
                                             <div class="form-group mt-2"> <label for="form_email">Email </label> <input
                                                     id="form_email" type="email" name="email" class="form-control mt-2"
                                                     placeholder="Please enter your email " required="required"
                                                     data-error="Valid email is required."> </div>
                                         </div>
                                         <div class="col-md-6  md-2">
                                             <div class="form-group mt-2"> <label for="form_need">Please specify your need
                                                     </label> <select id="form_need" name="need" class="form-control mt-2"
                                                     required="required" data-error="Please specify your need.">
                                                     <option value="" selected disabled>--Select Your Issue--</option>
                                                     <option>Request for ebook</option>
                                                     <option>Report a copyright material</option>
                                                     <option>Some thing else</option>
                                                 </select> </div>
                                         </div>
                                     </div>
                                     <div class="row md-2">
                                         <div class="col-md-12  mt-2">
                                             <div class="form-group mt-2"> <label for="form_message">Message </label>
                                                 <textarea id="form_message" name="message" class="form-control mt-2"
                                                     placeholder="Write your message here." rows="4" required="required"
                                                     data-error="Please, leave us a message."></textarea>
                                             </div>
                                         </div>
                                         <div class="col-md-12  mt-3"> <input type="submit"
                                                 class="btn btn-success btn-send pt-2 btn-block " value="Send Message">
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div> <!-- /.8 -->
             </div> <!-- /.row-->


             <?php include 'partials/_footer.php'; ?>
 </body>

 </html>