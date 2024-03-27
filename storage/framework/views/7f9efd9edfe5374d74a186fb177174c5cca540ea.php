<div class="breadcrumb contaienr-fluid">
    <div class="container">
        <div class="row">
            <h2><?php echo e($title); ?></h2>
            <ul>
                <li><a href="<?php echo e(route('/')); ?>"><i class="bi bi-house-door"></i> Home</a>
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path></svg>
                </li>
                <?php if(!empty($path)): ?>
                <li><a href="<?php echo e($pathUrl); ?>"><?php echo e($path); ?></a>
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path></svg>
                </li>
                <?php endif; ?>

                <li><?php echo e($title); ?> </li>
            </ul>
        </div>
    </div>
   
</div><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/common/breadcrumb.blade.php ENDPATH**/ ?>