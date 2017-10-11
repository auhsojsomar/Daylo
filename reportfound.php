<?php
	include_once('userheader.php');
    include_once('userfooter.php');
    include('foundupload.php');

?>

 <div class="col-sm-4" style="margin-left: 450px;">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="background-color: #000;">
                                <h3 class="panel-title" style="text-align: center; background-color: #000;"> <strong> Report Found </strong> </h3>
                            </div>
                            <div class="panel-body" style="background-color:  #1d2129;">
                                <form style=" margin-left: 20px;" method="POST" action="uploadcomplete.php" enctype="multipart/form-data">
                                <label style=" color: #2ecc71;"> Contact no. : </label>
                                <input style=" border-radius: 5px;" class="form-control" type="number" name="contact" placeholder="Enter your Contact no: " required=""></input>
                                <label style="margin-top: 5px; color: #2ecc71;" > Item found : </label>
                                <input style="border-radius: 5px;" class="form-control" type="text" name="itemname" placeholder="Item" required=""></input>
                                <label style="margin-top: 5px; color: #2ecc71;"> Location : </label>
                                <input style="border-radius: 5px;" class="form-control" type="text" name="location" placeholder=" Location" required=""></input>
                                <div class="wrapper" style="color: #ecf0f1; margin-top: 5px; margin-left: 25px;">
                                	<input type="hidden" name="size" value="1000000" > ITEMS REPORTING MISSING
                                (Be descriptive) </input>
                                		<br><input type="file" name="image" ></br>

                                		<textarea style=" border-radius: 5px; background-color: #000;" name="text" cols="40" placeholder=" Other Details"></textarea>
                                			
                                			<button style="margin-top: 8px; margin-left: 100px;" type="submit" class="btn btn-lg btn-success" name="uploadfound" value="upload image">Upload</button>

                                		</div>

                                	
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                	


                                		
                                		</div>
                                	</form>
</div>
</body>