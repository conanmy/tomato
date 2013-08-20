<?php include('head.php'); ?>
<div class="main">
    <h1>即期活动</h1>
    <ul class="event-list">
    <?php foreach($events as $event): ?>
    <li class="list-entry clearfix">
        <?php include('event_item.php'); ?>
    </li>
    <?php endforeach; ?>
    </ul>
    <p class="previous-event-link"><a href="<?php echo base_url().'index.php/event/all/'; ?>">历史活动</a></p>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
        else {
            $role = $this->session->userdata('user_role');
            if (($role == 'owner') || ($role == 'master')) {
                echo '<p><a href="'.base_url().'index.php/event/create/">发起活动</a></p>';
            }
            else if ($role == 'member'){
                echo '<p><a href="'.base_url().'index.php/candidate/index/">申请成为组织者</a></p>';
            }
        }
    ?>
</div>
<?php include('foot.php'); ?>