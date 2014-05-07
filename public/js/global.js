function modify() {
	valueSelect = $('#userModidy option:selected').val();
	$.ajax({
		url : '/cms/index.php/modificationUsers',
		type : 'POST', // Le type de la requête HTTP.
		data : 'id=' + valueSelect,
		dataType : 'html',
		success : function(data) {
			$('#modifyuser').html(data);
		}
	});
};

$('#modifyArticleButton').click(function() {
    valueSelect = $('#selectArticle option:selected').val();
    $.ajax({
        url : '/cms/index.php/ajaxArticle',
        type : 'POST', // Le type de la requête HTTP.
        data : 'id=' + valueSelect,
        dataType : 'html',
        success : function(data) {
            $('#articleAjax').html(data);
        }
    });
});

$('#deleteArticleButton').click(function() {
    valueSelect = $('#selectArticle option:selected').val();
    $.ajax({
        url : '/cms/index.php/adminArticles/deleteArticle',
        type : 'POST', // Le type de la requête HTTP.
        data : 'id=' + valueSelect,
        dataType : 'html',
        success : function(data) {
            alert('Supression réussi');
            window.location='/cms/index.php/adminArticles';
        }
    });
});

$('#createArticle').click(function() {
    $.ajax({
        url : '/cms/index.php/ajaxArticle/createArticle',
        type : 'POST', // Le type de la requête HTTP.
        data : '',
        dataType : 'html',
        success : function(data) {
            $('#articleAjax').html(data);
        }
    });
});

function changeTitle() {
    valueSelect = $('#changeTitle').val();
    $.ajax({
        url : '/cms/index.php/ajaxTitle',
        type : 'POST', // Le type de la requête HTTP.
        data : 'title=' + valueSelect,
        dataType : 'html',
        success : function(data) {

        }

    });
};