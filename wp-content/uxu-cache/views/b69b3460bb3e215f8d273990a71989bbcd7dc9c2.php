<div id="<?php echo e($content->_id); ?>">
    <a href="<?php echo e($content->link); ?>" class=" uxu-block-text-marquee uxu-m-content <?php echo e($content->class); ?> <?php echo e($content->visibility); ?>">
        <div class="uxu-m-text uxu-text--original">
            <span class="uxu-m-text-item"><?php echo e($content->text); ?></span>
            <span class="uxu-m-text-item"><?php echo e($content->text); ?></span>
        </div>
        <div class="uxu-m-text uxu-text--copy">
            <span class="uxu-m-text-item"><?php echo e($content->text); ?></span>
            <span class="uxu-m-text-item"><?php echo e($content->text); ?></span>
        </div>
    </a>
</div>
<style>
    #<?php echo e($content->_id); ?> .uxu-block-text-marquee {
        font-size: <?php echo e($content->size); ?>%;
    }
    #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text-item {
        color: <?php echo e($content->color); ?>;
        font-size: 11em;
        line-height: 1em;
        padding-left: 50px;
        padding-right: 50px;
    }


    #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text.uxu-text--original {
        animation: uxu-blocks-move-horizontal-normal-text-marquee <?php echo e($content->speed); ?>s linear infinite
    }
    #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text.uxu-text--copy {
        animation: uxu-blocks-move-horizontal-normal-text-marquee-copy <?php echo e($content->speed); ?>s linear infinite;
    }

    <?php if(!empty($content->size__md)): ?>
        @media  only screen and (max-width: 768px)  {
            #<?php echo e($content->_id); ?> .uxu-block-text-marquee {
                font-size: <?php echo e($content->size__md); ?>% !important;
            }
        }
    <?php endif; ?>
    <?php if(!empty($content->speed__md)): ?>
        @media  only screen and (max-width: 768px) {
            #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text.uxu-text--original {
                animation: uxu-blocks-move-horizontal-normal-text-marquee <?php echo e($content->speed__md); ?>s linear infinite
            }

            #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text.uxu-text--copy {
                animation: uxu-blocks-move-horizontal-normal-text-marquee-copy <?php echo e($content->speed__md); ?>s linear infinite;
            }
        }
    <?php endif; ?>

    <?php if(!empty($content->size__sm)): ?>
        @media  only screen and (max-width: 768px)  {
            #<?php echo e($content->_id); ?> .uxu-block-text-marquee {
                font-size: <?php echo e($content->size__md); ?>% !important;
            }
        }
    <?php endif; ?>
     <?php if(!empty($content->speed__sm)): ?>
        @media  only screen and (max-width: 550px) {
            #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text.uxu-text--original {
                animation: uxu-blocks-move-horizontal-normal-text-marquee <?php echo e($content->speed__sm); ?>s linear infinite
            }

            #<?php echo e($content->_id); ?> .uxu-block-text-marquee .uxu-m-text.uxu-text--copy {
                animation: uxu-blocks-move-horizontal-normal-text-marquee-copy <?php echo e($content->speed__sm); ?>s linear infinite;
            }
        }
    <?php endif; ?>
</style><?php /**PATH C:\xampp\htdocs\woo22test\wp-content\plugins\ux-ultimate\resources\views/uxu_marquee_text_v1.blade.php ENDPATH**/ ?>