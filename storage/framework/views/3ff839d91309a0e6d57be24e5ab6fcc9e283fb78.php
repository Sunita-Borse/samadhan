<div x-data="dropdown, {service:[], bid: <?php echo e($bid); ?> }" class="overview services shadow-sm no-margin ">
    <h2 class="border-bottom">Our Services</h2>
    <div class="servrow row no-margin">

    <?php if(!empty($services)): ?> <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 servcov">
            <h6 class="text-truncate"><i class="bi bi-arrow-right-short"></i> <?php echo e($serv->name); ?></h6>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
    <template x-for="s in services" >   
        <div class="col-md-4 servcov">
            <h6 class="text-truncate"><i class="bi bi-arrow-right-short"></i> <span x-text="s.name"></span></h6>
        </div>
    </template>

    </div>
    <?php if(sizeof($services) >= 6): ?>
    <div class="div m-1 pb-1">
        <button x-show="showMore" @click="loadMoreServices" id="rivmore" type="button" class="btn morefont w-100 btn-outline-primary">Show More Services</button>
    </div>
        
    <?php endif; ?>
</div>

<?php if (! $__env->hasRenderedOnce('15d0ff76-8773-4f5c-bb61-a20acfa20471')): $__env->markAsRenderedOnce('15d0ff76-8773-4f5c-bb61-a20acfa20471');
$__env->startPush('scripts'); ?>

    <script>
         document.addEventListener('alpine:init', () => {
            Alpine.data('dropdown', () => ({
                services: [],
                bid : <?php echo e($bid); ?>,
                ofset : 1,
                showMore : true,
                loadMoreServices() {
                    this.showMore = false;
                    axios.get(`./../getMoreServices/${this.bid}/${this.ofset}`).then((e)=>{
                        Array.prototype.push.apply(this.services,e.data); 
                        this.ofset ++;
                        if(e.data.length < 6){
                           this.showMore = false;
                        }else{
                            this.showMore = true;
                        }
                    })  
                },
            }))
        })
    </script>
   
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/business/services.blade.php ENDPATH**/ ?>