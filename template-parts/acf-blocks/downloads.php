<?php
$downloads_list = get_sub_field('downloads_list');
?>

<?php if($downloads_list): ?>

<section class="downloads-wrapper section">
    <div class="main_block">
        <ul class="downloads">
            <?php foreach($downloads_list as $item):
                        $title = $item['title'];
                        $file = $item['file']['url'];

                        if ($file):
                    ?>
            <li>
                <a download href="<?php echo $file; ?>" class="downloads-item"><?php echo $title?:'Download'; ?></a>
            </li>
            <?php endif;
                    endforeach; ?>
        </ul>
    </div>
</section>

<?php endif; ?>