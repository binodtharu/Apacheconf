<?php if (is_superadmin_loggedin() ): ?>
	<?php $this->load->view('frontend/branch_select'); ?>
<?php endif; if (!empty($branch_id)): ?>
<div class="row">
	<div class="col-md-3 mb-md">
		<?php include 'sidebar.php'; ?>
	</div>
	<div class="col-md-9">
		<section class="panel">
			<div class="tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#about" data-toggle="tab"><?php echo translate('admission'); ?></a>
					</li>
					<li>
						<a href="#options" data-toggle="tab"><?php echo translate('options'); ?></a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="about">
						<?php echo form_open('frontend/section/saveAdmission' . $branchID, array('class' => 'form-horizontal form-bordered frm-submit')); ?>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo translate('title'); ?> <span class="required">*</span></label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="title" value="<?php echo set_value('title', $admission['title']); ?>" />
									<span class="error"><?php echo form_error('title'); ?></span>
								</div>
							</div>
							<div class="form-group mt-md">
								<label class="col-md-2 control-label"><?php echo translate('description'); ?></label>
								<div class="col-md-8">
									<textarea name="description" class="summernote"><?php echo set_value('description', $admission['description']); ?></textarea>
								</div>
							</div>
							<footer class="panel-footer mt-lg">
								<div class="row">
									<div class="col-md-2 col-md-offset-2">
										<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
											<i class="fas fa-plus-circle"></i> <?php echo translate('save'); ?>
										</button>
									</div>
								</div>
							</footer>
						<?php echo form_close(); ?>
					</div>
					<div class="tab-pane" id="options">
						<?php echo form_open_multipart('frontend/section/saveAdmissionOption' . $branchID, array('class' => 'form-horizontal form-bordered frm-submit-data')); ?>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo translate('page') . " " . translate('title'); ?> <span class="required">*</span></label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="page_title" value="<?php echo set_value('page_title', $admission['page_title']); ?>" />
									<span class="error"><?php echo form_error('page_title'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo translate('banner_photo'); ?> <span class="required">*</span></label>
								<div class="col-md-8">
									<input type="hidden" name="old_photo" value="<?php echo $admission['banner_image']; ?>">
									<input type="file" name="photo" class="dropify" data-height="150" data-default-file="<?php echo base_url('uploads/frontend/banners/' . $admission['banner_image']); ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo translate('meta') . " " . translate('keyword'); ?></label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="meta_keyword" value="<?php echo set_value('meta_keyword', $admission['meta_keyword']); ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo translate('meta') . " " . translate('description'); ?></label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="meta_description" value="<?php echo set_value('meta_description', $admission['meta_description']); ?>" />
								</div>
							</div>
							<footer class="panel-footer mt-lg">
								<div class="row">
									<div class="col-md-2 col-md-offset-2">
										<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
											<i class="fas fa-plus-circle"></i> <?php echo translate('save'); ?>
										</button>
									</div>
								</div>
							</footer>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php endif; ?>