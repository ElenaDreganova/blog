
         <div class="container">
    <div id="ajaxStatus"></div>
    <form class="form-group" action="/modules/add-twit.php" method="post" id="formTwit" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>">
        <label for="twit" >Your twit</label>
        <textarea class="form-control" name="twit" id="twit" rows="3" placeholder="Enter your text"></textarea>
        <input id="twitImage" type="file" name="image">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2">Send</button>
      </div>
    </form>
</div>

    

 
 
    
   