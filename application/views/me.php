<?php include('head.php'); ?>
<div class="main">
<?php
    $me = $info['0'];
    if ($me->photo == 'true') {
        echo('<img class="avatar-normal" src="'.base_url().'asset/img/avatar/'.$me->id.'.jpg" />');
    }
    else {
        echo('您需要上传头像才能看到其他成员的信息，<a href="./avatar/">立即上传</a>');
    }
?>
<h2>我的活动</h2>
<ul>
<?php foreach($myevents as $myevent): ?>
<li>
    <a href="<?php echo base_url().'index.php/event/mod/'.$myevent->id; ?>"><?php echo $myevent->name; ?></a>
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