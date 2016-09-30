<?php // THis is template for all posts and pages (ie. not just Pages)

use Roots\Sage\Titles; 


if (is_post_type_archive('project')){
	echo '<div class="filters">Filters</div>';
}
?>





<div class="page-header uk-text-center">
  <h1><?= Titles\title(); ?></h1>
</div>
