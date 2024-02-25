<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Pesan User</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="col-lg-12">
                    <!-- Chat Panel Example-->
                    <div class="chat-panel panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Pesan Masukkan Dari User
                        </div>

                        <div class="panel-body">
                            <ul class="chat">
                            	<?php
                            	$sql= mysqli_query($mysqli,"select * from tb_pesan");
                            	while ($data= mysqli_fetch_array($sql)) {

                            	 ?>

                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font"><?php echo $data['nama']; ?> </strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> <?php echo $data['tanggal']; ?> &nbsp; &nbsp;&nbsp;&nbsp; <a href="?page=admin&action=delpes&kdpes=<?php echo $data['id']; ?> " title=""> <button type="" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> </button></a>
                                            </small>
                                        </div>
                                        <p>
                                            <?php echo $data['pesan']; ?>
                                        </p>
                                    </div>
                                </li>
                                <?php  }  ?>

                            </ul>
                        </div>

                    </div>
                    <!--End Chat Panel Example-->
                </div>
            </div>


