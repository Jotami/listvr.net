  <div class="row hero">
    	<div class="twelve columns">
        <img src="<?php echo base_url(); ?>images/rect.png">
      </div>
  </div>

<section class="section introduction">
    <div class="row">
      <div class="ten columns"><h2 class="category-title">Introduction</h2></div>
      <div class="two columns"><span class="viewall"></span></div>
    </div>
    <hr>

    <?php 

    $startrow = true;
    $postcounter = 0;

    foreach ($articles as $article):
  if($article['category'] == 'Introduction') {
    if($startrow == true) {
      echo "<div class='row'><!-- Row Start -->";
      $startrow = false;
    }
    ?>
       
    <div class="four columns">
      <h3><a href="<?php echo $article['url']; ?>"><?php echo $article['title']; ?></a></h3>
      <p class="articleMeta">By <span class="author"><?php echo $article['author']; ?></span> on <span class="platform"><?php echo $article['category']; ?></span>
      </p>
    </div>
          
    <?
     $postcounter += 1;
     if ($postcounter == 3) {
      $postcounter = 0;
      $startrow = true;
      echo "</div><!-- Row End -->";
     }
   }
     endforeach; 
     ?>

</section>

<section class="section design">
    <div class="row">
      <div class="ten columns"><h2 class="category-title">Design</h2></div>
      <div class="two columns"><span class="viewall"></span></div>
    </div>
    <hr>

    <?php 

    $startrow = true;
    $postcounter = 0;

    foreach ($articles as $article):
  if($article['category'] == 'Design') {
    if($startrow == true) {
      echo "<div class='row'><!-- Row Start -->";
      $startrow = false;
    }
    ?>
       
    <div class="four columns">
      <h3><a href="<?php echo $article['url']; ?>"><?php echo $article['title']; ?></a></h3>
      <p class="articleMeta">By <span class="author"><?php echo $article['author']; ?></span> on <span class="platform"><?php echo $article['category']; ?></span>
      </p>
    </div>
          
    <?
     $postcounter += 1;
     if ($postcounter == 3) {
      $postcounter = 0;
      $startrow = true;
      echo "</div><!-- Row End -->";
     }
   }
     endforeach; 
     ?>

</section>

<section class="section development">
    <div class="row">
      <div class="ten columns"><h2 class="category-title">Dev</h2></div>
      <div class="two columns"><span class="viewall"></span></div>
    </div>
    <hr>

    <?php 

    $startrow = true;
    $postcounter = 0;

    foreach ($articles as $article):
  if($article['category'] == 'Development') {
    if($startrow == true) {
      echo "<div class='row'><!-- Row Start -->";
      $startrow = false;
    }
    ?>
       
    <div class="four columns">
      <h3><a href="<?php echo $article['url']; ?>"><?php echo $article['title']; ?></a></h3>
      <p class="articleMeta">By <span class="author"><?php echo $article['author']; ?></span> on <span class="platform"><?php echo $article['category']; ?></span>
      </p>
    </div>
          
    <?
     $postcounter += 1;
     if ($postcounter == 3) {
      $postcounter = 0;
      $startrow = true;
      echo "</div><!-- Row End -->";
     }
   }
     endforeach; 
     ?>

</section>

<section class="section talks">
    <div class="row">
      <div class="ten columns"><h2 class="category-title">Talks</h2></div>
      <div class="two columns"><span class="viewall"></span></div>
    </div>
    <hr>

    <?php 

    $startrow = true;
    $postcounter = 0;

    foreach ($articles as $article):
  if($article['category'] == 'Talks') {
    if($startrow == true) {
      echo "<div class='row'><!-- Row Start -->";
      $startrow = false;
    }
    ?>
       
    <div class="four columns">
      <h3><a href="<?php echo $article['url']; ?>"><?php echo $article['title']; ?></a></h3>
      <p class="articleMeta">By <span class="author"><?php echo $article['author']; ?></span> on <span class="platform"><?php echo $article['category']; ?></span>
      </p>
    </div>
          
    <?
     $postcounter += 1;
     if ($postcounter == 3) {
      $postcounter = 0;
      $startrow = true;
      echo "</div><!-- Row End -->";
     }
   }
     endforeach; 
     ?>

</section>
