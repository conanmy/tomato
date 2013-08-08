<?php include('head.php'); ?>

<h1>登录</h1>

<div class="login-form">
    <form method="post" action="./check/">
        <div class="row">
            <label class="field">邮箱</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-email" name="email" /></span>
                <span class="tip"></span>
                <span class="error" id="email-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">密码</label>
            <div class="item">
                <span><input type="password" class="basic-input" id="member-password" name="password" /></span>
                <span class="tip"></span>
                <span class="error" id="password-error"></span>
            </div>
        </div>
        <input type="submit" value="提交" />
    </form>
</div>

<?php include('foot.php'); ?>