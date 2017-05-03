<?php
include ('header.php');
 ?>
<div class="container-fluid">
  <div class="row">
              <div class="col-sm-3 col-md-4">
                 <div class="panel panel-default">
                    <div class="panel-body" style="text-align:center" >
                      <img src="images/profile.png" alt="users-image"style="width:80%;height:auto;">
                      <h4>UserName <br><small>@Team Leader</small></h4>
                      <p>Experience: <small>C,Python</small></p>
                      <p>Project Posted: <small>100</small></p>
                      <p>Project Completed: <small>100</small></p>

                  </div>
               </div>
             </div>
             <div class="col-sm-9 col-md-8">
                <div class="panel panel-default">
                   <div class="panel-body" style="text-align:center">
                     <h4><a href="#"><i>Project Title</i></a></h4>


                 </div>
                 <div class="panel-footer" style="text-align:center">
                  <p>project Details</p>

                 </div>
              </div>
              <form role="form" action="details.php" method="post" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-success pull-left">Collab Now</button>
                </form>

            </div>
     </div>
</div>
