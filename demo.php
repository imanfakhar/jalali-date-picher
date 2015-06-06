<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/jalali-date-picker.min.css" rel="stylesheet" type="text/css">
<link href="css/prettify.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>
<script src="js/jalali-date-picker-deta.js"></script>
<style>
code {
	display:inline-block;
	direction:ltr;
}
</style>
</head>

<body>
<section class="container container-fluid">
<div class="clearfix" style="height:50px;">&nbsp;</div>
<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" class="form-horizontal well">
<h1 class="text-primary">فیلد انتخاب تاریخ شمسی</h1>
<div class="row"><label for="MYDATE">فیلد تاریخ اول </label>
<script>
jalaliDateDeta('MYDATE'<?php if(isset($_POST['MYDATE'])) echo ', "'.$_POST['MYDATE']['day'].'","'. $_POST['MYDATE']['month'].'","'. $_POST['MYDATE']['year'].'"';?>);
</script>
<div class="clearfix">&nbsp;</div>
<div class="col-xs-10 col-xs-offset-1 text-justify">
<div class="col-xs-4"><label for="MYDATE1">فیلد تاریخ دوم </label>

<script>
jalaliDateDeta('MYDATE1'<?php if(isset($_POST['MYDATE1'])) echo ', "'.$_POST['MYDATE1']['day'].'","'. $_POST['MYDATE1']['month'].'","'. $_POST['MYDATE1']['year'].'"';?>);
</script>
</div>
<div class="col-xs-4"><label for="MYDATE2">فیلد تاریخ سوم </label>

<script>
jalaliDateDeta('MYDATE2'<?php if(isset($_POST['MYDATE2'])) echo ', "'.$_POST['MYDATE2']['day'].'","'. $_POST['MYDATE2']['month'].'","'. $_POST['MYDATE2']['year'].'"';?>);
</script>
</div>
<div class="col-xs-4"><label for="MYDATE3">فیلد تاریخ چهارم</label>

<script>
jalaliDateDeta('MYDATE3'<?php if(isset($_POST['MYDATE3'])) echo ', "'.$_POST['MYDATE3']['day'].'","'. $_POST['MYDATE3']['month'].'","'. $_POST['MYDATE3']['year'].'"';?>);
</script>
</div>

<h3 class="text-info">نحوه استفاده</h3>
<dl class="dl-horizontal">
<dt>خاصیتها</dt>
<dd>
<ul class="list-group">
<li class="list-group-item">استفاده از کتابخانه jQuery</li>
<li class="list-group-item">هماهنگی با فریم ورک Bootstrap</li>
<li class="list-group-item">استفاده راحت </li>
<li class="list-group-item">امکان قرار دادن چندین فیلد تاریخ در یک فرم</li>
<li class="list-group-item">شناسایی ماه های 31 روزه</li>
<li class="list-group-item">شناسایی سالهای کبیسه </li>
</ul>
</dd>
<dt>اسکریپتهای مورد نیاز:</dt>
<dd>این ابزار بجز کتابخانه جی کوئری و فریم ورک بوت استراپ به یک لینک استایل دهی <code contenteditable="true">
jalali-date-picker.min.css</code>  و دو اسکریپت <code contenteditable="true">
jalali-date-picker-deta.js</code> و <code contenteditable="true">
jalali-date-picker.min.js</code> نیاز دارد</dd>
<dt>تابع احضار</dt>
<dd>تابع احضار این اسکریپت <code contenteditable="true">
jalaliDateDeta('PICKER-NAME','d','m','y');</code> می باشد</dd>
<dt><code contenteditable="true">PICKER-NAME</code> (الزامی)</dt>
<dd>اولین متغیر این تابع <code contenteditable="true">PICKER-NAME</code> می باشد 
که نام فیلد تاریخ مورد نظر در فرم شماست این نام باید تشکیل شده از یک رشته حروف 
بزرگ لاتین باشد.<br> این متغیر به شما کمک می کند در یک فرم از چند فیلد معرفی 
تاریخ استفاده نمایید </dd>
<dt> متغیر d (اختیاری)</dt>
<dd>برای مشخص نمودن مقدار روز، مقدار معتبر یک عدد دو رقمی کوچکتر از 31 ، مقدار 
پیش فرض 'خالی'  </dd>
<dt> متغیر m (اختیاری)</dt>
<dd>برای مشخص نمودن مقدار ماه، مقدار معتبر یک عدد دو رقمی کوچکتر از 12 ، مقدار 
پیش فرض 'خالی'  </dd>
<dt> متغیر y (اختیاری)</dt>
<dd>برای مشخص نمودن مقدار سال، مقدار معتبر یک عدد چهار رقمی، مقدار پیش فرض 
'خالی'  </dd>
<dt>نمونه کدهای فرم</dt>
<dd>
<pre class="prettyprint" contenteditable="true">
&lt;!DOCTYPE html&gt;
&lt;html dir="rtl" lang="fa"&gt;
&lt;head&gt;
&lt;meta content="text/html; charset=utf-8" http-equiv="Content-Type"&gt;
&lt;link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"&gt;
&lt;link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"&gt;
&lt;link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"&gt;
&lt;link href="jalali-date-picker/css/jalali-date-picker.min.css" rel="stylesheet" type="text/css"&gt;
&lt;script src="js/jquery.js"&gt;&lt;/script&gt;
&lt;script src="jalali-date-picker/js/jalali-date-picker-deta.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form action="/" method="post" class="form-horizontal well"&gt;
&lt;script&gt;
jalaliDateDeta('EXAMPLE', 21, 05, 1384);
&lt;/script&gt;
&lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
&lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
&lt;script src="jalali-date-picker/js/jalali-date-picker.min.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
</dd>
<dt>کد اکشن</dt>
<dd>
<br>
<pre class="prettyprint" contenteditable="true">&lt;?php 
if(isset($_POST['EXAMPLE'])) {
$day = $_POST['EXAMPLE']['day'];
$month = $_POST['EXAMPLE']['month'];
$year = $_POST['EXAMPLE']['year'];
echo $year.'/'.$month.'/'.$day;
}
?&gt;
</pre>

