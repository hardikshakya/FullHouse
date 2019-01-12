<!DOCTYPE html>
<html>
    <head>
        <title>FullHouse &mdash; Seat Booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Seat booking" />
        <meta name="author" content="Hardik Shakya" />
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" type="text/css" href="css/seat.css"/>
       <!-- <script src="https://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="crossorigin="anonymous"></script>-->
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Flexslider -->
        <link rel="stylesheet" href="css/flexslider.css">
        <!-- Icomoon -->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <link rel="stylesheet" href="css/style.css">


        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
       
        <script type="text/javascript" src="js/seat.js"></script>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- Main JS -->
        <script src="js/main.js"></script>
    </head>
    <body>

            <div id="f-header">
            <div class="container">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-f-nav-toggle f-nav-toggle"><i></i></a>
                <div id="f-logo">
                    <a href="index.php" class="transition">Full<span>House</span></a>
                </div>
                <nav id="f-main-nav">
                    <ul>
                        <li><a href="index.php" class="transition" data-nav-section="home">Home</a></li>
                        <li><a href="index.php" class="transition" data-nav-section="Movies">Movies</a></li>
                        <li><a href="index.php" class="transition" data-nav-section="about">About</a></li>
                        <li><a href="index.php" class="transition" data-nav-section="contact">Contact</a></li>
                        <li><a href="index.php?page=profile&action=logout" class="transition">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="f-main">
        <div class="f-overlay-mobile"></div>
        <div id="f-home" class="js-fullheight" data-section="home">

            <div class="flexslider">
                 
                <div class="f-overlay"></div>
                <div class="f-text">
                    <div class="container">
                        <div class="row text-center">
                            <h1 class="animate-box">WELCOME FOR BOOK YOUR FUNTIME !!</h1> 
                            <div class="f-go animate-box">
                                <a href="#" class="js-f-next">
                                    Book NOW !!!
                                    <span><i class="icon-arrow-down2"></i></span>
                                </a>                                
                            </div>                               
                        </div>
                    </div>
                </div>
                <ul class="slides">
                <li style="background-image: url(images/n7.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/m3.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/n5.png);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/n6.png);" data-stellar-background-ratio="0.5"></li>             
                <li style="background-image: url(images/n1.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/m4.jpeg);" data-stellar-background-ratio="0.5"></li>
                
                </ul>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 text-center">
                    <h1>MOVIE SEAT BOOKING</h1>
                    <hr>
                    <div class="leop">
                    <div class='row text-center'>
                        <input type="text" class="form-control input" id="Name" placeholder="Enter Name" >
                        <input type="number" min='0' max='50' class="form-control input" id="Seats" placeholder="Enter number of seats">
                    </div>
                    </div>
                    
                    <div class='row'>
                        <button type="button" id="Selectseat" class="btn btn-success seatsBtn">Select Seats</button>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 bg-primary screen">SCREEN</div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <table id="seatTable" class="table fixed-column td">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th></th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                    </tr>
                                    <tr>
                                        <td>E</td>
                                    </tr>
                                    <tr>
                                        <td>F</td>
                                    </tr>
                                    <tr>
                                        <td>G</td>
                                    </tr>
                                    <tr>
                                        <td>H</td>
                                    </tr>
                                    <tr>
                                        <td>I</td>
                                    </tr>
                                    <tr>
                                        <td>J</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" id="ConfirmSeat" class="btn btn-warning seatsBtn">Confirm Seats</button>
                            <div class="thai">
                                <span class="spanBox" style='Background-color:green'></span><label>Selected Seats</label>
                                <span class="spanBox" style='Background-color:red'></span><label>Reserved Seats</label>
                                <span class="spanBox"></span><label>Empty Seats</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-2 col-md-2 col-lg-2'></div>
                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                    <table class='table-striped table table-bordered resultTable'>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>No. of Seats</th>
                                <th>Seats Reserved</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'></div>
            </div>
        </div>
        <div id="f-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="f-footer-widget">
                            <p>&copy; FullHouse. All Rights Reserved.</p>
                            <p>Designed by <a href="hardikshakya1997@gmail.com">FullHouse</a> About Owner: <a href="http://google.com/" target="_blank">Hardik</a> &amp; <a href="http://google.com/" target="_blank">Tirth</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="f-footer-widget">
                            <ul class="f-social pull-right">
                                <li>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-google"></i></a>
                                </li>
                            </ul>
                        <div class="f-footer-widget">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
