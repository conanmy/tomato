<?php include('head.php'); ?>

<h1>创建新活动</h1>

<div class="create-event-form">
    <form method="post" action="../insert/">
        <div class="row">
            <label class="field">活动标题</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="event-name" name="name"/></span>
                <span class="tip"></span>
                <span class="error" id="name-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">活动时间</label>
            <div class="item">
                <input id="datepicker" class="basic-input" type="text" placeholder="活动日期" />
                <span>
                    <select class="basic-input" id="event-begin" name="begin">
                        <option value="开始时间" selected="">开始时间</option>
                        <option value="08:00">08:00</option><option value="08:30">08:30</option><option value="09:00">09:00</option>
                        <option value="09:30">09:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option>
                        <option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option>
                        <option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option>
                        <option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option>
                        <option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:30">16:30</option>
                        <option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option>
                        <option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option>
                        <option value="20:00">20:00</option><option value="20:30">20:30</option><option value="21:00">21:00</option>
                        <option value="21:30">21:30</option><option value="22:00">22:00</option><option value="22:30">22:30</option>
                        <option value="23:00">23:00</option><option value="23:30">23:30</option><option value="00:00">00:00</option>
                        <option value="00:30">00:30</option><option value="01:00">01:00</option><option value="01:30">01:30</option>
                        <option value="02:00">02:00</option><option value="02:30">02:30</option><option value="03:00">03:00</option>
                        <option value="03:30">03:30</option><option value="04:00">04:00</option><option value="04:30">04:30</option>
                        <option value="05:00">05:00</option><option value="05:30">05:30</option><option value="06:00">06:00</option>
                        <option value="06:30">06:30</option><option value="07:00">07:00</option><option value="07:30">07:30</option>
                    </select>
                                                            至
                    <select class="basic-input" id="event-end" name="end">
                        <option value="结束时间" selected="">结束时间</option>
                        <option value="08:00">08:00</option><option value="08:30">08:30</option><option value="09:00">09:00</option>
                        <option value="09:30">09:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option>
                        <option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option>
                        <option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option>
                        <option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option>
                        <option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:30">16:30</option>
                        <option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option>
                        <option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option>
                        <option value="20:00">20:00</option><option value="20:30">20:30</option><option value="21:00">21:00</option>
                        <option value="21:30">21:30</option><option value="22:00">22:00</option><option value="22:30">22:30</option>
                        <option value="23:00">23:00</option><option value="23:30">23:30</option><option value="00:00">00:00</option>
                        <option value="00:30">00:30</option><option value="01:00">01:00</option><option value="01:30">01:30</option>
                        <option value="02:00">02:00</option><option value="02:30">02:30</option><option value="03:00">03:00</option>
                        <option value="03:30">03:30</option><option value="04:00">04:00</option><option value="04:30">04:30</option>
                        <option value="05:00">05:00</option><option value="05:30">05:30</option><option value="06:00">06:00</option>
                        <option value="06:30">06:30</option><option value="07:00">07:00</option><option value="07:30">07:30</option>
                    </select>
                </span>
                <span class="tip"></span>
                <span class="error" id="time-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">活动地点</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="event-place" name="place" /></span>
                <span class="tip"></span>
                <span class="error" id="place-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">活动详情</label>
            <div class="item">
                <span>
                    <textarea class="basic-input" id="event-content" name="content"></textarea>
                </span>
                <p>
                    <span class="tip"></span>
                    <span class="error" id="content-error"></span>
                </p>
            </div>
        </div>
        <div class="row">
            <label class="field">费用</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="event-fee" name="fee"/></span>
                <span class="tip"></span>
                <span class="error" id="fee-error"></span>
            </div>
        </div>
        <input type="submit" value="提交" />
    </form>
</div>
<script>
    $('#datepicker').datepicker({
        dateFormat: "yy-mm-dd"
    });
</script>

<?php include('foot.php'); ?>