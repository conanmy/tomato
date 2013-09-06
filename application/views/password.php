<?php include('head.php'); ?>
<div class="main">
<form name="password" method="post" action=".">
    <div class="row">
        <label class="field">邮箱</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-email" name="email" /></span>
            <span class="tip">*</span>
            <span class="error" id="email-error"></span>
        </div>
    </div>
    <input type="submit" value="提交" />
</form>
</div>
<div class="side"></div>
<?php include('foot.php'); ?>