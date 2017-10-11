<?php 
    
    include_once('userheader.php');
    include_once('userfooter.php');
    include('session.php');

?>



<div id="content" style="margin-bottom: 70px; color: #000; border-width: 7px; border-radius: 8px;" >
<div style="text-align: center; font-family: 'calibri' ; font-size:25px; ; color: #ecf0f1; background-color: #000;" class="alert alert">
                    <strong> Item/s reported as <u> lost</u> . </strong>
                </div>
     <link rel="stylesheet" type="text/css" href="reportstyle2.css">
        <?php
          
          $db = mysqli_connect("localhost", "root", "", "lfn");
          $sql = "SELECT * FROM items";
          $result = mysqli_query($db, $sql);

          while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
              echo "<img src='images/".$row['image']."' >";
              echo '<ul class="list-group" style="margin-left: 400px;">
                            <li class="list-group-item"> Date Reported: '.$row['upload_date'];'</li>
                        </ul>';
             echo '<li class="list-group-item"> Inquirer Full Name: '.$row['fullname'];'</li>
                        </ul>';      
               echo '<li class="list-group-item"> Contact No. : '.$row['phone'];'</li>
                        </ul>';   
               echo '<li class="list-group-item"> E-mail: '.$row['emailadd'];'</li>
                        </ul>';  
               echo '<li class="list-group-item"> Date lost: '.$row['datelost'];'</li>
                        </ul>'; 
              echo '<li class="list-group-item" > <h5>Other Details: </h5>'.$row['text'];'</li>
                        </ul>' ;
            echo '<br> <button onClick="window.print()" style="margin-top:39px; height: 30px; width: 70px; float: right;" ="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo"> Print </button>';
             echo '<br> <button style="margin-top:20px; margin-right:10px; height: 30px; width: 70px; float: right;" ="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo"> Help </button>';
            echo "</div>";
          }

        ?>


  </div>