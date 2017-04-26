<?php
   $view = $_GET['view'];
   if($view==1){
?>
<div> 
   <h1>文档查看</h1>
</div>


<?php
   }
   else{
   ?>



<div>	
	<h1>上传文档</h1>
</div>
	<form method="POST" action="backstageDocumentsUpdate.php" enctype="multipart/form-data"> 

 		标题：<input type="text" name="title">
  		<br><br>
	   正文：<textarea name="content" rows="25" cols="150"></textarea>
   	<br><br>
      附件：
      <input type="file" name="file" id="file"> 
      <br><br>
   <input type="submit" name="submit" value="提交"> 
</form>
<?php } ?>