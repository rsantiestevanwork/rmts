<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 08:36
 */
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Program
            <small>Admin Church</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin Church</a></li>
            <li class="active">Program</li>
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
                                <th>Total</th>
                                <th>Men</th>
                                <th>Women</th>
                                <th>Children</th>
                                <th>Type Service</th>
                                <th>Date</th>
                                <th>Time</th>
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
                                    <td><?=$row->idprogram?></td>
                                    <td><?=$row->name?></td>
                                    <td><?=$row->totalna?></td>
                                    <td><?=$row->menna?></td>
                                    <td><?=$row->womenna?></td>
                                    <td><?=$row->childna?></td>
                                    <td><?=$row->typeservice?></td>
                                    <td><?=$row->dateservice?></td>
                                    <td><?=$row->timeservice?></td>
                                    <td>
                                        <a href="<?=base_url()?>program/edit/<?=$row->idprogram?>" class="small-box-footer">
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
                                <th>Total</th>
                                <th>Men</th>
                                <th>Women</th>
                                <th>Children</th>
                                <th>Type Service</th>
                                <th>Date</th>
                                <th>Time</th>
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
