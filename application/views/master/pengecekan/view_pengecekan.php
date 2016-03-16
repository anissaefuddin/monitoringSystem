
<div class="main-content" style="margin-top:6em;">
				<div class="main-content-nner">
					<div class="page-content ">
						<div class="row" >
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li>
													<a href="<?php echo base_url();?>">
														<i class="green ace-icon fa fa-home bigger-120"></i>
														Beranda											
													</a>
												</li>

												<li>
													<a href="<?php echo base_url();?>profile">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profil
													</a>
												</li>

												
											</ul>
											<div class="tab-content" >
											<center><h2><?=$title?></h2></center></br>
												<div id="home" class="tab-pane fade in active">
														<div class="div-mark">
															 	<form class="form-horizontal"  method="post">
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilih Alat</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="alat" name="alat"data-placeholder="Pilih Periode">												
																		<?php if($getAlat):?>
													                	<?php foreach ($getAlat as $val) :?>
																			<option value="<?=$val->id_alat?>"><?=$val->id_alat?></option>
																		<?php endforeach;?>
																		<?php endif;?>
																		</select>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilih Petugas</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="petugas" name="petugas" data-placeholder="Pilih Petugas">												
																			<?php $t=0;
																			if($dataUser):?>
													                	<?php foreach ($dataUser as $val) :?>
																			<option value="<?=$val->id_user?>"><?=$val->nama_lengkap?></option>
																		<?php endforeach;?>
																		<?php endif;?>
																		</select>
																	</div>
																</div>
																
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Periode </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="periodep" name="periode"data-placeholder="Pilih Periode" onchange="getData2()">
																			<option value="1"selected="selected">Harian</option>
																			<option value="2" >Mingguan</option>
																			<option value="3">Bulanan</option>
																			<option value="4">Triwulan</option>
																			<option value="5">Semester</option>
																		</select>
																	</div>
																</div>
																	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilih Tahun</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="tahun" name="periode"data-placeholder="Pilih Periode">												
																			<?php $t=0;
																			if($getTahun):?>
													                	<?php foreach ($getTahun as $val) :?>
																			<option value="<?=$val->tahun?>" <?php if($tahunKe==$val->tahun){echo "selected";}?>><?=$val->tahun?></option>
																		<?php endforeach;?>
																		<?php endif;?>
																		</select>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1" id="bulanlabel" > Pilih Bulan</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="bulan" name="periode"data-placeholder="Pilih Periode" >
																			<?php 
																			$bulan =array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Agustus","November","Desember");
																			for ($bln=0,$i=1; $bln < 12; $bln++,$i++) : ?>
																			<option value="<?=$i?>" <?php if($bulanKe==$i){echo "selected";}?>><?=$bulan[$bln]?></option>
																		<?php endfor;?>
																		</select>
																	</div>
																</div>

															
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<span class="btn btn-info"  onclick="getLink()" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Checklist
																		</span>

																	</div>
																</div>
															 	
															 	</form>
															 	</br>
															 </div>
															  
													</div>

													</div>
												</div>

												
												<div style="clear:both"></div>
											</div>
										
									</div><!-- /.col -->

								</div><!-- /.row -->



							


								<script type="text/javascript">
									var $path_assets = "dist";//this will be used in gritter alerts containing images
								</script>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script language="javascript">



	

$(document).ready(function() {

	$("#provinsi").dataTable( {
          	"sScrollY": "200px",
           "sScrollX": "100%",
           "sScrollXInner": "130%",
           "bScrollCollapse": true
 } );;




</script>


