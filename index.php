<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Shreeji Events Company</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder -->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder -->
    </head>
    <style>
    .imgSilder {
      width: 100%;
      height: 80vh; 
      overflow: hidden; 
      position: relative;
      place-items:center;
      display: grid;
    }
    .moving-image {
        width:73%;
        height: 600px;
        background-size:100% 100%;
        
        animation: changeImage 20s linear infinite;
    }
    @keyframes changeImage {
      1% {
        background-image: url("images/wedding.jpg");
      }
      11% {
        background-image: url("images/private.jpg");
      }
      22%{
        background-image: url("images/corp.jpg");
      }
      33%{
        background-image: url("images/wedding1.jpg");
      }
      44%{
        background-image: url("images/main.jpg");
      }
      55%{
        background-image: url("images/corp1.jpg");
      }
      66%{
        background-image: url("images/wedd2.jpg");
      }
      77%{
        background-image: url("images/private1.jpg");
      }
      88%{
        background-image: url("images/corp2.jpg");
      }
      99%{
        background-image: url("images/wedding.jpg");
      }
    }
  </style>
    <body>
         <?php require 'utils/header.php'; ?><!-- header content. file found in utils folder -->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/wedding1.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Wedding</h1><!--title-->
                            <p><!--content-->
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            <a href="wedding_planner.php">View More Services on Wedding </a> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Private Party</h1><!--title-->
                            <p><!--content-->
                                Private Parties and crafts unforgettable moments that leave lasting memories. 
                                From intimate gatherings to lavish affairs, we curate every detail with impeccable precision, blending local charm and global sophistication. 
                                Step into a world of bespoke celebrations where dreams come to life.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            <a href="private_party.php">View More Services on Party. </a> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/private.jpg" class="img-responsive">
                        </div>
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/corp.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Corporate Event Management Companies</h1><!--title-->
                            <p><!--content-->
                                Experience the magic of top corporate event management companies. If you want to make a statement at your next corporate event, partner with Shreeji Events Planner & Management Company.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            <a href="corporate_event.php">View More Services on Party. </a> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <br><br>
        <div class="imgSilder"> 
            <div class="moving-image">
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
