
<?php $__env->startSection('content'); ?>
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                Module Management
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                    Create Module
                </div>
                <div class="panel-body">
                    <?php echo Form::open(array('module' => 'form', 'url' => 'module', 'files'=> true, 'class' => 'form-horizontal')); ?>


                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="name"><?php echo trans('english.NAME'); ?> :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php echo Form::text('name', old('name'), array('id'=> 'name', 'class' => 'form-control', 'required' => 'true')); ?>

                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="description"><?php echo trans('english.INFO'); ?> :</label>
                        <div class="col-md-6">
                            <?php echo Form::textarea('description', old('description'), array('id'=> 'description', 'rows' => '3', 'class' => 'form-control')); ?>

                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold" for="name">Activities:<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo Form::checkbox('activity_id[]',$activity->id, null,['id' => 'activity_id'.$activity->id]); ?> <label for="activity_id<?php echo $activity->id; ?>" class="fw-bold"><?php echo $activity->name; ?></label>
                                <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/module/create.blade.php ENDPATH**/ ?>