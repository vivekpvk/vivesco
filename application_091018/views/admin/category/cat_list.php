<?php
require(FCPATH."/application/views/admin/header.php");
require(FCPATH."/application/views/admin/sidebar.php");
?>
<div class="content-wrapper">
    <div class="row">
      <div class="content">
        <input type="button" class="btn btn-info" value="Add Category" onclick="location.href = '<?php echo base_url(); ?>admin/category/categoryadd';">
        <div class="row">
                       <div class="col-lg-12">
                        <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
 
                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
                        </div>
                    </div>
                 </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">

            <div class="card-body">
              <h4 class="card-title">Product List</h4>
              
              <div class="table-responsive">
                <table  id="pagin" class="table table-striped js-dataTable-full display">
                  <thead>
                    <tr>
                                        <th>Category Id</th>
                                        <th>Category Name</th>
                                        <th>Created_At</th>
                                        <th>Modified_At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach ($list as $post) 
                                    { ?>
                                    <tr>
                                        <td class="py-1"><?= $post->id?></td>
                                        <td><?= $post->cat_name?></td>
                                        <td><?= $post->created_at?></td>
                                        <td><?= $post->modified_at?></td>
                                        
                                        <td><?php if($post->status == "1")
                                                {
                                                    echo "Active";
                                                }
                                                else
                                                {
                                                    echo "Inactive";
                                                }
                                            ?></td>
                                         <td>
                                            <a class="btn btn-default btn-rounded btn-condensed btn-sm" type="button" data-toggle="tooltip"  title="Edit" href="<?=base_url()?>admin/category/categoryadd/edit_cat/<?=$post->id?>"><i class="fa fa-pencil"></i></a>
                                             
                                            <a class="delete btn btn-danger btn-rounded btn-condensed btn-sm"
                                            href="<?=base_url()?>admin/category/categoryadd/delete_cat/<?=$post->id;?>" data-href="" data-toggle="tooltip" title="" data-original-title="Delete" data-confirm="Are you sure to delete this item?" value="Delete">
                                            <span class="fa fa-ban" title="delete"></span>
                                        </a>
                                    </td>
                                      <?php } ?>  
                                    </tr>
                                    
                                    
                                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
  </div>

  
<?php
require(FCPATH."/application/views/admin/footer.php");
?>


          
