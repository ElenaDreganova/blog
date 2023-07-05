$('#formTwit').on('submit', function(e) {
	e.preventDefault(); //функция необновления страницы и не отправки формы
	//собираем данные с формы для создания аякс-запроса
	let form = $('#formTwit'); //переменная формы
	let data = form.serialize(); //переменная данных

//реализация загрузки на сервер не текстовых файлов	
    let file_data = $('#twitImage').prop('files')[0];
    let form_data = new FormData($('#formTwit')[0]);                  
    	form_data.append('file', file_data);
  


	$.ajax({
	  type: "POST",
	  url: "/modules/add-twit.php",
	  data: form_data,
	  processData: false,
	  contentType: false,
	  success: function(data) {
	  	//let ajaxStatus = 
	  	$('#listTwits').prepend(data);//проверяем статус запроса и вставляем данные
	  		
	  },
	});
});

