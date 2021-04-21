

<?php $__env->startSection('content'); ?>
<div class="text-center pt-10">
<h2 class="text-2xl">edit todo list</h2>
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
     <!-- <form  method="post" action="<?php echo e(route('Todo.update',$todo->id)); ?>" class="py-5 "> -->
     <form  method="post" action="<?php echo e(route('Todo.update',$todo->id)); ?>" class="py-5 ">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <div>
    <input type="text" name="title" value="<?php echo e($todo->title); ?>" class="py-2 px-2 border  rounded" placeholder="title"/>
    </div>
    
    <div class="py-1">
    <textarea name="description" class="p-2 rounded border"  placeholder="description" ><?php echo e($todo->description); ?></textarea>
    </div>
    
    <div class="py-1">
     <input type="submit" value="enter" class="p-2 border rounded" />
    </div >
    </form>
    </div>
     <a href="/Todo" class="mx-5 py-2 py-1 bg-blue-400 cursor-pointer rounded text-white">View Todos</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Todo.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myself\resources\views/Todo/edit.blade.php ENDPATH**/ ?>