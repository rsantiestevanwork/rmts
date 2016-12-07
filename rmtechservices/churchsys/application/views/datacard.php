<?php
    $mycolor = $mcolor;
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User requests Card 
        <small>admin DataCard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">BCN Card</a></li>
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
                  <th>Title</th>
                  <th>Firstname</th>
                  <th>Surname</th>
                  <th>Nationality</th>
                  <th>Gender</th>
                  <th>Date Of Birth</th>
                  <th>Expiry Date</th>
                  <th>Status</th>
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
                  <td><?=$row->idnumber?></td>
                  <td><?=$row->title?></td>
                  <td><?=$row->firstname?></td>
                  <td><?=$row->surname?></td>
                  <td><?=$row->nationality?></td>
                  <td><?=$row->gender?></td>
                  <td><?php
                    $date = new DateTime($row->dateofbirth);
                      echo $date->format('d-m-Y');
                  ?></td>
                  <td>
                    <?php
                    $date = new DateTime($row->expirydate);
                    
                      $mclass = '';
                      if(strtotime($row->expirydate) < time()){
                        $mclass ='text-red';
                      }
                      echo "<p class=$mclass>".$date->format('d-m-Y')."</p>";

                    ?>
                  </td>
                  <td>
                    <span class="badge <?=$mycolor[$row->status]?>"><?=$row->status?></span>
                  </td>
                  <td>
                    <a href="<?=base_url()?>datacard/edit/<?=$row->idnumber?>" class="small-box-footer">
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
                  <th>Title</th>
                  <th>Firstname</th>
                  <th>Surname</th>
                  <th>Nationality</th>
                  <th>Gender</th>
                  <th>Date Of Birth</th>
                  <th>Expiry Date</th>
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
