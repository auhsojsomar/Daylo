<?php
	include_once('userheader.php');
	include_once('userfooter.php');
	include('session.php');
	include('lostupload.php');
 ?>


 	 <div class="jumbotron" style="padding: 10px; background-color: #eee; margin: 20px;">

                    <h2> We are delighted to help you <?php echo $login_session; ?>!</h2>
                    <p style="font-size: 20px; font-family: calibri;"> Rest assured that your reported lost item will be added to our <a href="Itemslost.php">Item lost list</a>. Until then, We will do our utmost to return your item to you. </br>
                   	</p>
                   	<p><a href="welcome.php" style="float: left; margin-right: 20px;" role="button">Back to homepage &raquo;</a>
                    </p>
</div>
                    
      