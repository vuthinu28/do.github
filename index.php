<?php  
 $connect = mysqli_connect("localhost", "root", "", "nhap6");  
 $query = "SELECT * FROM tbl_employee ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Import CSV File Data into MySQL Database using PHP & Ajax</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Import CSV File Data into MySQL Database using PHP & Ajax</h2>  
                <h3 align="center">Employee Data</h3><br />  
                <form id="upload_csv" method="post" enctype="multipart/form-data">  
                     <div class="col-md-3">  
                          <br />  
                          <label>Add More Data</label>  
                     </div>  
                     <div class="col-md-4">  
                          <input type="file" name="employee_file" style="margin-top:15px;" />  
                     </div>  
                     <div class="col-md-5">  
                          <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />  
                     </div>  
                     <div style="clear:both"></div>  
                </form>  
                <br /><br /><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Address</th>  
                               <th width="10%">Gender</th>  
                               <th width="20%">Designation</th>  
                               <th width="5%">Age</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["gender"]; ?></td>  
                               <td><?php echo $row["designation"]; ?></td>  
                               <td><?php echo $row["age"]; ?></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/myscript.js"></script>