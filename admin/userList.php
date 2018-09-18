<?php
$userList = users()->list();
?>

<!-- Item list -->
<section class="content roboto">
    <div class="container-fluid" style="padding: 0px 0px 8px 0px;">
        <div class="row">
            <div class="col-md-4 col-xs-12" style="padding-top: 8px;">
                <h4 class="no-gap">Users</h4>
            </div>
            <div class="row no-gap">
                <div class="col-md-8 col-xs-3" style="padding-top: 8px;">
                    <div class="pull-right">
                        <a href="../admin/?view=addBlog" type="button" id="btn-new-item" class="btn btn-green" style="font-size: 12px;">Add a new User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-right">
    </div>
    <div class="col-md-12 no-gap">
        <div class="">
            <div class="panel-body no-gap">
                <div class="table-container" style="margin-top: 8px;">
                    <table class="table table-filter">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                            </tr>
                        </thead>
                        <?php foreach($userList as $row){ ?>
                        <tbody>
                            <tr>
                                <th><?=$row->username;?></th>
                                <th><?=$row->first_name;?></th>
                                <th><?=$row->last_name;?></th>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    <div class="content-footer">
    </div>
    </div>
</section>
<!-- End of Shop/Item list -->