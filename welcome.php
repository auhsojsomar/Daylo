<?php 
    
    include_once('userheader.php');
    include_once('userfooter.php');
    include('session.php');

?>
   <div class="row" style=" margin-top: -15px;">
                    <div class="col-lg-12" style="margin-top: -10px;">
                        <h1 class="page-header" style="color: #337ab7; padding: 5px; ">User Dashboard</h1>
                        <ol class="breadcrumb" style="background-color: #24292e;">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="welcome.php#1 ">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-desktop"></i> About
                            </li>
                        </ol> 
                    </div>
                </div>
                <div class="jumbotron" style="background-color: #24292e; margin-top: -18px;  padding: 15px;">

                    <h1 style="color: #f1c40f;">Hello, @<?php echo $login_session; ?>!</h1>
                    <p style="color: #ecf0f1;">A lost and found (American English) or lost property (British English), or lost articles (also Canadian English) is an office in a public building or area where people can go to retrieve lost articles that may have been found by others. Frequently found at museums, amusement parks and schools, a lost and found will typically be a clearly marked box or room in a location near the main entrance.

Some lost and found offices will try to contact the owners of any lost items if there are any personal identifiers available. Practically all will either sell, give or throw away items after a certain period has passed to clear their storage.A lost and found (American English) or lost property (British English), or lost articles (also Canadian English) is an office in a public building or area where people can go to retrieve lost articles that may have been found by others. Frequently found at museums, amusement parks and schools, a lost and found will typically be a clearly marked box or room in a location near the main entrance.
</p>

                    <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
                    </p>
                </div>
            
  </div>


  <?php
      include("database.php");

      $sql = "SELECT * FROM items";
      $result = $conn->query($sql);
  ?>

<div id="content" style="margin-bottom: 70px; color: #000; border-width: 7px; border-radius: 8px;" >
     <link rel="stylesheet" type="text/css" href="lost.css">
        <h2 style=" font-family: 'calibri'; color: #000; text-align: center;"> <strong> ITEMS LOST </strong> </h2>
        <?php
        
          $db = mysqli_connect("localhost", "root", "", "lfn");
          $sql = "SELECT * FROM items";
          $result = mysqli_query($db, $sql);

          while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
              echo "<img src='images/".$row['image']."' >";
              echo "<p>".$row['text']."</p>";
            echo "</div>";
          }
        ?>
</div>
  


  <div id="content" style="margin-bottom: 70px; float: right; color: #000; border-width: 7px; border-radius: 8px;" >
     <link rel="stylesheet" type="text/css" href="found.css">
     <h2 style=" font-family: 'calibri'; color: #000; text-align: center;"> <strong> ITEMS FOUND </strong> </h2>
        <?php
          
          $db = mysqli_connect("localhost", "root", "", "lfn");
          $sql = "SELECT * FROM itemsfound";
          $result = mysqli_query($db, $sql);

          while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
              echo "<img src='imgfound/".$row['image']."' >";
              echo "<p>".$row['text']."</p>";
            echo "</div>";
          }
        ?>
  </div>
  
  <div>
    <h1 style="color: #222;  text-align: center; margin-bottom: 80px;"> Lost & Found  </h1>
  </div>


</div>
