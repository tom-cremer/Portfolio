<?php /* Template Name: Page "Projet" */ ?>
<?php get_header();?>

<?php
// Get the associated project post ID
$project_post_id = get_field('projet_associe');

// Check if a project is associated
if ($project_post_id): ?>

    <img class="p-image" src="<?= get_field('image_presentation', $project_post_id)['url']; ?>" alt="">

  <?php
 else:?>
    <p>No project associated with this page.</p>';
<?php
    endif;
?>


<?php get_footer(); ?>
