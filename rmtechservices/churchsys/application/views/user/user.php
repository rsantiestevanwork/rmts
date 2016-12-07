<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 22/09/2016
 * Time: 16:56
 */

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>Admin Church</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin Church</a></li>
            <li class="active">Data Card</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Cards Request</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Login</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>URL</th>
                                <th>Registered</th>
                                <th>User Activatino</th>
                                <th>User Status</th>
                                <th>Church</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //for ($i=0; $i < 25 ; $i++) {
                            # code...
                            foreach ($consulta as $row) {
                                ?>
                                <tr>
                                    <td><?=$row->iduser?></td>
                                    <td><?=$row->login?></td>
                                    <td><?=$row->firstname?></td>
                                    <td><?=$row->lastname?></td>
                                    <td><?=$row->email?></td>
                                    <td><?=$row->url?></td>
                                    <td><?php
                                        $date = new DateTime($row->registered);
                                        echo $date->format('d-m-Y');
                                        ?></td>
                                    <td><?=$row->useractivation?></td>
                                    <td><?=$row->userstatus?></td>
                                    <td><?=$row->idchurch?></td>
                                    <td><?=$row->idrole?></td>
                                    <td>
                                        <a href="<?=base_url()?>user/edit/<?=$row->iduser?>" class="small-box-footer">
                    <span class="label label-primary">         Editar
                    </span>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Login</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>URL</th>
                                <th>Registered</th>
                                <th>User Activatino</th>
                                <th>User Status</th>
                                <th>Church</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
