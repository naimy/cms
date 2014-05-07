<?php foreach ( $articles as $i ) { ?>
<a><h2><?php echo mb_strtoupper($i->libelle_articles , 'UTF-8');?></h2></a>
<div class="articles">
	<p><?php echo substr($i->content_article, 0, 150).'...'; ?></p>
	<p><a href="">Lire la suite ?</a></p>
</div>
<hr/>
<?php } ?>