<?php
defined('_MEXEC') or die ('Restricted Access');

?>

	<div id="main-wrapper">
		<div class="ic"></div>
		<div id="content">
			<h1><span>Delete Distributor</span></h1>

	<?php
		echo '<span class="delete">';
		echo "Confirm Deletion of ID: {$sel_row[0]['id']}, Owner Name: {$sel_row[0]['name']}";
		echo '</span>';

	?>
			<div id="content-wrapper">
				<div class="table">
					<form id="delete-client" action="index.php?option=onlinejobs&view=distributors" method="post">
						<fieldset class="form">
							<div class="cleaner"></div>
							<input type="hidden" name="id" value="<?php echo $sel_row[0]['id']; ?>" />
							<div class="form-button">
								<span><input type="reset" name="reset" value="Cancel" onclick="history.back()" /></span>
								<span><input type="submit" name="delete_distributor" value="Confirm Delete" /></span>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
        </div>

	</div>
