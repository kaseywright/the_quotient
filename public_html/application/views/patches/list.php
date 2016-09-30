<div class="page-header">
    <!--<a href="https://division.zone/devtracker/" class="pull-right btn btn-primary btn-lg" style="margin-top:20px;" target="_blank">Dev Tracker</a>-->
    <h1>Patch Notes<small><br/>Check out the latest game updates!</small>
</div>

<?php
if (!empty($patches)) {
    foreach ($patches as $patch) {
?>

<div class="list-group">
    <a href="<?php echo BASE_URL; ?>patches/note/<?php echo $patch['id']; ?>" class="list-group-item">
        <h4 class="list-group-item-heading">The Division <?php echo $patch['version']; ?> <small> - <?php echo date('m.d.Y', $patch['date']); ?></small></h4>
        <p class="list-group-item-text">"<?php echo $patch['summary']; ?>"</p>
    </a>
</div>

<?php
    }
}
?>
