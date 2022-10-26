<!-- ................Create Posts Modal................ -->
<div class="modal fade" id="create_post_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-plus-circle"></i> Create Posts</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="post/insert.php" enctype="multipart/form-data">
        	<input type="text" name="title" placeholder="Enter Title" class="form-control"><br>
        	<textarea name="description" placeholder="What's on your mind?" class="form-control"></textarea><br>
        	<b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Create</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Edit Posts Modal................ -->
<div class="modal fade" id="edit_post_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-edit"></i> Edit Posts</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="post/update.php">
          <input type="hidden" name="id" class="id">
          <input type="hidden" name="old_photo" class="old_photo">
          <input type="hidden" name="delete_photo" class="delete_photo">
          <input type="text"  name="title" placeholder="Enter Title" class="form-control title"><br>
          <textarea name="description" placeholder="What's on your mind?" class="form-control description"></textarea><br>
          <button  type="button" class="btn btn-danger dp_btn">Delete photo</button>
          <img src="" class="w-100 photo">
          <b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i> Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Mail Modal................ -->
<div class="modal fade" id="mail_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-envelope-open-text mr-1"></i>Mail Form</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" name="" placeholder="To:" class="form-control mb-2">
          <input type="text" name="" placeholder="From" class="form-control mb-2">
          <input type="text" name="" placeholder="Subject" class="form-control mb-2">
          <textarea name="" rows="5" placeholder="Message" class="form-control"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-envelope-open-text mr-1"></i>Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Search Modal................ -->
<div class="modal fade" id="search_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-search mr-1"></i>Searched Results</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button class="btn btn-outline-info all_btn" >All</button>
        <button class="btn btn-outline-info people_btn" >People</button>
        <button class="btn btn-outline-info post_btn" >Posts</button>
        <div class="search_area">
          
        </div>

      </div>
    </div>
  </div>
</div>