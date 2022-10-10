
<?php $__env->startSection('content'); ?>

<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                System Settings
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                  Update System Settings
                </div>
                <?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="panel-body">
                    <?php echo Form::model($target, array('route' => array('system.update'), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'userId','files'=> true)); ?>


                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="site_title">Site Title :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::text('site_title', old('site_title'), array('id'=> 'site_title', 'class' => 'form-control', 'required' => 'true')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('site_title'); ?></span>
                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="tag_line">Tag Line :</label>
                        <div class="col-md-6">
                            <?php echo Form::text('tag_line',old('tag_line'), array('id'=> 'tag_line', 'class' => 'form-control', 'required' => 'true')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('tag_line'); ?></span>
                        </div>
                    </div>
                     <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="site_description">Meta Description:<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::textarea('site_description', old('site_description'), array('id'=> 'site_description', 'rows' => '3', 'class' => 'form-control')); ?>

                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="email">Email :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::email('email',old('email'), array('id'=> 'email', 'class' => 'form-control', 'required' => 'true')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('email'); ?></span>
                        </div>
                    </div>



                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="phone">Phone:<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::text('phone',old('phone'), array('id'=> 'phone', 'class' => 'form-control', 'required' => 'true')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('phone'); ?></span>
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="phone">Location:<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::textarea('location',old('location'), array('id'=> 'location', 'class' => 'form-control',  'rows' => '3')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('location'); ?></span>
                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="logo">Site Logo :<span class="text-danger">*</span></label>
                        <div class="col-md-6">

                            <?php if($target->logo != null): ?>
                                <img src="<?php echo asset($target->logo); ?>" alt="" style="height:100px;width:100px;"><br><br>
                            <?php endif; ?>
                            <?php echo Form::file('logo',old('logo'), array('id'=> 'logo', 'class' => 'form-control', 'required' => 'true')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('logo'); ?></span>
                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="favicon">Favicon :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php if($target->favicon != null): ?>
                                <img src="<?php echo asset($target->favicon); ?>" alt="" style="height:50px;width:50px;"><br><br>
                            <?php endif; ?>
                            <?php echo Form::file('favicon',old('favicon'), array('id'=> 'favicon', 'class' => 'form-control', 'required' => 'true')); ?>

                            <span class="form-error text-danger"><?php echo $errors->first('favicon'); ?></span>
                        </div>
                    </div>


                    <div class="hr-line-dashed"></div>
                    <div class="row form-group mb-3">
                      <div class="col-md-3">

                      </div>
                        <div class="col-sm-8 ">
                            <button type="submit" class="btn btn-info"><?php echo trans('english.SAVE'); ?></button>
                            <button type="button" class="btn btn-default cancel"><?php echo trans('english.CANCEL'); ?></button>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/settings/edit.blade.php ENDPATH**/ ?>