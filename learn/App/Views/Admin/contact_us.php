<?php 
$CourseRequest=$admin->getPublicMessage("*",50);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Recent Contact Us Messages</b></h4>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group">
                </div>
                <div id="datatable-buttons_filter" class="dataTables_filter">

                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Names</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" >Phone</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" >Email</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" >Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($CourseRequest as $key => $value) {

                            ?>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">
                                   <a href="#">
                                       <?php echo $value['names']; ?>
                                   </a>
                                </td>

                                <td>
                                    <span class="badge badge-success">
                                       <?php echo $value['phone'] ?>
                                    </span>
                                </td>
                                <td>
                                    <strong>
                                        <a data-toggle="collapse" href="#" data-target="#demo">
                                            <?php echo $value['email']; ?>
                                        </a>
                                    </strong>
                                </td>
                                <td>
                                    <?php 
                                     if($value['status']=='UNREAD'){
                                        ?>
                                        <span class="badge badge-danger">
                                            <?php echo $value['status']; ?>
                                        </span>
                                        <?php
                                     }elseif($value['status']=='READ'){
                                        ?>
                                        <span class="badge badge-success">
                                            <?php echo $value['status']; ?>
                                        </span>
                                        <?php
                                     }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group m-b-10">
                                        <button message_id="<?php echo $value['id']; ?>" message="<?php echo $value['message']; ?>" name="<?php echo $value['names']; ?>" email="<?php echo $value['email']; ?>" class="btn btn-info btn-sm waves-effect btn_view_message">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a message="<?php echo $value['id']; ?>" href="#" class="btn btn-success btn-sm waves-effect btn_delete_message">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">
                
            </div>
            <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate"></div>
        </div>
        </div>
    </div>
</div>