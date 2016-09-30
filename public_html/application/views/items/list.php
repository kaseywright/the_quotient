
    <style>
        tr:hover {
            color:black;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/dt-1.10.11,af-2.1.1/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/t/bs/dt-1.10.11,af-2.1.1/datatables.min.js"></script>

    <div class="page-header">
        <h1><?php echo !empty($items) ? $category : 'No Items Availble in this Category'; ?></h1>
    </div>

    <?php
    if (!empty($items)) {
    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Variant</th>
                <th></th>
        </thead>
        <tbody>
        <?php
        foreach ($items as $item) {
        ?>

            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['variation']; ?></td>
                <td><a href="<?php echo BASE_URL; ?>items/details/<?php echo $item['id']; ?>" class="btn btn-primary btn-sm pull-right">View details &raquo;</a></td>
            </tr>

        <?php
        }
        ?>
        </tbody>
    </table>
    <?php
    }
    ?>

    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        } );
    </script>