</dd>
</dl>
</div>
</div>
<div class="clearfix">&nbsp;</div>
<button type="submit" class="btn btn-default">اجرای فرم </button>
<a href="jalali-date-picker.zip" class="btn btn-default"><i class="fa fa-download fa-lg"></i> دانلود با حجم 514kb </a>
</form>
</section>
<div class="modal" id="output-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		×</button>
        <h4 class="modal-title">نتیجه ارسال فرم</h4>
      </div>
      <div class="modal-body">
<table class="table table-condensed" id="output">
<tr>
<?php if(isset($_POST['MYDATE'])) {
$date = $_POST['MYDATE']; ?>
<td>
تاریخ مشخص شده:<br>
 روز:  <?php echo $date['day'];?><br>
 ماه: <?php echo $date['month'];?><br>
 سال: <?php echo $date['year'];?> 
 </td>
<?php } ?>
<?php if(isset($_POST['MYDATE1']) && !empty($_POST['MYDATE1']['day'])) {
$date1 = $_POST['MYDATE1']; ?>
<td>
دومین تاریخ مشخص شده:<br>
 روز:  <?php echo $date1['day'];?><br>
 ماه: <?php echo $date1['month'];?><br>
 سال: <?php echo $date1['year'];?> 
 </td>
<?php } ?>
<?php if(isset($_POST['MYDATE2']) && !empty($_POST['MYDATE2']['day'])) {
$date2 = $_POST['MYDATE2']; ?>
<td>
سومین تاریخ مشخص شده:<br>
 روز:  <?php echo $date2['day'];?><br>
 ماه: <?php echo $date2['month'];?><br>
 سال: <?php echo $date2['year'];?> 
 </td>
<?php } ?>
<?php if(isset($_POST['MYDATE3']) && !empty($_POST['MYDATE3']['day'])) {
$date3 = $_POST['MYDATE3']; ?>
<td>
چهارمین تاریخ مشخص شده:<br>
 روز:  <?php echo $date3['day'];?><br>
 ماه: <?php echo $date3['month'];?><br>
 سال: <?php echo $date3['year'];?> 
 </td>
<?php } ?>

</tr>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
      </div>
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/prettify.js"></script>
<script src="js/jalali-date-picker.min.js"></script>
<script>
$(document).ready(function() {
window.prettyPrint && prettyPrint();
});
</script>
<?php if(isset($_POST['MYDATE'])) { ?>
<script>
$("#output-modal").modal("show");
</script>
<?php } ?>

</body>

</html>
