<?php include('head.php'); ?>
<div class="main">
    <h1>历史活动</h1>
    <ul class="event-list">
    <?php foreach($events as $event): ?>
    <li class="list-entry clearfix">
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
        else {
            echo '<a href="'.base_url().'index.php/event/create/">发起活动</a>';
        }
    ?>
</div>
<?php include('foot.php'); ?>