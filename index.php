<?php include 'config/config.php';?> 
<?php include 'libraries/Database.php';?>
<?php include 'includes/header.php';?>
<?php include 'helpers/format_helper.php';?>
<?php 
  //Create DB Object
  $db = new Database();

 //Create Query
  $query = "SELECT * FROM posts";

  //Run Query
  $posts = $db->select($query);

?>
<?php if($posts) :?>
    <?php while($row = $posts->fetch_assoc()) :?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?> </h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']);?> by <a href="#"><?php echo $row['author'];?></a></p>
            <p><?php echo $row['body']; ?></p>
            <hr>
            <a class="readmore" href="post.php?id=1">Read More</a>
          </div><!-- /.blog-post -->
     <?php endwhile; ?>
          
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

<?php else : ?>
  <p> There are no post yet</p>

<?php endif; ?>

<?php include 'includes/footer.php'?>       