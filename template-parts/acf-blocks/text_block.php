<?php 
    $content = get_sub_field('content');
    $button = get_sub_field('button');
    if($content):
?>
<section class="textBlock section">
    <div class="textBlock__content content-block">
        <?php echo $content; ?>
    </div>
    <?php if($button): ?>
    <div class="textBlock__button">
        <a href="<?php echo $button['url'] ?>" class="btn"><?php echo $button['title']; ?></a>
    </div>
    <?php endif; ?>

</section>
<?php endif; ?>