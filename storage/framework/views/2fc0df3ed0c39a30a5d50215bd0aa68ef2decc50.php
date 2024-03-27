<div x-data="gallery" class="overview products shadow-sm no-margin ">
    <h2 class="border-bottom">Gallery</h2>
    <div x-show="gallery.lengt < 1" class="servrow row no-margin">
        <?php if(!empty($gallery)): ?> <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 p-2">
            <img src="<?php echo e($g->image); ?>" alt="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
    </div>

    <div id="my-gallery"  class="servrow row no-margin">
        <template x-for="g in gallery" >  
            <a :href="g.image" target="_blank" class="col-md-3 mb-3">
                <img :src="g.image" alt="">
            </a>
        </template>
    </div>
    <?php if(sizeof($gallery) >= 6): ?>
    <button x-show="showMore" @click="loadMoreProducts" id="rivmore" type="button" class="btn morefont w-100 mt-2 btn-outline-primary">Show More Products</button>
    <?php endif; ?>
</div>



<?php if (! $__env->hasRenderedOnce('0d2d3d90-ea70-4d37-8944-49f580354002')): $__env->markAsRenderedOnce('0d2d3d90-ea70-4d37-8944-49f580354002');
$__env->startPush('scripts'); ?>

    <script>
         document.addEventListener('alpine:init', () => {
            Alpine.data('gallery', () => ({
                gallery: [],
                lid : <?php echo e($bid); ?>,
                ofset : 1,
                showMore : true,
                init() {
                axios.get(`./../getMoreGallery/${this.lid}/0`).then((e)=>{
                    this.gallery = e.data;
                    })
                },
                loadMoreProducts() {
                    this.showMore = false;
                    axios.get(`./../getMoreGallery/${this.lid}/${this.ofset}`).then((e)=>{
                        Array.prototype.push.apply(this.gallery,e.data); 
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
   
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/gallery.blade.php ENDPATH**/ ?>