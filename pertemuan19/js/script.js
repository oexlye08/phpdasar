$(document).ready(function(){

	//hilangkan tombol cari
	$('#tombol-cari').hide();

//event ketika keyword di tulis
	$('#keyword').on('keyup', function(){
		//munculkan load.gif
		$('.loader').show();

		//ajax menggunakanload
		// $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

		//$get()
		$.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){

			$('#container').html(data);
			$('.loader').hide();

		});
	});

});