<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                require_once 'utils/functions.php';
                    
                echo '<a href = "index.php" class = "navbar-brand">
                    Event Management Systems
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                if(isset($_SESSION['username'])){
                    require_once 'utils/functions.php';
                    echo'<li><a  href="index.php">Home</a></li>';
                    echo'<li> <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu  navbar-dropdown" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="wedding_planner.php">Wedding Planner</a><br>
                            <a class="dropdown-item" href="private_party.php">Private Party</a><br>
                            <a class="dropdown-item" href="corporate_event.php">Corporate Event</a><br>
                        </div>
                    </li>';
                    echo'<li><a href="contact.php">Contacts Us  </a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
                //links non database contents. *if logged out
                else {
                    echo'<li><a  href="index.php">Home</a></li>';
                    echo'<li> <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu  navbar-dropdown" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="wedding_planner.php">Wedding Planner</a><br>
                            <a class="dropdown-item" href="private_party.php">Private Party</a><br>
                            <a class="dropdown-item" href="corporate_event.php">Corporate Event</a><br>
                        </div>
                    </li>';
                    echo'<li><a href="contact.php">Contacts Us  </a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "login_form.php">LogIn</a></li>';
                }
                ?>
        </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1>Shreeji Events Planner & Management </h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                Whether you're looking to book a Private party, Corporate gathering, wedding or private dining event, charity function our dedicated Shreeji Events team can create a package that will meet
                your every need.
                </p>
                <p id="dateAndTime"></p>
            </div>
        </div>
    </div>
</header>