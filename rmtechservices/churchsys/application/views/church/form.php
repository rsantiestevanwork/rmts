<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 08:35
 */

$fdata = $consulta;
$title = "Church";
$titlePreview = "Form";
$titleForm = "Church Information";
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
                                    echo form_input('txtcode',$fdata['idchurch'],$mdata);
                                    ?>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="txttitle" class="col-sm-2 control-label">Name</label>

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
                                <label for="txtdescription" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-10">
                                    <?php
                                    $mdata = array(
                                        'class'       =>  'form-control',
                                        'id'          =>  'txtdescription',
                                        'placeholder' =>  'Enter ...'
                                    );
                                    echo form_input('txtdescription',$fdata['description'],$mdata);
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txturl" class="col-sm-2 control-label">URL</label>

                                <div class="col-sm-10">
                                    <?php
                                    $mdata = array(
                                        'class'       =>  'form-control',
                                        'id'          =>  'txturl',
                                        'placeholder' =>  'Enter ...'
                                    );
                                    echo form_input('txturl',$fdata['url'],$mdata);
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txtemail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <?php
                                    $mdata = array(
                                        'class'       =>  'form-control',
                                        'id'          =>  'txtemail',
                                        'placeholder' =>  'Enter ...'
                                    );
                                    echo form_input('txtemail',$fdata['email'],$mdata);
                                    ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="txtaddress" class="col-sm-2 control-label">Address</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" id="txtaddress" name="txtaddress" placeholder="Enter ..."><?=$fdata['address']?></textarea>
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
            window.location.href = "<?=base_url();?>church/";
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
                url:  "<?php echo base_url() ?>church/modify",
                type:  "POST",
                data:  form.serialize()
            });

            vrequest.done(function(response, textStatus, jqXHR){
                console.log("Response:"+ response);
                if(response!=''){
                    //window.location.href = "<?php echo base_url() ?>church/" + response;.
                    window.location.href = "<?php echo base_url() ?>church/";
                }else{
                    //alert("Is not posible ...");
                    window.location.href = "<?php echo base_url() ?>church/";
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
