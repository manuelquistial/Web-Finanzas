$(document).ready(function(){

	$('.boxes').click(function(){
		var id = $(this).attr('id');
		var url = $(this).attr('data');
		if(id != 01){
			datos(id, url);
		}
	});

	function datos(id, url){
		$.ajax({
		type: 'post',
		url: url,
		data: {
			id:id,
		},
		success: function (response) {
		// We get the element having id of display_info and put the response inside it
            $(".data").html('');
            $(".data").html('<tr class="table-style"><td><strong>Rubro de egresos</strong></td><td><strong>Presupuesto inicial</strong></td><td><strong>Reservas</strong></td><td><strong>Egresos</strong></td><td><strong>Disponibilidad</strong></td></tr>');		
            
            for(var g in response.tipo){
				var h = response.tipo[g];
				console.log(h[2]);
			}

            for(var o in response.project){
				var j = response.project[o];
				$("#myModalLabel").html(j[1]);
			}
			var cont = 0;

			var sumDT = 0;
			var sumTT = 0;
			var sumCT = 0;
			var totalT = 0;

			for(var p in response.rubro){
				cont = cont + 1;
				var j = response.rubro[p];
				console.log(j[1]);
				$(".data").append("<tr id='"+cont+"'><td>"+j[1]+"</td></tr>");
				var ru = j[2];

				var sumD = 0;
				var sumT = 0;
				var sumC = 0;
				var total = 0;

				for(var t in response.valor){
					var r = response.valor[t];
					if(r[1] == ru){
						if(r[3] == 2){
							sumD = sumD + Number(r[2]);
						}else if(r[3] == 3){
							sumT = sumT + Number(r[2]);
						}else if(r[3] == 4){
							sumC = sumC + Number(r[2]);
						}
					}
				}

				sumDT = sumDT + sumD;
				sumTT = sumTT + sumT;
				sumCT = sumCT + sumC;

				total = sumC - (sumT + sumD);

				$("#"+cont).append("<td>"+sumC.toLocaleString('de-DE')+"</td><td>"+sumT.toLocaleString('de-DE')+"</td><td>"+sumD.toLocaleString('de-DE')+"</td><td>"+total.toLocaleString('de-DE')+"</td>");
			}

			totalT = sumCT - (sumTT + sumDT);

			$(".data").append('<tr><td><strong>TOTAL PROYECTO</strong></td><td><strong>'+sumCT.toLocaleString('de-DE')+'</strong></td><td><strong>'+sumTT.toLocaleString('de-DE')+'</strong></td><td><strong>'+sumDT.toLocaleString('de-DE')+'</strong></td><td><strong>'+totalT.toLocaleString('de-DE')+'</strong></td></tr>');

			var inNeto = 0;
			var reEg = (sumTT + sumDT);
			var reDi = 0;

			for(var w in response.ingreso){
				var q = response.ingreso[w];
				inNeto = Number(q[1]);
			}

			reDi = inNeto - reEg;

			$("#inNeto").html(inNeto.toLocaleString('de-DE'));
			$("#reEg").html(reEg.toLocaleString('de-DE'));
			$("#reDi").html(reDi.toLocaleString('de-DE'));

			$("#dis").html(reDi.toLocaleString('de-DE'));

			$('#modalOne').modal('show');
		}
		});
	}
});