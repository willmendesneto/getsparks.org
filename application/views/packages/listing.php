<?php
$title = ($browse_type != '' ? "$browse_type " : "") . 'Packages';
$this->load->view('global/_new_header.php', array('title' => $title)); 
?>

<a class="rss_float" href="<?php echo base_url(); ?>packages/browse/<?php echo $browse_type_raw ?>.rss">&nbsp;</a>

<h2><?php echo $title; ?></h2>
<p><?php echo $description; ?></p>

<?php $this->load->view('packages/_list', array('sparks' => $sparks, 'rating' => isset($rating) ? $rating : null)); ?>

<?php $this->load->view('global/_new_footer.php'); ?>
