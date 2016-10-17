<div>
        <ul class="breadcrumb">
                <li>
                        <a href="#">Home</a> <span class="divider">/</span>
                </li>
                <li>
                        <a href="#">Manage Manufacturers</a>
                </li>
        </ul>
</div>

<div class="row-fluid sortable">	
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2>Manufacturer Manager</h2>
                        <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                        </div>
                </div>
                <div class="box-content">
                        <h3 class="success_message">
                            <?php
                            $message = $this->session->userdata("message");
                            if($message != NULL){
                                echo $message;
                                $this->session->unset_userdata("message");
                            }
                            ?>
                        </h3>
                        <h3 class="error_message">
                            <?php
                            $error = $this->session->userdata("error");
                            if($error != NULL){
                                echo $error;
                                $this->session->unset_userdata("error");
                            }
                            ?>
                        </h3>
                        <table class="table table-bordered table-striped table-condensed">
                                  <thead>
                                          <tr>
                                                  <th>ID</th>
                                                  <th>Manufacturer Name</th>
                                                  <th>Publication Status</th>
                                                  <th>Action</th>                                          
                                          </tr>
                                  </thead>   
                                  <tbody>
                                      <?php foreach ($all_manufacturers as $v_manufacturer) { ?>
                                        <tr>
                                            <td><?php echo $v_manufacturer->manufacturer_id; ?></td>
                                            <td class="center"><?php echo $v_manufacturer->manufacturer_name; ?></td>
                                            <td class="center"><?php 
                                                if($v_manufacturer->mn_publication_status == 1){
                                                    ?><span class="success_message">Published</span><?php
                                                } else {
                                                    ?><span class="error_message">Unpublished</span><?php
                                                }
                                                ?></td>
                                            <td class="center">
                                                <a class="btn btn-info" href="<?php echo base_url(); ?>manufacturer_controller/edit_manufacturer/<?php echo $v_manufacturer->manufacturer_id; ?>" title="Edit"><i class="icon-edit icon-white"></i></a>
                                                <a class="btn btn-danger" href="<?php echo base_url(); ?>manufacturer_controller/delete_manufacturer/<?php echo $v_manufacturer->manufacturer_id; ?>" onclick="return confirm('Are you sure, you want to delete this manufacturer : <?php 
                                                    echo $v_manufacturer->manufacturer_name;
                                                ?> ?')" title="Delete"><i class="icon-trash icon-white"></i></a> 
                                                <?php
                                                if($v_manufacturer->mn_publication_status == 1) {
                                                ?>
                                                    <a class="btn btn-danger" href="<?php echo base_url(); ?>manufacturer_controller/unpublish_manufacturer/<?php echo $v_manufacturer->manufacturer_id; ?>" onclick="return confirm('Warning : All Products under Manufacturer : <?php 
                                                        echo $v_manufacturer->manufacturer_name;
                                                    ?> will be Unpublished . Are you sure, you want to Unpublish this ?')" title="Unpublish"><i class="icon-eye-close icon-black"></i></a>
                                                <?php } else { ?>
                                                    <a class="btn btn-success" href="<?php echo base_url(); ?>manufacturer_controller/publish_manufacturer/<?php echo $v_manufacturer->manufacturer_id; ?>" title="Publish"><i class="icon-eye-open icon-white"></i></a>
                                                <?php } ?> 
                                            </td>                                       
                                        </tr>
                                        <?php } ?>
                                  </tbody>
                         </table>  
                         <div class="pagination pagination-centered">
                          <ul>
                                <li><a href="#">Prev</a></li>
                                <li class="active">
                                  <a href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                          </ul>
                        </div>     
                </div>
        </div><!--/span-->
</div><!--/row-->