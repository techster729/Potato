<?php require "app/views/partials/header.view.php" ?>
    
    <div class="container">
    <form action="/store" method="post">
        
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
<?php require "app/views/partials/footer.view.php" ?>