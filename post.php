<?php
include ('header.php');
 ?>
<div class="container-fluid">
  <div class="row">
        <div class="col-sm-12">
            <h3>Add New Project Post</h3>
        </div>
              <div class="col-sm-12 col-md-12">
                 <div class="panel panel-default">
                    <div class="panel-body" >
                      <form class="form-horizontal" role="form" action="details.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <div>
                                  <input class="form-control " name="title" maxlength="80" name="post_title" type="text"placeholder="Project Title">
                              </div>
                            </div>
                            <div class="form-group">
                              <div>
                                  <input class="form-control " maxlength="80" name="skills" type="text"placeholder="Skills Required">
                              </div>
                            </div>
                          <div class="form-group ">
                                <textarea  class="form-control" name="name" rows="10" cols="80" placeholder="Project Description"></textarea>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                          </div>
                      </form>

                     </div>

                  </div>
               </div>
      </div>
</div>
