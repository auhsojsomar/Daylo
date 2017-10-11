<?php
	include_once('userheader.php');
    include_once('userfooter.php');
    include('lostupload.php');

?>
	
<div class="col-sm-4" style="margin-left: 450px; margin-bottom: 50px;">
                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color: #000;">
                                <h3 class="panel-title" style="text-align: center; background-color: #000;"><strong> Report Lost </strong></h3>
                            </div>
                            <div class="panel-body" style="background-color:  #1d2129;">
                                <form style="margin-left: 20px;" method="POST" action="uploadcompletelost.php" enctype="multipart/form-data">
                                  <label style="margin-top: 5px; color: #e74c3c;"> Full Name: </label>
                                <input style=" border-radius: 5px;" class="form-control" type="text" name="fullname" placeholder="Name" required="">
                                <label style="margin-top: 5px; color: #e74c3c;"> Contact no. </label>
                                <input style=" border-radius: 5px;" class="form-control" type="number" name="phone" placeholder="Mobile No." required="">
                                  <label style="margin-top: 5px; color: #e74c3c;"> Valid E-mail Address:  </label>
                                <input style=" border-radius: 5px;" class="form-control" type="email" name="emailadd" placeholder="E-mail" required="">
                                 <label style="margin-top: 5px; color: #e74c3c;"> Date Lost: </label>
                                <input style="border-radius: 5px;" class="form-control" type="date" name="datelost" placeholder="Date">
                                <label style="margin-top: 5px; color: #e74c3c;"> (Optional) Location Where it Lost: </label>
                                <input style="border-radius: 5px;" class="form-control" type="text" name="location" placeholder="Input here">
                                
                                
                                <label style="margin-top: 5px; color: #e74c3c;"> Item Category: </label>
                                 <select style="height: 50px; width: 100px; margin: 5px;" >
                                    <option value="gadget"> Gadget </option>
                                    <option value="Jewelry"> Jewelry </option>
                                    <option value="Accessories"> Accessories </option>
                                    <option value="ID"> ID/Cards </option>
                                    <option value="others"> Other Matters </option>
                                </select>
                                <label style="margin-top: 5px; color: #e74c3c; float right: "> Item Color </label>
                                 <select style="height: 50px; width: 100px; margin: 5px;" name="color">
                                    <option value="blue"> Blue </option>
                                    <option value="red"> Red </option>
                                    <option value="green"> Green </option>
                                    <option value="yellow"> Yellow </option>
                                    <option value="purple"> Purple </option>
                                    <option value="pink"> Pink</option>
                                    <option value="black"> Black </option>
                                    <option value="white"> White </option>
                                </select> </br>

                               
                                
<div class="wrapper" style="margin-top: 5px; margin-left: 25px; color: #ecf0f1;">
	<input type="hidden" name="size" value="1000000" style="color: #e74c3c;"> Photos if any: </input>
		<br><input type="file" name="image" alt="icon1.png"></br>
        <p>ITEMS REPORTING MISSING
(Be descriptive)</p>
		<textarea style=" border-radius: 5px; background-color: #000;" name="text" cols="40" placeholder=" Other Details"></textarea>
			
			<button style="margin-top: 8px; margin-left: 100px;" type="submit" class="btn btn-lg btn-danger" name="upload" value="upload image">Upload</button>
		</div>
	</div>
</div>

</div>

		</div>
	</form>
</div>
</body>