<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Sistem Informasi Akademik Online</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/marudama.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<?php
			echo $atas;
		?>
        <!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<img src="<?php echo base_url();?>assets/logo1.png">
                <!--#sidebar-shortcuts-->

<?php
	echo $menu;
?>
				<!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<?php
							echo $bio;
						?>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<!--PAGE CONTENT ENDS-->
					    
                        <div class="widget-box">
										<div class="widget-header header-color-blue">
											<h5 class="bigger lighter">
												<i class="icon-table"></i>
												Data Master Matakuliah
											</h5>

											<div class="widget-toolbar widget-toolbar-light no-border">
												<select id="simple-colorpicker-1" class="hide">
													<option selected="" data-class="blue" value="#307ECC" />#307ECC
													<option data-class="blue2" value="#5090C1" />#5090C1
													<option data-class="blue3" value="#6379AA" />#6379AA
													<option data-class="green" value="#82AF6F" />#82AF6F
													<option data-class="green2" value="#2E8965" />#2E8965
													<option data-class="green3" value="#5FBC47" />#5FBC47
													<option data-class="red" value="#E2755F" />#E2755F
													<option data-class="red2" value="#E04141" />#E04141
													<option data-class="red3" value="#D15B47" />#D15B47
													<option data-class="orange" value="#FFC657" />#FFC657
													<option data-class="purple" value="#7E6EB0" />#7E6EB0
													<option data-class="pink" value="#CE6F9E" />#CE6F9E
													<option data-class="dark" value="#404040" />#404040
													<option data-class="grey" value="#848484" />#848484
													<option data-class="default" value="#EEE" />#EEE
												</select>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main no-padding">
												<table width="100%">
													<thead>
														<tr>
															<th width="913" align="left">
																<i class="icon-user"></i>
																<span class="label label-large label-pink arrowed-right">DAFTAR MATAKULIAH </span><span class="label label-warning arrowed arrowed-right"><?php $query = $this->db->query("select * from tbl_mk"); 
																echo $query->num_rows();
																?></span> <span class="label label-warning arrowed arrowed-left">DATA</span></th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td class=""><table width="100%"  border="1" style="border-collapse:collapse"  cellspacing="2" cellpadding="2" class="table table-striped table-bordered table-hover">
															  <tr>
															    <td><b>Kode Matakuliah</b></td>
															    <td><b>Nama Matakuliah</b></td>
															    <td><b>Jumlah SKS</b></td>
															    <td><b>Semester</b></td>
															    <td><b>Jurusan</b></td>
															    <td colspan="3">
                                                                <?php
																echo '<a href="'.base_url().'index.php/admin/tambah_mk" class="btn btn-small btn-primary"><i class="icon-edit "></i> Tambah Data</a>';
																?>
                                                                </td>
														      </tr>
                                                              <?php
															  foreach ($mk->result_array() as $d)
															  {
															  ?>
															  <tr>
															    <td><?php echo $d['kd_mk']; ?></td>
															    <td><?php echo $d['nama_mk']; ?></td>
															    <td><?php echo $d['jum_sks']; ?></td>
															    <td><?php echo $d['semester']; ?></td>
															    <td><?php echo $d['kode_jur']; ?></td>
															    <?php
																echo '<td><a href="'.base_url().'index.php/admin/mk_dosen/'.$d['kd_mk'].'"><span class="label label-large label-yellow arrowed-in">Dosen yang mengajar</span></a></td>
																
																<td><a href="'.base_url().'index.php/admin/edit_mk/'.$d['kd_mk'].' "class="btn btn-small btn-purple" style="float:left;"><i class="icon-leaf"></i>Edit</a></td>
																<td>
																<a href="'.base_url().'index.php/admin/hapus_mk/'.$d['kd_mk'].'"
				onClick=\'return confirm("Anda yakin ingin menghapus data ini...??")\' class="btn btn-mini btn-danger" ><i class="icon-ban-circle"></i>Hapus</a></td>';
			?>
                                                                
														      </tr>
															  <?php
															  }
															  ?>
														    </table>
                                                            </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
                        </div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
	</body>
</html>
