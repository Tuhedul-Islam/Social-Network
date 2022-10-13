
<?php $__env->startSection('content'); ?>
    <div class="content animate-panel">
    	<div class="card">
    		<h2>User Post Control</h2>
        <div class="row">
            <div class="col-lg-12 text-center">
             

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>User name</th>
                <th>Post Content</th>
                <th>Image</th>
                <th>Approved Post</th>

            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = $approve_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						
						<td><?php echo e($loop->iteration); ?></td>
						<td><?php echo e($data->username); ?></td>
						<td><?php echo e($data->post_content); ?></td>
						<td> <img height="50px" width="40px" src="<?php echo e(asset('public/post/image/'.$data->image)); ?>" alt="not found"></td>

						
						<td>
							<?php if($data->panding_post==1): ?>
							<button class="btn btn-success" ><a href="<?php echo e(route('change_user_post_status',$data->id)); ?>"style="color:white;">Approved post</a></button>
							<?php else: ?>
							<button class="btn btn-warning" ><a href="<?php echo e(route('change_user_post_status',$data->id)); ?>"style="color:white;">panding post</a></button>
							<?php endif; ?>
						</td>
	
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
    </table>

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>





    <script>
        $(document).ready(function(){

            $('.randColorChange').each(function() {
                $(this).css('background',randomColor());
                $(this).css('color','white');
                $(this).css('text-align','center');

            });

        });

        var safeColors = ['11','33','66','99','cc','ee'];//["#00e64d","#ff80aa","#990099","#30DDBC","#ff8533"];
        var rand = function() {
            return Math.floor(Math.random()*6);
        };
        var randomColor = function() {
            var r = safeColors[rand()];
            var g = safeColors[rand()];
            var b = safeColors[rand()];
            return "#"+r+g+b;
            //return r;
        };
    </script>

    <script type="text/javascript">
    	$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
          } );
 
    new $.fn.dataTable.FixedHeader( table );
         } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Mproject\social-network\resources\views/old_frontend/approve_post.blade.php ENDPATH**/ ?>