<?php include('head.php'); ?>
<?php
    $event = $events['0'];
?>
<h1>
            管理活动
</h1>
<div class="event-manage">
    <a href="<?php echo base_url().'index.php/event/mod/'.$event->id; ?>" class="button">修改</a>
    <a id="delete-event" for="<?php echo $event->id; ?>" class="button">删除</a>
</div>
    <?php include('event_item.php'); ?>
    <h2 class="tomato_color">活动详情</h2>
    <div>
        <?php echo str_replace("\n", "<br/>", $event->content); ?>
    </div>
<div>
<?php
    date_default_timezone_set("Asia/Shanghai");
    $closed = $event->closed;
    $join = $event->join;
    $passed = (time() > strtotime($event->begin)) ? true : false;
    if ($join) {
        $join = explode(',', $join);
        if (($closed != 'true') && $passed) {
            include('event_member_mod.php');
        }
        else {
            include('event_member.php');
        }
    }
?>
</div>
<div class="button" id="lookinto-memo">查看通讯录</div>
<div id="memo"></div>
<script>
    
    $('#lookinto-memo')[0].onclick = function() {
        $.get(
            '../../member/batch/',
            {
                ids: '<?php echo $event->join; ?>',
                target: 'phone'
            }
        )
        .done(function(response) {
            var info = $.parseJSON(response);
            var len = info.length;
            var memo = '<ul>';
            for (var i = 0; i < len; i ++) {
                var line = '<li><span class="memo-name">' + info[i].name + '</span><span>' + info[i].phone + '</span></li>';
                memo = memo + line;
            }
            memo = memo + '</ul>';
            $('#memo')[0].innerHTML = memo;
        });
    }
    
</script>

<?php include('foot.php'); ?>