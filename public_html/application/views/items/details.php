
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/lightgallery/dist/css/lightgallery.min.css" />
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/lightgallery/dist/js/lightgallery.min.js"></script>

    <div class="page-header">
        <h1><?php echo $item['name'] . ' <small>[' . $item['variation'] . ']</small>'; ?></h1>
    </div>

    <div id="details">
        <?php
        if (!empty($details)) {
        ?>

        <ul>
            <?php
            foreach ($details as $detail) {
            ?>

            <li><?php ehco $detail; ?></li>

            <?php
            }
            ?>
        </ul>

        <?php
        }
        ?>
    </div>

    <div id='lightgallery'>
    <?php
    if (!empty($item['images'])) {
        foreach ($item['images'] as $image) {
    ?>

        <a href="<?php echo BASE_URL; ?>assets/images/items/<?php echo $image['file_name']; ?>" data-title="<?php echo $item['name']; ?>">
            <img src="<?php echo BASE_URL; ?>assets/images/items/<?php echo $image['file_name']; ?>" width="300" class="img-thumbnail img-responsive" alt="<?php echo $item['name']; ?>" title="<?php echo $item['name']; ?>"/>
        </a>

    <?php
        }
    }
    ?>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightgallery").lightGallery({
                thumbnail:true
            });
        });
    </script>
