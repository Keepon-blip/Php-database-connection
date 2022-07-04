<?php include('process2.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Bootstrap Grid Layout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('navbar.php') ?>
      
    <div class="container-fluid">
        <main class="bg-light p-5">
            <div class="text-center">
                <h1><b>JULY SOFTWARE ENGINEERING BOOTCAMP</b></h1>
            </div>
            <div class="container d-flex flex-row">
                <i class="fa fa-calendar fa-2x"></i>
                <li class="p-2">20th July 2022</li>
            </div>
            <div class="container ml-5 d-flex flex-row">
                <i class="fa fa-map-marker fa-2x"></i>
                <li class="p-2">Zalego Academy,<br>Devan Plaza</li>
            </div>
                        
        </main>
    </div>
    <div class="container shadow-sm p-5">
        <div class="row pt-5">
            <div class="text-center">
            <p>Looking for a place to kickstart your career in Technology? Whether you're a local, new in town or just cruising through we've got loads of great tips and events for you.</p>
            <h1>Sign up today?</h1>            
            </div>
            <form action="enroll.php" method="POST">
              
               <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label" na><b>Full Name</b></label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="+2547...">
                    </div>
               </div> 
               <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label"><b>E-mail Address</b></label>
                        <input type="email" name="email" class="form-control" placeholder="Please Enter Your E-mail">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" class="form-label"><b>What's your gender?</b></label>
                        <select class="form-select mb-3" aria-label="" name="gender">
                            <option selected>--Select your gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div> 
                <br>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <p>In order to complete your regitration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
                    </div>
                </div>
                <div class="row">
                    <label for="course" class="form-label"><b>What's your preferred course?</b></label>
                    <select class="form-select mb-3" name="course">
                        <option selected>--Select your course--</option>
                        <option value="Web Design">Web Design</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Android Development">Android Development</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <p>You agree by providing you information you understand all our data privacy and protection policy outlined in our Terms & Conditions and the Privacy Policy statements.</p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label"><b>Agree Terms & Conditions</b></label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submitApplication">Submit Application</button>
            </form>
        </div>
        <br>
        <div class="row text-center">
            <h2 class="fw-light">Subscribe to get information, latest news about Zalego Academy</h2>
        </div>
        <br>
        <form action="about-us.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <input name="email" type="email" class="form-control" placeholder="Your email address">
                </div>
                <div class="col-lg-6">
                    <button type="submit" name="subscribeButton" class="btn btn-primary btn-md">Subscribe</button>
                </div>
            </div>
        </form>
    
        <hr>

        <footer>
            &copy; Company 2022
        </footer>
    </div>

    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>