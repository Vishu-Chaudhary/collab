<?php
include ('header.php');
 ?>
<div class="container-fluid">
  <div class="row">
              <div class="col-sm-3 col-md-4">
                 <div class="panel panel-default">
                    <div class="panel-body"  >
                      <div style="text-align:center">
                            <img src="images/profile.png" alt="users-image"style="width:80%;height:auto;">
                      </div>
                      <h4 style="text-align:center">Name <br><small>@college</small></h4>
                      <p>Branch: <small>CSE</small></p>
                      <p>Sem: <small>6th</small></p>
                      <p>Email: <small>somebody@example.mail</small></p>
                      <form role="form" action="details.php" method="post" enctype="multipart/form-data">
                            <button type="submit" class="btn btn-success pull-left">Edit Profile</button>
                            <a href="post.php"><button type="button" class="btn btn-success pull-right">New Idea</button></a>
                      </form>
                  </div>
               </div>
             </div>
             <div class="col-sm-9 col-md-8">
                <div class="panel panel-default">
                   <div class="panel-body">
                     <h4><a href="details.php"><i>Project Title</i></a>
                       <small class="pull-right">End:-5/5/2018</small>
                       <small class="pull-right">Start:2/2/2017 &nbsp;</small>
                     </h4>


                 </div>

                 </div>
                 <form role="form" action="global.php" method="post" enctype="multipart/form-data">
                       <button type="submit" class="btn btn-success pull-left">Add Projects</button>
                 </form>
              </div>


            </div>
     </div>
</div>
