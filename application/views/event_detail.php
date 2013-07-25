<?php include('head.php'); ?>
<div class="main">
    <?php
        $event = $events['0'];
        include('event_item.php');
    ?>
    <div id="apply" class="button">报名</div>
    <div class="content">
        <h2 class="tomato_color">活动详情</h2>
        <div>
            <?php echo $event->content; ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    var eventId = <?php echo $event->id; ?>;
    var userId = <?php echo $userid; ?>;
    document.getElementById('apply').onclick = function() {
        $.get(
            '../join/',
            {
                userid: userId,
                eventid: eventId
            }, 
            function() {
                alert('ok');
            }
        );
    }
</script>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>