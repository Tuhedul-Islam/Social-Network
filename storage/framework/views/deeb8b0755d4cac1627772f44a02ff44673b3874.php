
<?php $__env->startSection('content'); ?>
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                <?php echo trans('english.ROLE_MANAGEMENT'); ?>

            </h2>
        </div>
        <?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<div class="content animate-panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading hbuilt">
                    <?php if(!empty(Session::get('acl')[1][2])){ ?>
                    <div class="pull-right">
                        <a class="btn btn-info btn-effect-ripple" href="<?php echo URL::to('role/create'); ?>"><i class="fa fa-plus"></i> <?php echo trans('english.CREATE_NEW_ROLE'); ?></a>
                    </div>
                    <?php } ?>
                    <h4><?php echo trans('english.ROLE_MANAGEMENT'); ?></h4>
                </div>
                <div class="panel-body">
                    <?php echo Form::open(array('role' => 'form', 'url' => 'role/filter', 'class' => 'form-horizontal')); ?>

                    <div class="form-group col-md-6">
                        <div class="row form-group mb-3">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right fw-bold text-end pt-2"><?php echo trans('english.NAME'); ?> :</label>
                            <div class="col-md-6">
                                <?php echo Form::text('name', old('name'), array('id'=> 'name', 'class' => 'form-control')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <div class="col-md-8 mx-auto text-center">
                            <button type="submit" class="btn btn-info"> <?php echo trans('english.FILTER'); ?></button>
                        </div>
                    </div>

                    <?php echo Form::close(); ?>


                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped middle-align">
                            <thead>
                                <tr class="center">
                                    <th><?php echo trans('english.ID'); ?></th>
                                    <th><?php echo trans('english.NAME'); ?></th>
                                    <th><?php echo trans('english.INFO'); ?></th>
                                    <th><?php echo 'Priority'; ?></th>
                                    <th class="text-center"><?php echo trans('english.STATUS'); ?></th>
                                     <?php if(!empty(Session::get('acl')[1][3]) || !empty(Session::get('acl')[1][4])){ ?>
                                    <th class="text-center"><?php echo trans('english.ACTION'); ?></th>
                                     <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!$targetArr->isEmpty()): ?>

                                <?php $__currentLoopData = $targetArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr class="contain-center">
                                    <td><?php echo $value->id; ?></td>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php echo $value->info; ?></td>
                                    <td><?php echo $value->priority; ?></td>
                                    <td class="text-center">
                                        <?php if($value->status_id == '1'): ?>
                                        <span class="label label-success"><?php echo trans('english.ACTIVE'); ?></span>
                                        <?php else: ?>
                                        <span class="label label-warning"><?php echo trans('english.INACTIVE'); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <?php if(!empty(Session::get('acl')[1][3]) || !empty(Session::get('acl')[1][4])){ ?>
                                    <td class="action-center">
                                        <div class="text-center">
                                            <?php echo Form::open(array('url' => 'role/' . $value->id)); ?>

                                            <?php echo Form::hidden('_method', 'DELETE'); ?>



                                            <?php if(!empty(Session::get('acl')[1][3])){ ?>
                                            <a class="btn btn-primary btn-xs" href="<?php echo URL::to('role/' . $value->id . '/edit'); ?>">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <?php } ?>
                                            <?php if(!empty(Session::get('acl')[1][4])){ ?>
                                            <button class="btn btn-danger btn-xs delete" type="submit" data-placement="top" data-rel="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <?php } ?>
                                            <?php echo Form::close(); ?>

                                        </div>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="5"><?php echo trans('english.EMPTY_DATA'); ?></td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table><!---/table-responsive-->
                        <?php echo $targetArr->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/role/index.blade.php ENDPATH**/ ?>