<div id="uxu_blob_shapes_flatsome<?php echo e($content->_id); ?>_justification">
    <div id="uxu_blob_shapes_flatsome<?php echo e($content->_id); ?>_size" class="uxu_blob_inside">
        <div id="uxu_blob_shapes_flatsome<?php echo e($content->_id); ?>" style="background-image:url(<?php echo e($content->id_image ? wp_get_attachment_image_url($content->id_image, 'full') : ''); ?>)" class="blob"></div>
        <div class="uxu-blob-text-holder">
        </div>
    </div>
</div>
<?php
    $blobValue = require( UXULTIMATE_CONFIG_DIR . '/blob-path-value.php' );
    $gradientValue = require( UXULTIMATE_CONFIG_DIR . '/gradient-value.php' );
?>

<style type="text/css">
    #uxu_blob_shapes_flatsome<?php echo e($content->_id); ?>

    {
        mix-blend-mode: overlay;
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
        opacity: 100%;
        height: <?php echo e($content->height); ?>px;
    }

    #uxu_blob_shapes_flatsome<?php echo e($content->_id); ?>_size {
        overflow:hidden;
        width: 100%;
        clip-path: <?php echo e(!empty($blobValue[$content->blob_type]) ? $blobValue[$content->blob_type] : 'unset'); ?>;
        -webkit-clip-path: <?php echo e(!empty($blobValue[$content->blob_type]) ? $blobValue[$content->blob_type] : 'unset'); ?>;
        background: <?php echo e(!empty($gradientValue[$content->gradient_type]) ? $gradientValue[$content->gradient_type] : 'unset'); ?>;
    }

    #uxu_blob_shapes_flatsome<?php echo e($content->_id); ?>_justification {
        display: flex;
    }

    .uxu-blob-text-holder
    {
        position:absolute;
        top:0px;
        left:0px;
        right:0px;
        bottom:0px;
        width:100%;
        height:100%;
        z-index:2;
        display:flex;
        justify-content:center;
        flex-direction:column;
    }

    .uxu_blob_inside
    {
        position:relative;
    }

</style><?php /**PATH C:\xampp\htdocs\woo22test\wp-content\plugins\ux-ultimate\resources\views/uxu_blob_image_v1.blade.php ENDPATH**/ ?>