<?php
class Article_model extends CI_Model {

	function getArticles() {
		$query = $this->db->query ( "SELECT * from articles");
		return $result = $query->result ();
	}

	function getArticleFromId($id) {
		$query = $this->db->query ( "SELECT * from articles where id_articles = $id");
		return $result = $query->result ();
	}

	function updateArticle($dataArticles) {
		$this->db->where('id_articles', $dataArticles['id_articles']);
		$this->db->update('articles', $dataArticles);
	}

	function addArticle($dataArticles) {
		$this->db->insert('articles', $dataArticles);
	}

	function deleteArticle($dataArticles) {
		$this->db->delete('articles', $dataArticles);
	}

}