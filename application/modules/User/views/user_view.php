<br/><br/><br/>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Student
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>

            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL ADD -->
           <form>
           <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                       <!-- <div class="form-group row">
                           <label class="col-md-2 col-form-label">Student ID</label>
                           <div class="col-md-10">
                             <input type="text" name="user_id" id="user_id" class="form-control" placeholder="Student ID">
                           </div>
                       </div> -->
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Student Firstname</label>
                           <div class="col-md-10">
                             <input type="text" name="user_fname" id="user_fname" class="form-control" placeholder="Student Firstname">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Student Lastname</label>
                           <div class="col-md-10">
                             <input type="text" name="user_lname" id="user_lname" class="form-control" placeholder="Student Lastname">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Student Birthdate</label>
                           <div class="col-md-10">
                             <input type="date" name="user_birthdate" id="user_birthdate" class="form-control" placeholder="Student Lastname">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-md-2 col-form-label">Gender</label>
                           <div class="row">
                               <div class="col-md-6">
                               <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="gender" id="user_gender"   value="Male">Male
                                  </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="gender" id="user_gender"  value="Female">Female
                                  </label>
                                </div>
                           </div>
                       </div>
                       </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                 </div>
               </div>
             </div>
           </div>
           </form>
       <!--END MODAL ADD-->

       <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">User ID</label>
                            <div class="col-md-10">
                              <input type="text" name="user_id_edit" id="user_id_edit" class="form-control" placeholder="Product Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="fname_user_edit" id="fname_user_edit" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Last Name</label>
                            <div class="col-md-10">
                              <input type="text" name="lname_user_edit" id="lname_user_edit" class="form-control" placeholder="Price">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="user_id_delete" id="user_id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
