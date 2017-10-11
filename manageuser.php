<?php
	include('adminheader.php');
  	include('adminfooter.php');
    include('config.php');
 ?>


 <div class="page-content">
                    <div id="tab-general">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_data_Modal" id="add_button" style="margin-bottom: 20px;"><i class="fa fa-plus-circle"></i> Add Employee</button>
                        
                        <table user_id="user_data" class="ui celled table table-striped table-hover"  cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                <th>First Name</th>
                               
                                
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                              </tr>
                          </thead>
                        </table>
                    </div>
                </div>

                