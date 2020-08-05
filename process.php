<?php include 'header.php';?>
<div class="apart">
	<div class="container" style="width: 700px;">
		<h3>Add Product</h3>
		<div class="margin-btm" style="height: 25px;"></div>
	</div>
	<div class="booking">	
	 	<div class="apart-form">
	 		<div class="container" style="width: 700px;">
				<form action="get_response.php" method="post" enctype = "multipart/form-data" id="product-form">
					<label>Product Name</label><input type="text" name="title">
					<label>Product Image</label><input type="file" name="image">
					<label>Product Description</label><textarea name="description" cols="30" rows="6"></textarea>
					<label>Price</label><input type="text" name="price">
					<label>Addtional Facilities </label><br />
					<label>Wife</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-wifi"></i>'>
					<label>AC</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-snowflake"></i>'>
					<label>TV</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-television"></i>'><br />
					<label>Safe</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-window-maximize"></i>'>
					<label>Minibar</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-glass-cheers"></i>'>
					<label>Telephone</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-phone"></i>'><br />
					<label>Kitchen</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-utensils"></i>'>
					<label>Towels</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-person-booth"></i>'>
					<label>Workspace</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-door-closed"></i>'><br />
					<label>Shower</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-shower"></i>'>
					<label>Bath</label><input type="checkbox" name="facilites[]" value='<i class="fa fa-bath"></i>'><br />
					<label>Product Gallery</label><input type="file" name="files[]" multiple accept="image/*">
					<label>Size:</label><input type="text" name="size">
					<label>Beds:</label><input type="text" name="bed">
					<label>Accommodates:</label><input type="text" name="accommodates">
					<input type="submit" name="submit" id="submit_form">
					<input type="reset" name="reset">
 				</form>
			</div>
 		</div>
	</div>
	
</div>

<style type="text/css">
	input[type='text'], input[type='file'], textarea{
		width: 100% !important;
	}
	input[type=checkbox]{
		    width: 22%;
	}
</style>

 <?php include 'footer.php';?>