<?php include('head.php'); ?>
<div class="main">
    <h1>成员列表</h1>
    <ul class="member-list">
    <?php foreach($members as $member): ?>
    <li class="list-entry">
        <?php include('member_item.php'); ?>
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