<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('home/create'); 
$options = array(
'Introduction' => 'Introduction',
'Design' => 'Design',
'Development' => 'Development',
'Talks' => 'Talks',
);

?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="url">Url</label>
    <input type="input" name="url" /><br />

    <label for="author">Author</label>
    <input type="input" name="author" /><br />

     <label for="platform">Platform</label>
    <input type="input" name="platform" /><br />


    <?php echo form_dropdown('category', $options, ''); ?>


    <input type="submit" name="submit" value="Send Article" />

</form>