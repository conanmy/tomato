<?php include('head.php'); ?>
<div class="main">
    <div class="event-info clearfix">
        <?php
            $event = $events['0'];
            include('event_item.php');
        ?>
        <div class="event-join">
        <?php 
            $join = $event->join;
            $logged = $this->session->userdata('logged_in');
            $apply = $logged ? '<div id="apply" class="button">报名</div>' : '<div id="apply" class="button disable" title="请登录后报名">报名</div>';
            if ($join) {
                $join = explode(',', $join);
                if (in_array($userid, $join)) {
                    $joined = TRUE;
                    echo '<div>已参加<span id="cancel">取消</span></div>';
                }
                else {
                    echo $apply;
                }
            }
            else {
                echo $apply;
            }
        ?>
        </div>
    </div>
    <?php
        if ($join) {
            include('event_member.php');
        }
    ?>
    <div class="event-content">
        <h2 class="tomato_color">活动详情</h2>
        <div>
            <?php echo str_replace("\n", "<br/>", $event->content); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    var eventId = <?php echo $event->id; ?>;
    var userId = <?php echo $userid; ?>;
    var joined = <?php echo isset($joined) && $joined == TRUE ? 'true' : 'false'; ?>;
    if (joined == false) {
        document.getElementById('apply').onclick = function() {
            $.get(
                '../join/',
                {
                    userid: userId,
                    eventid: eventId
                }, 
                function() {
                    document.location.reload();
                }
            );
        }
    }
    else {
        document.getElementById('cancel').onclick = function() {
            $.get(
                '../quit/',
                {
                    userid: userId,
                    eventid: eventId
                }, 
                function() {
                    document.location.reload();
                }
            );
        }
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