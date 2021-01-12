

    $( document ).ready(function() {
     		$('#excell').change(function(e){
     		 		
     		 		var fileUpload = $("#excell")[0];

			        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$/;
			        if (regex.test(fileUpload.value.toLowerCase())) {
			            if (typeof (FileReader) != "undefined") {
			            	
			            	if($('#manufactor').val() == 0){
			            		$('p#results_excell').html('Поставщик не выбран.');
			        			$('p#results_excell').css('color','red');
			            	}else{
			            		$('p#results_excell').html('Прайс готов для обработки..');
			        			$('p#results_excell').css('color','green');
			        			
			        			var $input = $("#excell");
							    var fd = new FormData;
							    fd.append('img', $input.prop('files')[0]); 
							    
							    $.ajax({
			                    type: "POST",
			                    url: "products/upload/check",

			                    data: {
			                         file: fd
			                    },
			                    success: function(html) {

			                       alert(html);

			                    }
			                });
			        			
			        			
			        			 
			            	}

			            } else {

			                $('p#results_excell').html('Браузер не поддерживает html5.');
			        		$('p#results_excell').css('color','red');
			            }

			        } else {

			        	$('p#results_excell').html('Формат файла должен быть .xlsx либо .xls');
			        	$('p#results_excell').css('color','red');
			          

			        }
     		
            		

     		  });
     			$('#manufactor').change(function(e){

     				if($('#manufactor').val() == 0){
			            		$('p#results_excell').html('Поставщик не выбран.');
			        			$('p#results_excell').css('color','red');
			            	}else{

			            		if($('#excell').val() != ''){
			            			$('p#results_excell').html('Прайс готов для обработки..');
			        			 	$('p#results_excell').css('color','green');
			        			 	$('#upload_price').prop('disabled',false);
			            		}else{
			            			$('p#results_excell').html('Загрузите прайс.');
			        				$('p#results_excell').css('color','red');
			            		}
			            		

			            	}

     			});



    });

