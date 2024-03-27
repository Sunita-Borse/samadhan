<div x-data="products" class="overview products shadow-sm no-margin ">
    <h2 class="border-bottom">Our Products</h2>
    <div class="servrow row no-margin">


        <?php if(!empty($products)): ?> <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-lg-4 col-md-6 productcol">
            <div class="row no-margin">
                <div class="col-4 pimg">
                    <img src="<?php echo e($product->image); ?>" alt="">
                </div>
                <div class="col-8 pdet">
                    <h6 class="text-truncate"><?php echo e($product->name); ?></h6>
                    <b><?php echo e(currency()); ?><?php echo e($product->price); ?></b>
                </div>
            </div>
        </div>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        
         <template x-for="p in products" >   
            <div class="col-lg-4 col-md-6 productcol">
                <div class="row no-margin">
                    <div class="col-4 pimg">
                        <img :src="p.image" alt="">
                    </div>
                    <div class="col-8 pdet">
                        <h6 class="text-truncate" x-text="p.name"></h6>
                        <b><?php echo e(currency()); ?> <span x-text="p.price"></span></b>
                    </div>
                </div>
            </div>
        </template>
        
    </div>
    <?php if(sizeof($products) >= 6): ?>
    <button x-show="showMore" @click="loadMoreProducts" id="rivmore" type="button" class="btn morefont w-100 mt-2 btn-outline-primary">Show More Products</button>
    <?php endif; ?>
</div>


<?php if (! $__env->hasRenderedOnce('bb85c75b-8e1a-4e13-a903-f6847563e6cf')): $__env->markAsRenderedOnce('bb85c75b-8e1a-4e13-a903-f6847563e6cf');
$__env->startPush('scripts'); ?>

    <script>
         document.addEventListener('alpine:init', () => {
            Alpine.data('products', () => ({
                products: [],
                bid : <?php echo e($bid); ?>,
                ofset : 1,
                showMore : true,
                loadMoreProducts() {
                    this.showMore = false;
                    axios.get(`./../getMoreProducts/${this.bid}/${this.ofset}`).then((e)=>{
                        Array.prototype.push.apply(this.products,e.data); 
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
   
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/products.blade.php ENDPATH**/ ?>