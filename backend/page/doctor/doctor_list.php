<div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="index.php?p_doctor=create_doctor" class="btn btn-primary btn-rounded float-right">
                            <i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
				<div class="row doctor-grid">

                <?php
                    $sql = "
                        select d.*,
                        s.service_name,
                        g.gender_name 
                        from dpa_doctor d
                        inner join dpa_service s on d.service_id = s.service_id
                        inner join dpa_gender g on d.doctor_gender_id = g.gender_id
                        ";

                    $result = mysqli_query($conn, $sql);
                    $num_row = $result->num_rows;
                    if ($num_row > 0) {
                        while ($row = mysqli_fetch_array($result)){
                    

                ?>


                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="index.php?p_doctor=view_doctor&p_id=<?= $row['doctor_id']?>">
                                    <img alt="" src="assets/img/doctor-thumb-03.jpg">
                                </a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.php?p_doctor=edit_doctor"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis">
                                <a href="index.php?p_doctor=view_doctor"><?= $row['doctor_name']  ?></a>
                            </h4>
                            <div class="doc-prof">
                                <?= $row['service_name']  ?>
                            </div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> <?= $row['doctor_address']  ?>
                            </div>
                        </div>
                    </div>

                <?php
                        }
                    }else {
                        echo "<div class='text-danger text-center' style='width:100%;'> No record found!</div>";
                    }
                ?>
                </div>
				<div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>
            </div>