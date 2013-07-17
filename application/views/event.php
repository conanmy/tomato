<?php include('head.php'); ?>
<div class="main">
    <h1>活动列表</h1>
    <ul class="event-list">
    <?php foreach($events as $event): ?>
    <li class="list-entry">
        <?php include('event_item.php'); ?>
    </li>
    <?php endforeach; ?>
    </ul>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>