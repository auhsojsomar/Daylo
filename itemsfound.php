<?php 
    
    include_once('userheader.php');
    include_once('userfooter.php');
    include('session.php');

?>



<div id="content" style="margin-bottom: 70px; color: #000; border-width: 7px; border-radius: 8px;" >
     <link rel="stylesheet" type="text/css" href="reportstyle2.css">
     <div style="text-align: center; font-family: 'calibri' ; font-size: 25px ; color: #ecf0f1; background-color: #000;" class="alert alert">
                    <strong> Item/s reported as <u>  Found  </u> . </strong>
                </div>
        <?php
          
          $db = mysqli_connect("localhost", "root", "", "lfn");
          $sql = "SELECT * FROM itemsfound";
          $result = mysqli_query($db, $sql);

          while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
              echo "<img src='imgfound/".$row['image']."' >";
               echo '<ul class="list-group" style="margin-left: 400px;">
                            <li class="list-group-item"> Date Reported: '.$row['upload_date'];'</li>
                        </ul>';
               echo '<li class="list-group-item" >Uploader Contact no. : '.$row['contact'];'</li>
                        </ul>' ;
              echo '<li class="list-group-item">Location where it found: '.$row['location'];'</li>
                        </ul>';
              echo '<li class="list-group-item" > <h5>Other Details: </h5>'.$row['text'];'</li>
                        </ul>' ;


              echo '<br> <button target="_blank" style="margin-top:20px; height: 30px; width: 70px; float: right;" ="button" class="btn btn-success">Claim</button>';  
            echo "</div>";
          }
        ?>

  </div>