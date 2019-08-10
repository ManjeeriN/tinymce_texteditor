 <?php

	include ("dbconnect.php");


	if (isset($_POST['submit_blog'])) {	

		$blog_d = $_POST['blog_description'];
		$blog_description = str_replace("'", "&apos;", $blog_d);
	
		$sql = mysql_query("INSERT INTO texteditor(description) VALUES('$blog_description')");
		
		
		if($sql){

		echo '<script>alert("Blog Added Successfully")</script>';	
		echo '<script>window.location="view_blogs.php"</script>';

		}
	}
?>
			
<a href="view_blogs.php"><button>View Blogs</button></a>
					

<form action="" method="post" enctype="multipart/form-data">
	
	<h6 >Blog Description</h6>

	<textarea class="textarea" rows="10" name="blog_description" id="general_text"></textarea>														

		<button type="submit" name="submit_blog" >Add</button>
		<button type="reset" >Cancel</button>

</form>
			


<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
/*tinymce.init({
    selector: "textarea",
	theme: "modern",
	plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ]   
 });*/
 
 tinymce.init({
    selector: ".textarea",
	theme: "modern",
	width : 'auto',  // Your dimensions may differ - toy around with them!
	height : 100,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",		 
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image  | forecolor backcolor  | print preview code ",
   image_advtab: true,
   external_filemanager_path:"filemanager/",
   filemanager_title:"Responsive Filemanager",
   external_plugins: { "filemanager" : "http://localhost/text_editor/filemanager/plugin.js"}
	 //change the path according to the server name
 });

</script>


<!-- image media --------  for video  -->

		
		
