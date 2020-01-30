<?php
/**
 * Block Name: NTnext - Slide Block
 *
 * This is the template that display a basic slider blocks - ChoosePizzi - Slide Block.
 */

$id = 'choose_block-' . $block['id'];
?>

<section id="<?php echo $id; ?>" class="grid-container block__nt-slide  full">
    <div class="<?php if ( get_field('size') ) : ?> <?php echo get_field('size'); ?> <?php endif; ?>">        
        <div class="row">
        <?php if ( have_rows('slider') ) : ?>
        
            <?php while( have_rows('slider') ) : the_row(); ?>
        
            <div class="cell single_block__nt-slide col-sm">

                            <?php 
            $image = get_sub_field('img');
            if( !empty( $image ) ): ?>
                <img class="back_slidee_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <?php if ( get_sub_field('caption_text') ) : ?>
            <div class="caption">
                    <p class="txt_caption"><?php echo get_sub_field('caption_text'); ?></p>
            </div>
            <?php endif; ?>
            </div>
        
            <?php endwhile; ?>
        
        <?php endif; ?>
    </div>
</section>
