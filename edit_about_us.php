<!DOCTYPE html>
<html>
         <?php require_once 'conn.php';  ?>

            <?php   
            //$id = $_GET['edit'];                       
            $mysqli = new mysqli('localhost','root','','wats_aboutus') or die (mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM wats_aboutus") or die ($mysqli->error);
            ?>                          
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/personalized.css">
</head>

<body id="page-top">
    <div id="wrapper">
 

      <!--   <section id="view_about" style="display: none;" >
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">About Us</h3>
                    
                        <div class="card-body">
                        
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Mission</th>
                                            <th>Vision</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    2 //THIS CODE IS FOR DISPLAYING OF THE DATA IN THE TABLE 
                                <?php while ($row=$result->fetch_assoc()): ?>
                            <tr>
                                
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['mission']; ?></td>
                                <td><?php echo $row['vision']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['contactno']; ?></td>
                                <td><?php echo $row['location']; ?></td>





                                            <td>
            <a  href="about_us.php? delete=<?php echo $row['id']; ?>">
                                    <button type="button" class="btn btn-danger">
                                    <i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
            </a>

           <a  href="about_us.php? edit=<?php echo $row['id']; ?>">

                                              <button  type="button" class="btn btn-warning"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
            </a>
                                <a  href="#test1">
                                               <button  type="button" class="btn btn-primary "><i class="fab d-xl-flex justify-content-xl-cetenr align-items-xl-center">&#xf3e8;</i></button>
                                            </td>
                                </a>
                                        </tr>

                                        </td>
                            </tr>
                                <?php endwhile; ?>
                            2//THIS CODE IS FOR DISPLAYING OF THE DATA IN THE TABLE 
                                    </tbody>

                                </table>
                            </div>
                              <div class="row">
                                <div>
                               <a href="add_about.php">
                                <button  class="btn btn-success" type="button" style="float: right; height: 38px; margin-bottom: 20px;">Add &nbsp;<i class="fa fa-plus-circle"></i></button>
                                </a>
                                </div>
                            </div>


                            
                        </div>
                    </div>
                </div>
            </div>
    </section> -->










 <!--888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->
        <style>
            .section_edit{
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  min-height: 100vh;
                  margin-top: 20px;
            }
              
        </style>


            <section  class="section_edit" id="edit_about" style="display: block;">

                <div id="test1" class="container-fluid">
                   
                    <center><h4 class="text-primary">Modify About Us</h4></center>
                    <div class="card shadow">
                        
                        <div class="container card-body" style="display: flex; ">
 
                          <div class="row">

                            <div class=" col-sm-3" style="margin-right: 60px; ">

               <form action="conn.php" method="POST" enctype="">
               


<!--//THIS IS FOR EDIT DATA--><input type="" name="id" value="<?php echo $id; ?>"><!--//THIS IS FOR EDIT A DATA-->

                                  <p style="margin: 0px; margin-bottom: 5px;">Description</p>
                                <textarea value="" class="form-control h-15" rows="10" type="text" name="txtDesc" placeholder="Description" required><?= $desc; ?></textarea><br>

                                <p style="margin: 0px; margin-bottom: 5px;">Mission</p>

                                <textarea value="" class="form-control h-15" rows="10" type="text" name="txtMission" placeholder="Content"
                                     required><?= $mission; ?></textarea><br>


                             </div>

                              <div class="col-sm-3"   style="margin-right: 60px;">

                                <p style="margin: 0px; margin-bottom: 5px;">Vision</p>

                                <textarea value="" class="form-control h-15" rows="10" type="text" name="txtVision" placeholder="Content"
                                     required><?= $vision; ?></textarea><br>

                                <p style="margin: 0px; margin-bottom: 5px;">Email</p>
                                <input type="email" value="<?= $email?>" class="form-control" type="text" name="txtEmail" placeholder="Email@sample.com"
                                required><br>
                                <p style="margin: 0px; margin-bottom: 5px;">Contact Number</p>
                                <input type="text" value="<?= $contact ?>" class="form-control"  name="txtContact" placeholder="Contact Number"
                                required><br>
                              </div>





                                <div class="col-sm-3"  >
                                   <p style="margin: 0px; margin-bottom: 5px;">Location</p>
                                <textarea type="" value="" class="form-control h-10" type="text" name="txtLocation" placeholder="Location"
                                required><?=$location; ?></textarea><br>

                                


                                 <div><button type="submit" name="update" class="btn btn-success" type="button" style="height: 38px; margin-top: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></div>
                                
                                </div>
                               

                                <table border="solid gray 1px;" style="margin-top: 25px; border-left: hidden; border-right: hidden; border-bottom: hidden;">
                                    <tr>
                                        <th></th>
                                    </tr>
                                </table>
                                 

                                </form>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>













            
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>






 <script type="text/javascript">
  function display_edit(){
    document.getElementById("edit_about").style.display = "block";
    document.getElementById("view_about").style.display = "none";
 }
  /*function display_about() {

    document.getElementById("edit_about").style.display = "none";
    document.getElementById("view_about").style.display = "block";

  }*/



  </script>







</body>

</html>
