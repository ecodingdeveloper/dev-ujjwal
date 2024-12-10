
            
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-7 col-auto">
                                <h3 class="page-title">Categories</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Categories</li>
                                </ul>
                            </div>
                            <div class="col-sm-5 col">
                                <a href="javascript:void(0);" onclick="add_categories()"  class="btn btn-primary float-right mt-2">Add</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="categoriestable1" class="table table-hover table-center mb-0 w-100">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>          
            </div>
            <!-- /Page Wrapper -->
            
            

            <div id="modal_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                     <form action="#" enctype="multipart/form-data" autocomplete="off" id="categories_form" method="post"> 
                    <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

                    <div class="modal-body">
                        
                            <input type="hidden" value="" name="id"/> 
                            <input type="hidden" value="" name="method"/>
                           <div class="form-group">
                                <label for="category_name" class="control-label mb-10">Category Name <span class="text-danger">*</span></label>
                                <input type="text" parsley-trigger="change" id="category_name" name="category_name"  class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="category_image" class="control-label mb-10">Category Image <span class="text-danger">*</span></label>
                                <input type="file"  id="category_image" name="category_image"  class="form-control" >
                                <input type="hidden" name="category_img" id="category_img">
                                <div id="category_images" style="margin-top: 15px;"></div>
                            </div>
                           
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline btn-default btn-sm btn-rounded" data-dismiss="modal">Close</button>
                        <button type="submit" id="btncategoriessave" class="btn btn-outline btn-success ">Submit</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
            
        
            
    
        </div>
        <!-- /Main Wrapper -->
        
        