<?php
include ('head.php');
?>

<div>
    <?php echo form_open_multipart('me/do_upload/'); ?>
    <h2>上传头像</h2>
        <div class="row">
            <input type="file" name="userfile" />
        </div>
        <input type="submit" value="提交" />
    </form>
</div>

<script type="text/javascript"></script>

<?php
    include ('foot.php');
?>