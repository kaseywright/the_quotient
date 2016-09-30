<div class="page-header">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
            <h1>The Division <small>- <?php echo $note['version']; ?></small></h1>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
            <h3><small><?php echo date('m.d.Y', $note['date']); ?></small></h3>
        </div>
    </div>
</div>
<div>
    <?php echo $note['body']; ?>
</div>
