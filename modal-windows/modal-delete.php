
<!-- modal window of deleting form -->
<!-- it allow to delete use title -->
<div class = "modal fade" id = "staticBackdrop3" data-backdrop = "static" data-keyboard = "false" tabindex = "-1" aria-labelledby = "staticBackdropLabel" aria-hidden = "true">
  <div class = "modal-dialog text-light">
    <div class = "modal-content"  style = "background-color: rgba(128, 51, 15,1.0);">
      <div class = "modal-header">
        <h5 class = "modal-title" id = "staticBackdropLabel">Delete reciepe</h5>
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
          <span aria-hidden = "true">&times;</span>
        </button>
      </div>
      <section class = "modal-body">
        <!-- form to manipulate with content -->
        <form action = "Database/Delete.php" method = "post">
        	<label for = "title">Title</label>
        	<input type = "text" id = "title" class = "form-control" name = "Title">
        
      </section>
      <div class = "modal-footer">
        <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
        <button type = "submit" class = "btn btn-danger" name = "DELETE">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>