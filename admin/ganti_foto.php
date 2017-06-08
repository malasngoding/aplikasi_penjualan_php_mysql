<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</h3>
<br/><br/>
<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="oke"){
		echo "<div class='alert alert-success'>Foto berhasil di ganti !! </div>";
	}
}
?>

<br/>
<div class="col-md-5 col-md-offset-3">
	<form action="ganti_foto_act.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['uname']; ?>">
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input name="foto" type="file" class="form-control" placeholder="Password Lama ..">
		</div>		
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Ganti">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>

<?php 
include 'footer.php';

?>