<?
if($errors){
	foreach($errors as $error){
	print '<div class="f-message f-message-error">'.$error.'</div>';
	}
}
?>
<br/>

<form action="" method="post" enctype="multipart/form-data">
<table>
	<tr>
	<td>Название</td><td><input class="g-4" type="text"  name="banner_title" value="<?=$data['banner_title']?>"></td>
	</tr>
	<tr>
	<td>Ссылка</td><td><input class="g-4" type="text"  name="banner_url" value="<?=$data['banner_url']?>"></td>
	</tr>
	<tr>
	<td>Изображение</td><td><input type="file" name="image"></td>
	</tr>
	<tr>
	<td><input class="f-bu" type="submit" name="submit" value=" Сохранить "></td>
	</tr>
</table>
</form>