<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50;">
                <?php include("nav2.php"); ?>
            </div>
            <div class="row" style="border:5px solid orange; background-color: #bd809f;">
                <div class="col-lg-6" style="border:5px solid red;">
                    <form>
                    <h3>Contact us Form</h3>
                        <div class="form-group">
                            <label for="exampleinputfastname">Firstname</label>
                            <input type="text" class="form-control" name="exampleinputfirstname" placeholder="Firs tName">
                        </div>

                        <div class="form-group">
                            <label for="exampleinputSecondName">Second Name</label>
                            <input type="text" class="form-control" name="SecondName" placeholder="Second name">
                        </div>

                        <div class="form-group">
                            <label for="telphonenumber">Tel phone Number</label>
                            <input type="tel" class="form-control" name="telphoneNumber" placeholder="Telphone number">
                        </div>

                        <div class="form-group">
                            <label for="exampleinputEmail">Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="Emailhelper" placeholder="Enter Email">
                        </div>
                        <label for="gender">gender</label>
                        <select class="form-control" name="gender">

                            <option value="female">female</option>
                            <option value="male">male</option>
                            

                        </select>
                        
                         

                        <button type="submit" class="btn-primary">submit</button>
        
                    </form>
                </div>

                <div class="col-lg-6" style="border:5px solid red;">
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

                <div class="row" style="border: 4px sold chocolate; background-color: brown; text-decoration-color: darkgreen;">
                    <footer class="by-dark text-light text-center py-3">
                        <p>&copy:2023 CHUMEX THE KLEIN</p>
                    </footer>
            
                </div>
            </div>
        </div> 
        <script src="bootstrap.min.js"></script>       
    </body>
</html> 