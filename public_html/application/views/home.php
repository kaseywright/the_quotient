<!-- Jumbotron -->
<div class="jumbotron">
  <h1>Latest Patch Notes</h1>
  <p class="lead"><?php echo '"' . $latestNote['summary'] . '"'; ?></p>
  <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL; ?>patches/note/<?php echo $latestNote['id']; ?>" role="button">The Divsion - <?php echo $latestNote['version']; ?> &raquo;</a></p>
</div>

<!-- Example row of columns -->
<?php
if (!empty($recentItems)) {
?>
<div class="row text-center">
<?php
foreach ($recentItems as $item) {
?>
    <div class="col-lg-4">
        <h2><?php echo $item['name']; ?></h2>
        <p>
            <a href="<?php echo BASE_URL; ?>items/details/<?php echo $item['id']; ?>">
                <img src="<?php echo BASE_URL; ?>assets/images/items/<?php echo $item['file_name']; ?>" width="250" class="img-thumbnail img-responsive" alt="<?php echo $item['name']; ?>" title="<?php echo $item['name']; ?>" />
            </a>
        </p>
        <p>
            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>items/details/<?php echo $item['id']; ?>" role="button">View details &raquo;</a>
        </p>
    </div>
<?php
}
?>
</div>

<?php
}
?>

<br/>
<br/>
<div>
    <div class="page-header">
        <h1>Agent Origins Gear Sets</h1>
    </div>
    <div class="text-center">
        <p>
            <a href="<?php echo BASE_URL; ?>items/agentOriginsGearSets" data-title="Agent Origins Gear Reward Sets">
                <img src="<?php echo BASE_URL; ?>assets/images/agent-origins-gear_reward_sets.jpg" class="img-thumbnail img-responsive" alt="Agent Origins Gear Reward Sets" title="Agent Origins Gear Reward Sets"/>
            </a>
        </p>
        <p>
            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>items/agentOriginsGearSets" role="button">See How to Get Them &raquo;</a>
        </p>
    </div>
</div>
