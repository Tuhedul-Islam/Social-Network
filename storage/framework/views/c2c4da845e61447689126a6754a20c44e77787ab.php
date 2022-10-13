
<?php $__env->startSection('content'); ?>
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                 Activity Management
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                    Create New Activity
                </div>
                <div class="panel-body">
                    <?php echo Form::open(array('activity' => 'form', 'url' => 'activity', 'files'=> true, 'class' => 'form-horizontal')); ?>


                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold" for="name"><?php echo trans('english.NAME'); ?> :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::text('name', old('name'), array('id'=> 'name', 'class' => 'form-control', 'required' => 'true')); ?>

                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold" for="description"><?php echo trans('english.INFO'); ?> :</label>
                        <div class="col-md-6">
                            <?php echo Form::textarea('description', old('description'), array('id'=> 'description', 'rows' => '3', 'class' => 'form-control')); ?>

                        </div>
                    </div>


                    <div class="hr-line-dashed"></div>
                    <div class="row form-group mb-3">
                      <div class="col-md-3">

                      </div>
                        <div class="col-sm-8 col-sm-offset-2">
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

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/activity/create.blade.php ENDPATH**/ ?>