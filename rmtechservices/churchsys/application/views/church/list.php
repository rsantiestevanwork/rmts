<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 08:35
 */
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Church
            <small>Admin Church</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin Church</a></li>
            <li class="active">Church</li>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>URL</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //for ($i=0; $i < 25 ; $i++) {
                            # code...
                            foreach ($consulta as $row) {
                                ?>
                                <tr>
                                    <td><?=$row->idchurch?></td>
                                    <td><?=$row->name?></td>
                                    <td><?=$row->description?></td>
                                    <td><?=$row->url?></td>
                                    <td><?=$row->email?></td>
                                    <td><?=$row->address?></td>
                                    <td>
                                        <a href="<?=base_url()?>church/edit/<?=$row->idchurch?>" class="small-box-footer">
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>URL</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Option</th>
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
