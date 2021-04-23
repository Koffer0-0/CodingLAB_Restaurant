<!-- modal window of create form -->
<!-- bootstrap ellements -->
<div class = "modal fade" id = "staticBackdrop" data-backdrop = "static" data-keyboard = "false" tabindex = "-1" aria-labelledby = "staticBackdropLabel" aria-hidden = "true">
	<div class = "modal-dialog">
		<div class = "modal-content" style = "background-color: rgba(255, 210, 105, 1.0);">
		  <div class = "modal-header">
		    <h5 class = "modal-title" id = "staticBackdropLabel">Create reciepe</h5>
		    <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
		      <span aria-hidden = "true">&times;</span>
		    </button>
		  </div>
		  <section class = "modal-body">
		    <!-- form to manipulate with content -->
		    <!-- multipart/form-data  need to send some media like picture and other files-->
		    <form action = "./Database/Create.php" method = "post" enctype = "multipart/form-data">
		    	<label for = "title">Title</label>
		    	<input type = "text" id = "title" class = "form-control" name = "Title">

				<label>Picture</label>
		    	<input type = "file" class = "form-control" name = "Picture">

		    	<!-- I wanted make with using this that to choose special section but it doesn't work -->
		    	<label for = "ing">Type</label>
		    	<select class = "form-control bg-light" name = "dish">
					<option value = "pilaf" name = "pilaf">pilaf</option>
					<option value = "lagman" name = "lagman">lagman</option>
					<option value = "drink" name = "drink">drink</option>
					<option value = "confection" name = "confection">confection</option>
				</select>

		    	<label for = "price">Price</label>
		    	<input type = "text" id = "price" class = "form-control" name = "Price">

		    	<label for = "Description">Description</label>
		    	<textarea id = "title" id = "Description" class = "form-control" name = "Description"></textarea>

		    	<label for = "Date">Date</label>
		    	<input type = "Date" id = "Date" class = "form-control" name = "Date">
		  </section>

		  <div class = "modal-footer">
		    <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
		    <button class = "btn btn-primary" name = "CREATE">Create</button> 	
		  </div>
			</form>
		</div>
	</div>
</div>