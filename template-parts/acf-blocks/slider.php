<?php
$title = get_sub_field('slider_title');
$image_list = get_sub_field('image_list');
?>

<section class="slider section">
    <div class="slider_inner">
        <ul class="slider-list">
            <?php foreach($image_list as $image): ?>
            <li>
                <?php echo wp_get_attachment_image(
                    $image['image']['ID'],
                    'full'
                ); ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="container">
            <div class="main_block">
                <div class="slider-title">
                    <?php if($title): ?>
                    <h2><?= $title; ?></h2>
                    <?php endif; ?>
                    <ul class="slider-pagination">
                        <li class="prev">
                            <svg width="25" height="8" viewBox="0 0 25 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.3536 4.35355C24.5488 4.15829 24.5488 3.84171 24.3536 3.64644L21.1716 0.464464C20.9763 0.269202 20.6597 0.269202 20.4645 0.464464C20.2692 0.659727 20.2692 0.976309 20.4645 1.17157L23.2929 4L20.4645 6.82843C20.2692 7.02369 20.2692 7.34027 20.4645 7.53553C20.6597 7.73079 20.9763 7.73079 21.1716 7.53553L24.3536 4.35355ZM4.37114e-08 4.5L24 4.5L24 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z"
                                    fill="white" />
                            </svg>
                        </li>
                        <?php for ($i=0; $i < count($image_list); $i+=1 ): ?>
                        <li class="slide-btn <?php echo $i===0?'active':''; ?>" data-slide="<?php echo $i; ?>">
                            <?php echo $i + 1; ?></li>
                        <?php endfor; ?>
                        <li class="next">
                            <svg width="25" height="8" viewBox="0 0 25 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.3536 4.35355C24.5488 4.15829 24.5488 3.84171 24.3536 3.64644L21.1716 0.464464C20.9763 0.269202 20.6597 0.269202 20.4645 0.464464C20.2692 0.659727 20.2692 0.976309 20.4645 1.17157L23.2929 4L20.4645 6.82843C20.2692 7.02369 20.2692 7.34027 20.4645 7.53553C20.6597 7.73079 20.9763 7.73079 21.1716 7.53553L24.3536 4.35355ZM4.37114e-08 4.5L24 4.5L24 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z"
                                    fill="white" />
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <ul class="slider-list">
        <?php foreach($image_list as $image): ?>
        <li>
            <?php echo wp_get_attachment_image(
                    $image['image']['ID'],
                    'full'
                ); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="container">
        <div class="main_block">
            <div class="slider-title">
                <?php if($title): ?>
                <h2><?= $title; ?></h2>
                <?php endif; ?>
                <ul class="slider-pagination">
                    <li class="prev">
                        <svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.3536 4.35355C24.5488 4.15829 24.5488 3.84171 24.3536 3.64644L21.1716 0.464464C20.9763 0.269202 20.6597 0.269202 20.4645 0.464464C20.2692 0.659727 20.2692 0.976309 20.4645 1.17157L23.2929 4L20.4645 6.82843C20.2692 7.02369 20.2692 7.34027 20.4645 7.53553C20.6597 7.73079 20.9763 7.73079 21.1716 7.53553L24.3536 4.35355ZM4.37114e-08 4.5L24 4.5L24 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z"
                                fill="white" />
                        </svg>
                    </li>
                    <?php for ($i=0; $i < count($image_list); $i+=1 ): ?>
                    <li class="slide-btn <?php echo $i===0?'active':''; ?>" data-slide="<?php echo $i; ?>">
                        <?php echo $i + 1; ?></li>
                    <?php endfor; ?>
                    <li class="next">
                        <svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.3536 4.35355C24.5488 4.15829 24.5488 3.84171 24.3536 3.64644L21.1716 0.464464C20.9763 0.269202 20.6597 0.269202 20.4645 0.464464C20.2692 0.659727 20.2692 0.976309 20.4645 1.17157L23.2929 4L20.4645 6.82843C20.2692 7.02369 20.2692 7.34027 20.4645 7.53553C20.6597 7.73079 20.9763 7.73079 21.1716 7.53553L24.3536 4.35355ZM4.37114e-08 4.5L24 4.5L24 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z"
                                fill="white" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
</section>