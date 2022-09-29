<?php
$first_head = get_sub_field('first_column_heading');
$second_head = get_sub_field('second_column_heading');
$third_head = get_sub_field('third_column_heading');
$row_list = get_sub_field('row_list');
?>

<section class="table_section section">
    <div class="container">
        <div class="main_block">
            <table>
                <thead>
                    <tr>
                        <th><?php echo $first_head?:'Heading'; ?></th>
                        <th><?php echo $second_head?:'Heading'; ?></th>
                        <th><?php echo $third_head?:'Heading'; ?></th>
                    </tr>
                </thead>
                <?php if($row_list): ?>
                    <tbody>
                        <?php foreach($row_list as $row):
                            if ($row['row_link']) {
                                $link_title = $row['row_link']['title'];
                                $link_url = $row['row_link']['url'];
                                $link_target = $row['row_link']['target'];
                            }
                            $second_cell = $row['row_second_cell'];
                            $third_cell = $row['row_ third_cell'];
                        ?>
                            <tr>
                                <td>
                                    <?php if($row['row_link']): ?>
                                        <a href="<?php echo $link_url?:''; ?>" target="<?php echo $link_target?:''; ?>">
                                            <?php echo $link_target?:'Download'; ?>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $second_cell?:''; ?></td>
                                <td><?php echo $third_cell?:''; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</section>
