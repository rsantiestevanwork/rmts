<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 08:36
 */

$fdata = $consulta;
$title = "Program";
$titlePreview = "Form";
$titleForm = "Program Information";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?=$title?>
            <small><?=$titlePreview?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10>

                <!-- Horizontal Form -->
                <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$titleForm?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
            /*
              $mdata = array(
                'class' => 'form-horizontal'
                );
              echo form_open('datacard/modify',$mdata);
            */
            ?>
            <!-- -->
            <form name="formedit" id="formedit" class="form-horizontal" action="" method="post" accept-charset="utf-8">
                <!-- -->
                <div class="box-body">

                    <div class="form-group">
                        <label for="txtcode" class="col-sm-2 control-label">Code</label>
                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class' => 'form-control',
                                'id'    =>  'txtcode',
                                'readonly' => 'readonly'
                            );
                            echo form_input('txtcode',$fdata['idprogram'],$mdata);
                            ?>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="txtname" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txtname',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txtname',$fdata['name'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txttypeservice" class="col-sm-2 control-label">Type Services</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txttypeservice',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txttypeservice',$fdata['typeservice'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtmenna" class="col-sm-2 control-label">Total Men</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txtmenna',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txtmenna',$fdata['menna'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtwomenna" class="col-sm-2 control-label">Total Women</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txtwomenna',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txtwomenna',$fdata['womenna'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtchildna" class="col-sm-2 control-label">Total Children</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txtchildna',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txtchildna',$fdata['childna'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txttotalna" class="col-sm-2 control-label">Total Members</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txttotalna',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txttotalna',$fdata['totalna'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txttypeservice" class="col-sm-2 control-label">Type Service</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txttypeservice',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txttypeservice',$fdata['typeservice'],$mdata);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtdateservice" class="col-sm-2 control-label">Date Service</label>

                        <div class="col-sm-10">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" value="<?=$fdata['dateservice']?>" class="form-control pull-right" id="datepicker" name="txtdateservice">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txttimeservice" class="col-sm-2 control-label">Time Service</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txttimeservice',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txttimeservice',$fdata['timeservice'],$mdata);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtidchurch" class="col-sm-2 control-label">Church</label>

                        <div class="col-sm-10">
                            <?php
                            $mdata = array(
                                'class'       =>  'form-control',
                                'id'          =>  'txtidchurch',
                                'placeholder' =>  'Enter ...'
                            );
                            echo form_input('txtidchurch',$fdata['idchurch'],$mdata);
                            ?>
                        </div>
                    </div>


                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="hidden" class="form-control" name="userid" id="userid" value="0">

                    <button type="buttom" class="btn btn-default" id="btncancel" name="btncancel">Cancel</button>
                    <?php
                    $mdata = array(
                        'id'=>'mysubmit',
                        'class'         => 'btn btn-info pull-right'
                    );
                    echo form_submit('mysubmit', 'Submit',$mdata);
                    ?>
                    <!-- <button type="submit" class="btn btn-info pull-right">submit</button>-->
                </div>
                <!-- /.box-footer -->
                <!-- </form> -->
                <?php
                $mdata = '';
                echo form_close($mdata);
                ?>
        </div>
        <!-- /.box -->
</div>

<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function(){
        //$("#btncancel").hide();

        $('#btncancel').on("click",function(){
            window.location.href = "<?=base_url();?>program/";
            return(false);
        });

        $('#mysubmit').on("click",function(e){
            //alert("submit")
            var form = $('#formedit');

            var vrequest;
            if(vrequest){
                vrequest.abort();
            }
            vrequest = $.ajax({
                url:  "<?php echo base_url() ?>program/modify",
                type:  "POST",
                data:  form.serialize()
            });

            vrequest.done(function(response, textStatus, jqXHR){
                console.log("Response:"+ response);
                if(response!=''){
                    window.location.href = "<?php echo base_url() ?>program/";
                }else{
                    alert("Is not posible ...");
                    window.location.href = "<?php echo base_url() ?>program/";
                }

            });

            vrequest.fail(function(jqXHR, textStatus, thrown){
                console.log("Error:" + textStatus);
            });

            vrequest.always(function(){
                console.log("Termino Ajax");
            });

            e.preventDefault();

            return(false);
        });

    });
</script>
