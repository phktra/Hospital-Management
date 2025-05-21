<?php
	$doctorcode = "DR-".time();
	$dr_nm_msg = '<small class="text-danger">Please input doctor name!</small>';
	$dr_phone_msg = '<small class="text-danger">Please input phone!</small>';

	$msg1 = $msg2 = $msg3 = "";

	if (isset($_POST['btnSaveDoctor'])) {
		$doctor_name = $_POST['txt_doctor_name'];
		$doctor_dob = $_POST['txt_doctor_dob'];
		$doctor_gender = $_POST['rd_gender'];
		$doctor_profile = $_POST['tar_doctor_profile'];
		$doctor_address = $_POST['txt_address'];
		$doctor_status = $_POST['doctor_status'];
		$service_id = $_POST['service_id'];



		$doctor_phone = $_POST['txt_phone'];

		$filename = $_FILES['doctor_photo']['name'];
		$filesize = $_FILES['doctor_photo']['size'];
		$filetype = $_FILES['doctor_photo']['type'];
		$filetmp = $_FILES['doctor_photo']['tmp_name'];

		$filename_str = explode(".", $filename);
		$file_ext = end($filename_str);
		$extenstions = array("jpg", "png", "gif");

		if (trim($doctor_name) == "") {
			$msg1 = $dr_nm_msg;
		}
		if (trim($doctor_phone) == "") {
			$msg2 = $dr_phone_msg;
		}
	}


?>




<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Doctor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Doctor Code <span class="text-danger">*</span></label>
                                        <input class="form-control" value="<?= $doctorcode ?>" type="text" name="txt_doctor_code" readonly="readonly">
										
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="txt_doctor_name">
										<?= $msg1?>
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" name="txt_doctor_dob" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="rd_gender" value="1" checked class="form-check-input">Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="rd_gender" value="2" class="form-check-input">Female
											</label>
										</div>
									</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="txt_phone">
										<?= $msg2?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="txt_email">
                                    </div>
                                </div>                              
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="txt_address">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-12">
											<div class="form-group">
												<label>Service</label>
												<select class="form-control select" name="service_id">
													<option>USA</option>
													<option>United Kingdom</option>
												</select>
											</div>
										</div>
										
									</div>
								</div>
                                
                                <div class="col-sm-12">
									<div class="form-group">
										<label>Doctor-Avatar</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											<div class="upload-input">
												<input type="file" name="doctor_photo" class="form-control">
												<?= $msg3 ?>
											</div>
										</div>
									</div>
                                </div>
                            </div>
							<div class="form-group">
                                <label>Short Biography</label>
                                <textarea class="form-control" name="tar_doctor_profile" rows="3" cols="30"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="doctor_status"  value="o1" checked>
									<label class="form-check-label">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="doctor_status"  value="0">
									<label class="form-check-label">
									Inactive
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" name="btnSaveDoctor" class="btn btn-primary submit-btn">Create Doctor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>