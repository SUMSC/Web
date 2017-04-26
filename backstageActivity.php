
<div>	
	<h1>上传活动</h1>
</div>
<form method="POST" action="backstageActivitySubmit.php" enctype="multipart/form-data"> 

 	标题：<input type="text" name="title">
  <br><br>
  地点：<input type="text" name="place">
  <br><br>
  活动时间：<input type="text" name="activityTime">
  <br><br>
  相关连接：<input type="text" name="links">
  <br><br>
	摘要：
  <br>
  <textarea name="abstract" rows="1" cols="75"></textarea>
  <br><br>
  正文：<br>
  <textarea name="content" rows="25" cols="150"></textarea>
  <br><br>
  头图：
  <input type="file" name="file" id="file"> 
  <br><br>
  <input type="submit" name="submit" value="提交"> 
</form>
