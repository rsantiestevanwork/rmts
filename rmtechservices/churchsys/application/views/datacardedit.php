<?php
    $datacard = $mydatacard;
    $status = $mystatus;
    $images = $myimages;
    $rows = $status;
    $mycolor = $mcolor;
    $myoptions = $moptions;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title?>
        <small>Preview</small>
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
        <div class="col-md-6">
 
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User Information</h3>
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
                              'id'    =>  'txtcode'
                      );
                      echo form_input('txtcode',$datacard['idnumber'],$mdata);
                    ?>
                  </div>

                </div>

                <div class="form-group">
                  <label for="txttitle" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <?php
                      $mdata = array(
                              'class'       =>  'form-control',
                              'id'          =>  'txttitle',
                              'placeholder' =>  'Enter ...'
                      );
                      echo form_input('txttitle',$datacard['title'],$mdata);
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtfirstname" class="col-sm-2 control-label">Firstname</label>

                  <div class="col-sm-10">
                    <?php
                      $mdata = array(
                              'class'       =>  'form-control',
                              'id'          =>  'txtfirstname',
                              'placeholder' =>  'Enter ...'
                      );
                      echo form_input('txtfirstname',$datacard['firstname'],$mdata);
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtsurname" class="col-sm-2 control-label">Surname</label>

                  <div class="col-sm-10">
                    <?php
                      $mdata = array(
                              'class'       =>  'form-control',
                              'id'          =>  'txtsurname',
                              'placeholder' =>  'Enter ...'
                      );
                      echo form_input('txtsurname',$datacard['surname'],$mdata);
                    ?>
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="txtaddress1" class="col-sm-2 control-label">Address1</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="txtaddress1" name="txtaddress1" placeholder="Enter ..."><?=$datacard['address1']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtaddress2" class="col-sm-2 control-label">Address2</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="txtaddress2" name="txtaddress2" placeholder="Enter ..."><?=$datacard['address2']?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtresidence" class="col-sm-2 control-label">Residence</label>

                  <div class="col-sm-10">
                    <?php
                      $mdata = array(
                              'class'       =>  'form-control',
                              'id'          =>  'txtresidence',
                              'placeholder' =>  'Enter ...'
                      );
                      echo form_input('txtresidence',$datacard['residence'],$mdata);
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtnationality" class="col-sm-2 control-label">Nationality</label>

                  <div class="col-sm-10">
                    <?php
                      $mdata = array(
                              'class'       =>  'form-control',
                              'id'          =>  'txtnationality',
                              'placeholder' =>  'Enter ...'
                      );
                      echo form_input('txtnationality',$datacard['nationality'],$mdata);
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtgender" class="col-sm-2 control-label">Gender</label>

                  <div class="col-sm-10">
                    <?php
                      $mdata = array(
                              'class'       =>  'form-control',
                              'id'          =>  'txtgender',
                              'placeholder' =>  'Enter ...'
                      );
                      echo form_input('txtgender',$datacard['gender'],$mdata);
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtheight" class="col-sm-2 control-label">Height</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtheight" id="txtheight" value="<?=$datacard['height']?>" placeholder="Enter ...">
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtexpirydate" class="col-sm-2 control-label">Expiry Date</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtexpirydate" name="txtexpirydate" value="<?=$datacard['expirydate']?>" placeholder="Enter ...">
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtdateofbirth" class="col-sm-2 control-label">Date of Birth</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtdateofbirth" name="txtdateofbirth" value="<?=$datacard['dateofbirth']?>" placeholder="Enter ...">
                  </div>
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title"><strong>Assign New Status</strong></h3>
                </div>

                <div class="form-group">
                  <label for="txtstatus" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <?php
                      $fvalue='';
                      foreach ($rows as $row) {
                        $fvalue=$row->status;
                      }
                      $mdata = array(
                        'class' =>  'form-control', 
                        'id'    =>  'txtstatus'
                      );

                      $options = $myoptions;
                      echo form_dropdown('txtstatus' , $options, $fvalue, $mdata);
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtreason" class="col-sm-2 control-label">Reason</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="txtreason" name="txtreason" placeholder="Enter ..."></textarea>
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
        <!-- begin Pictures-->
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Images</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!--
                <ol class="carousel-indicators">
                  <?php
                    $i=0;
                    $active='active';
                    foreach ($images as $f) {
                      if($i!=0){
                        $active='';
                      }
                  ?>
                  <li data-target="#carousel-example-generic" data-slide-to='<?=$i?>' class="<?=$active?>"></li>
                  <?php
                      $i++;
                    }
                  ?>
                </ol>
                -->
                <div class="carousel-inner">
                  <?php
                    $i=0;
                    $active='active';
                    foreach ($images as $f) {
                      if($i!=0){
                        //$active='';
                      }
                  ?>
                  <div class="item <?=$active?>" align="center">
                    <img src="<?php 
                                                    if($f->picture!=null){
                                                        echo("data:image/jpeg;base64,".base64_encode($f->picture));
                                                    }else{
                                                        echo($f->url);
                                                    }?>" alt="<?=$f->type?>" width="190px" height="200px">
                    <div class="carousel-caption">
                      <?=$f->type?>
                    </div>
                    
                  </div>
                  <?php
                      $i++;
                    }
                  ?>
                  
                </div>
                <!--
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
                -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- end pictures -->
        <div class="col-md-6">
        
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Date</th>
                  <th>Reason</th>
                  <th style="width: 40px">Status</th>
                </tr>
                <?php
                  $i=0;
                  //for ($i=0; $i < 25 ; $i++) { 
                    # code...
                  foreach ($rows as $row) {
                    $i++;
                ?>
                <tr>
                  <td><?=$row->idstatus?></td>
                  <td><?=$row->statusdate?></td>
                  <td>
                    <?=$row->reason?>
                  </td>
                  <td><span class="badge <?=$mycolor[$row->status]?>"><?=$row->status?></span></td>
                </tr>
                <?php
                  }
                ?>
                
              </table>
            </div>
            <!-- /.box-body -->
            <!--
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            -->
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
        window.location.href = "<?=base_url();?>datacard/";
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
          url:  "<?php echo base_url('datacard/modify') ?>",
          type:  "POST",
          data:  form.serialize()
          });

        vrequest.done(function(response, textStatus, jqXHR){
          console.log("Response:"+ response);
          if(response!=''){
            window.location.href = "<?php echo base_url() ?>datacard/edit/" + response;  
          }else{
            alert("Is not posible ...");
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