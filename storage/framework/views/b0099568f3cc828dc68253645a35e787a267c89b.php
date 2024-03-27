<div class="businesscover shadow-sm ">
    <div class="imagecover text-center p-2">
        <img  src="<?php echo e($list->img); ?>" alt="">
    </div>
    <div class="business-info">
        <h2><?php echo e($list->business_name); ?></h2>
        <p><?php echo e($list->description); ?></p>
    </div>
    <div class="more-info row">
        <div class="col-lg-5 col-md-12">
            <ul>
                <li><i class="bi bi-telephone"></i> <?php echo e($list->mobile); ?></li>
                <li><i class="bi bi-envelope"></i> <?php echo e($list->email); ?></li>
                <li><a href="<?php echo e($list->website); ?>"><i class="bi bi-globe"></i> <?php echo e($list->website); ?></a></li>
            </ul>
        </div>
        <div class="col-lg-7 col-md-12">
            <ul>
                <li> <i class="bi bi-map"></i> <?php echo e($list->city->name); ?></li>
                <li class="text-truncate"><i class="bi bi-geo-alt"></i>  <?php echo e($list->address); ?></li>
                <li><i class="bi bi-whatsapp"></i> <?php echo e($list->whatsapp); ?></li>
            </ul>
        </div>
       
       
    </div>
    <div class="footcover">
        <ul>
             <?php if (isset($component)) { $__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae = $component; } ?>
<?php $component = App\View\Components\Share\Review::resolve(['rating' => $list->rating,'count' => $list->rcount] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Share\Review::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae)): ?>
<?php $component = $__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae; ?>
<?php unset($__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae); ?>
<?php endif; ?>
            <li class="">
                <div class="save">
                    <?php if (isset($component)) { $__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95 = $component; } ?>
<?php $component = App\View\Components\Share\Like::resolve(['id' => $list->id,'like' => $list->like] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share.like'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Share\Like::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95)): ?>
<?php $component = $__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95; ?>
<?php unset($__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95); ?>
<?php endif; ?>
                </div>
            </li>
        </ul>
    </div>

</div>
<?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/business/details.blade.php ENDPATH**/ ?>