$(document).ready(function(){
        
    var lesmonth = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
    var date = new Date();
    var month = date.getMonth();
    var c_month = month;
    var annee = date.getFullYear();
    var session_annee = $("#annee").text();
    
    var months = ["Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre"];

    if(annee == session_annee){
        alert(c_month);
        $(".month1").html(months[c_month]);
        $(".month1").attr("value",c_month);
        $(".month2").html(months[c_month+1]);
        $(".month2").attr("value",c_month+1);
        $(".month3").html(months[c_month+2]);
        $(".month3").attr("value",c_month+2);
        $(".month4").html(months[c_month+3]);
        $(".month4").attr("value",c_month+3);
        $(".month5").html(months[c_month+4]);
        $(".month5").attr("value",c_month+4);

    //$("#next_month").click();
    }else{
    //alert("annee differente");
        $(".month1").html(months[0]);
        $(".month2").html(months[1]);
        $(".month3").html(months[2]);
        $(".month4").html(months[3]);
        $(".month5").html(months[4]);

    }

    $("#btn_add").click(function(){
        $.get("add_row.php",{lasttype:lt},function(data){
            location.href="";
        });
     
    });
    
    $("#next_month").click(function(){
        
        var m1 = $(".month1").attr("value");
        m1++;
        if(m1>=12){
            m1=0;
        }
        

        var m2 = $(".month2").attr("value");
        m2++;
        if(m2>=12){
            m2=0;
        }
        
        var m3 = $(".month3").attr("value");
        m3++;
        if(m3>=12){
            m3=0;
        }

        var m4 = $(".month4").attr("value");
        m4++;
        if(m4>=12){
            m4=0;
        }
		
		var m5 = $(".month5").attr("value");
		m5++;
        if(m5>=12){
            m5=0;
            var old_annee = $("#annee").text();
            old_annee=old_annee.trim();
            old_annee++;
            $.get("change_annee.php",{old_annee:old_annee},function(data){
                
               location.href=""; 
            });
        }
        

        $(".month1").html(months[m1]);
        $(".month1").attr("value",m1);
        
        $(".month2").html(months[m2]);
        $(".month2").attr("value",m2);
        
        $(".month3").html(months[m3]);
        $(".month3").attr("value",m3);
		
		$(".month4").html(months[m4]);
        $(".month4").attr("value",m4);

        $(".month5").html(months[m5]);
        $(".month5").attr("value",m5);
       
    });
    
    
    $("#prev_month").click(function(){

        var m1=$(".month1").attr("value");
        m1--;
        if(m1<0){
            m1=11;
        }
        
        var m2=$(".month2").attr("value");
        m2--;
        if(m2<0){
            m2=11;
        }
        
        var m3=$(".month3").attr("value");
        m3--;
		if(m3<0){
            m3=11;
        }

        var m4=$(".month4").attr("value");
        m4--;
        if(m4<0){
            m4=11;
        }

		var m5=$(".month5").attr("value");
        m5--;
        if(m5<0){
            m5=11;
            var old_annee=$("#annee").text();
            old_annee=old_annee.trim();
            old_annee--;
            $.get("change_annee.php",{old_annee:old_annee},function(data){
                
               location.href=""; 
        });
        }
        
        
        $(".month1").html(months[m1]);
        $(".month1").attr("value",m1);
        
        $(".month2").html(months[m2]);
        $(".month2").attr("value",m2);
        
        $(".month3").html(months[m3]);
        $(".month3").attr("value",m3);

		$(".month4").html(months[m4]);
        $(".month4").attr("value",m4);

        $(".month5").html(months[m5]);
        $(".month5").attr("value",m5);

    });
    	 
})