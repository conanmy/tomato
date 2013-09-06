<?php include('head.php'); ?>
<div class="main">
    <h1>关于番茄网</h1>
    <p>番茄网致力于将城市里的可爱单身青年们聚集起来，通过各种趣味的活动，让大家一起分享快乐，遇见爱。</p>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>