<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50; border-radius:20px;">
                <?php include("nav2.php"); ?>
            </div>
            <div class="row" style="border:5px solid orange; background-color: #B0E0B2; border-radius:20px;">
                <div class="col-lg-6" style=" border-radius:20px;">
                    <form action="process_contact.php" method="POST">
                        <h3>Contact us Form</h3>
                        <div class="form-group">
                            <label for="exampleinputfastname">Firstname</label>
                            <input type="text" class="form-control" name="Firstname" placeholder="Surname" autocomlete="off">
                        </div>

                        <div class="form-group">
                            <label for="exampleinputSecondName">Second Name</label>
                            <input type="text" class="form-control" name="Secondname" placeholder=" Givenname" autocomlete="off">
                        </div>

                        <div class="form-group">
                            <label for="telphonenumber">Tel phone Number</label>
                            <input type="tel" class="form-control" name="TelphoneNumber" placeholder="Telphone number" autocomlete="off">
                        </div>

                        <div class="form-group">
                            <label for="exampleinputEmail">Email</label>
                            <input type="email" class="form-control" name="Email" aria-describedby="Emailhelper" placeholder="Enter Email" autocomlete="off">
                        </div>
                        <label for="gender">gender</label>
                        <select class="form-control" name="Gender" autocomlete="off">

                            <option value="female">female</option>
                            <option value="male">male</option>
                            

                        </select>
                        
                         

                        <button type="submit" class="btn-primary">submit</button>
        
                    </form>
                </div>

                <div class="col-lg-6" style="; border-radius:20px;">
                    <h3>Contact us details</h3>
                      
                    <address>
                        <p>mpozzadaniel@gmail.com</p>
                        <p>Watsup-number: 0740321255</p>
                        <P>Uganda</P>
                        <p>Face book Account: MpozzaDaniel</p>
                        <p>Tiktok: Chumex Klein</p>

                    </address>
                    <ul>
                        <li><a href="https://twitter.com/chumexklein">Twitter</a></li>
                        <li><a href="https://facebook.com/mpozzadaniel">Facebook</a></li>
                        <li><a href="https://tiktok.com/Chumexklein">Tiktok</a></li>
                        <li><a href="https:///mpozzadaniel@gmail.com">Email</a></li>
                        <!-- Add other social media links as needed -->
                    </ul>  
                </div>

                
            </div>
            <div class="row" style="border:2px solid #bd809f ; background-color: brown; border-radius:20px;">
                <div>
                    <footer class="by-dark text-light text-center py-3">
                        <p>&copy:2023 CHUMEX THE KLEIN</p>
                    </footer>
                </div>
            </div>
        </div> 
        <script src="bootstrap.min.js"></script>       
    </body>
</html> 