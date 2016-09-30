
    <style>
        .itemCategory:hover {
            cursor: pointer;
        }
    </style>


    <div class="page-header">
        <h1><?php echo $page_header; ?> <small>- Categories</small></h1>
    </div>

    <div class="row">

    <?php
    if (!empty($categories)) {
        foreach ($categories as $category) {
    ?>

        <a href="<?php echo BASE_URL; ?>items/itemList/<?php echo $category['id']; ?>">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="panel panel-primary">
                    <div class="panel-body text-center itemCategory">
                        <h2><?php echo $category['sub_type']; ?></h2>
                    </div>
                </div>
            </div>
        </a>

    <?php
        }
    }
    ?>
    </div>
