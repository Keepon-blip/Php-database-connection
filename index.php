<?php include('process.php') ?>

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
    <!-- navigation bar here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="about-us.php" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link btn btn-primary text-white">Register Now</a>
                </div>
            </div>
        </div>
        

    </nav>
    <!-- End navigation bar here -->


    <main class="p-5 mb-4 bg-light">
        <h1>Welcome, Keepon</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, assumenda. Doloremque porro ratione magnam nihil facere consequatur repellat reprehenderit obcaecati itaque, aliquam beatae fugit officia cupiditate repudiandae neque dolorum atque blanditiis error.</p>
        <button class="btn btn-primary">Learn More</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <h1>Header 1</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe magnam, incidunt fuga quia distinctio voluptatibus debitis odio quod eius iure a vero libero maxime laboriosam atque nostrum doloremque suscipit quo.</p>
                <button class="btn btn-primary" href="">Learn More</button>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h1>Header 2</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe magnam, incidunt fuga quia distinctio voluptatibus debitis odio quod eius iure a vero libero maxime laboriosam atque nostrum doloremque suscipit quo.</p>
                <button class="btn btn-primary">Learn More</button>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h1>Header 3</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe magnam, incidunt fuga quia distinctio voluptatibus debitis odio quod eius iure a vero libero maxime laboriosam atque nostrum doloremque suscipit quo.</p>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
        
        <!-- contact us form here -->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eveniet voluptates iusto sed quia quam ab id consequatur aut corrupti. Et, placeat! Ratione ab et ipsa, voluptas harum a illo.</p>
            
            <form action="index.php" method="POST">
                <?php
                    if($response)
                    {
                        include ('response.php');
                    };
                ?>
               <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter Your First Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                    </div>
               </div> 
               <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your E-mail Address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                </div> 
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submitButton">Send a Message</button>
            </form>
        </div>
        <!-- End contact us form here -->


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