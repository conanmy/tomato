<?php include('head.php'); ?>
<div class="main">
<?php
$me = $info['0'];
if ($me->photo) {
    echo('<img class="avatar-normal" src="'.$me->photo.'" />');
}
else {
    echo('您需要上传头像才能看到其他成员的信息，<a href="./avatar/">立即上传</a>');
}
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