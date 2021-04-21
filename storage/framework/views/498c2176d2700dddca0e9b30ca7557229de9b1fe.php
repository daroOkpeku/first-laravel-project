<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <!-- <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div> -->
              <div class="card-body">
               
                    You are logged in!
                </div>
            <div class="card-body">
        <!-- <?php if (isset($component)) { $__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Upload::class, []); ?>
<?php $component->withName('upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a)): ?>
<?php $component = $__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a; ?>
<?php unset($__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>   for component linking like react -->
           <?php if (isset($component)) { $__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Upload::class, []); ?>
<?php $component->withName('upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a)): ?>
<?php $component = $__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a; ?>
<?php unset($__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
               <form action="/upload" method="post" enctype="multipart/form-data">
               <?php echo csrf_field(); ?>
                <input type="file" name="pic"/>
                <button type="Sumbit">upload</button>
               </form>
               
            </div>
        <a href="<?php echo e(route('Todo.index')); ?>"><button type="button">create Todo</button></a>
    </div>
   
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myself\resources\views/home.blade.php ENDPATH**/ ?>