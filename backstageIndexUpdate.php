	<div>	
	<h1>更新首页</h1>
	</div>
	<form method="POST" action="backstageIndexUpdateSubmit.php" enctype="multipart/form-data"> 

 		标题：<input type="text" name="title">
  		<br><br>
  		摘要：<input type="text" name="abstract">
  		<br><br>
      头图：
      <input type="file" name="file" id="file"> 
      <br><br>
      对应活动页面：
      <input type="text" name="links"> 
      <br><br> 
      <input type="submit" name="submit" value="提交"> 
   </form>