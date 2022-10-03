<?php 
    /**
     * Template Name: Projects page template
     * Template Post Type: page
     */
    get_header(); 
    $use_title = get_field('use_custom_title');
    $title = get_field('custom_title');
    $backgroung_img = get_field('backgroung_img');
?>
<main class="has-sidebar">
    <section class="banner inner_page section">
        <div class="section-bg"
            style="background: linear-gradient(180deg, rgba(114, 156, 186, 0.2) 0%, rgba(12, 17, 20, 0) 65.56%), linear-gradient(180deg, rgba(0, 0, 0, 0) 41.48%, rgba(0, 0, 0, 0.3) 100%), linear-gradient(0deg, rgba(0, 55, 96, 0.2), rgba(0, 55, 96, 0.2)), url('<?php echo $backgroung_img; ?>');">
        </div>
        <div class="container">
            <div class="main_block">
                <div class="title_block ">
                    <?php if($use_title == true): ?>
                    <h1 class="h2"><?= $title; ?></h1>
                    <?php elseif($use_title == false): ?>
                    <h1 class="h2"><?= the_title(); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <?php get_template_part('template-parts/global/breadcrumbs'); ?>
        <?php if (have_rows('blocks')) : ?>
        <div class="components">
            <?php while (have_rows('blocks')) : the_row();
                // $section_name = preg_replace('/_/', '-', get_row_layout());
                // get_template_part("template-parts/components/{$section_name}");
                get_template_part('template-parts/acf-blocks/'.get_row_layout());

            endwhile; ?>
        </div>
        <?php endif; ?>
        <!-- left sidebar -->
        <div class="sidebar">
            <?php get_template_part('template-parts/sidebar/navigation'); ?>
        </div>
    </div>
</main>
<?php get_footer('projects'); ?>