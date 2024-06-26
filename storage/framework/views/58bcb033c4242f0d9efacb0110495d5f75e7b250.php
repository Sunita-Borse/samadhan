<?php if($form == 'Allowed'): ?>
<div x-data="contactForm" class="overview services shadow-sm no-margin ">
    <h2 class="border-bottom">Contact Us</h2>
    <form @submit.prevent="handleSubmit">

        <div x-show="success" class="alert alert-success m-3 mb-0" role="alert">
           Your Message Submited Sucessfully
        </div>

        <div class="form-cover">
            <input type="text" @focus="removeError('name')" x-model="name" :class="{ 'inerror':  errors.name !== undefined }" class="form-control mb-0" placeholder="Full Name" />
            <div x-show="errors.name != undefined" class="smart-valid" x-text="errors.name"></div>

            <input type="text" @focus="removeError('mobile')" x-model="mobile" :class="{ 'inerror':  errors.mobile !== undefined }" class="form-control mt-3 mb-0" placeholder="Enter Mobile Number" />
            <div x-show="errors.mobile != undefined" class="smart-valid" x-text="errors.mobile"></div>

            <input type="text" @focus="removeError('email')" x-model="email" :class="{ 'inerror':  errors.email !== undefined }" class="form-control mt-3 mb-0" placeholder="Email Address ">
            <div x-show="errors.email != undefined" class="smart-valid" x-text="errors.email"></div>

            <textarea name="" @focus="removeError('message')" x-model="message" :class="{ 'inerror':  errors.message !== undefined }" placeholder="Enter Message" id="" class="form-control mt-3 mb-0" rows="4"></textarea>
            <div x-show="errors.message != undefined" class="smart-valid" x-text="errors.message"></div>

            <button x-show="!process" type="submit"  class="btn btn-primary mt-3 w-100">Send Message</button>
            <button x-show="process" disabled="true" class="btn btn-primary mt-3 w-100">Send Message</button>

        </div>
    </form>
   
</div>

<?php if (! $__env->hasRenderedOnce('4833d7d1-eda4-46da-b50b-f3cbb4c0d01e')): $__env->markAsRenderedOnce('4833d7d1-eda4-46da-b50b-f3cbb4c0d01e');
$__env->startPush('scripts'); ?>

    <script>
         document.addEventListener('alpine:init', () => {
            Alpine.data('contactForm', () => ({
                name : '',
                mobile : '',
                email : '',
                bid : <?php echo e($bid); ?>,
                message : '',
                errors : [],
                success : false,
                process : false,
                handleSubmit(){
                    this.process = true
                    var arr = {'name':this.name, 'mobile':this.mobile, 'email':this.email, 'message':this.message,'bid':this.bid}
                    axios.post('./../message',arr).then((e)=>{
                        this.process = false;
                        if(e.data.error !== undefined){
                            this.errors = e.data.error;
                            this.success = false;
                        }else{
                            this.success = true;
                            this.errors = [];

                            this.name = '';
                            his.mobile = '';
                            his.email = '';
                            his.message = '';
                        }
                    })
                },
                removeError(name){
                   
                   this.errors[name] = undefined;
                }
            }))
        })
    </script>
   
<?php $__env->stopPush(); endif; ?>

<?php endif; ?><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/contact-form.blade.php ENDPATH**/ ?>