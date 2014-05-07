<hr/>
<h1>Gestion des Articles</h1>
<hr/>
<h2>Liste des articles crées</h2>
<hr/>
<?php if(!empty($Articles)){?>
<form id="selectArticle">
	<select>
		<?php foreach($Articles as $article){?>
		<option value="<?php echo ($article->id_articles); ?>"><?php echo ($article->libelle_articles); ?></option>
		<?php }?>
	</select>
</form>
<br />
<button id="modifyArticleButton">Modifier</button><button id="deleteArticleButton">Supprimer</button>
<?php } else {
echo "Aucun article de crée.<br />";
}?>
<hr/>
<h2>Creer un article</h2>
<hr/>
<button id="createArticle">Creer un article</button>
<hr/>
<div id='articleAjax'></div>
<hr/>
