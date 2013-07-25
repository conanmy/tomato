<?php include('head.php'); ?>
<div class="main">
<?php 
    $member = $members['0'];
    include('member_item.php');
?>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>