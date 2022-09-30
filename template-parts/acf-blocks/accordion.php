<?php
$accordion_list = get_sub_field('accordion_list');
?>

<?php if($accordion_list): ?>

    <section class="accordion-wrapper section">
        <div class="container">
            <div class="main_block">
                <ul class="accordion">
                    <?php foreach($accordion_list as $item):
                        $title = $item['title'];
                        $description = $item['description'];

                        if ($title || $description):
                    ?>

                        <li>
                            <div class="accordion-item">

                                <div class="accordion-item__title">
                                    <?php echo $title; ?>
                                </div>

                                <div class="accordion-item__description">
                                    <?php echo $description; ?>
                                </div>

                            </div>
                        </li>

                    <?php endif;
                    endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

<?php endif; ?>