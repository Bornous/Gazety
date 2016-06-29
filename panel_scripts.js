
	var dzisiaj= new Date();	
	var dzien = dzisiaj.getDate();
	var dzien_tyg = dzisiaj.getDay();
	var mies = dzisiaj.getMonth();
	var rok = dzisiaj.getFullYear();

	var dni = new Array("Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela");
	var miesiace= new Array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień");
	var miesiac = miesiace[mies];
	var dzien_tygodnia=dni[dzien_tyg];
	mies++;
	
	//Obliczanie tygodnia roku:
	var first_sunday=3;
	var first_month=1;
	var rok_temp=2016;
	
	var tydzien=1;
	var mies_temp=1;
	var dzien_temp=1;
	
	var liczba_dni_w_miesiacu=31;
	var temp=0;
	var m=0;
	var d=0;
	for(var i=1;dzien_temp+1<dzien && mies_temp<=mies && rok_temp<=rok;i++){
		
		if(rok_temp==rok)m=1;
		if(first_month==mies)d=1;
		
		first_sunday++;
		if(d==1) dzien_temp=first_sunday;
		
		if(i+temp==7 ){
			tydzien++;
			i=0;
			temp=0;
			if(tydzien>53 || (tydzien>=51 && 31-first_sunday<=3)) tydzien=1;
		}
		
		if(first_sunday==liczba_dni_w_miesiacu){
			
			first_month++;
			if(m==1)mies_temp=first_month;
			first_sunday=0;	
			temp=i;
			i=0;
			if(liczba_dni_w_miesiacu==31 && first_month!=8)liczba_dni_w_miesiacu=30;
			else liczba_dni_w_miesiacu=31;
			if(first_month==2 && rok_temp%4==0 && rok_temp%100!=0)liczba_dni_w_miesiacu=29;
            else if(first_month==2){
                    liczba_dni_w_miesiacu=28;
                    if(rok_temp%400==0)liczba_dni_w_miesiacu++;
            }

            if(first_month==13){
                rok_temp++;
                first_month=1;
				liczba_dni_w_miesiacu=31;
            }
		}
		
	}
	
	
	var liczba;
	
	function flink() 		{window.location.href = "panel_BETA.php";}
	

	
	function link() 		{window.location.href = "panel_BETA.php";}
		
		// Handle Loaded Imports
	function handleLoad(event) {
	console.log('Loaded import: ' + event.target.href);
		//document.write('udalosie');
	}
		 
		// Handle Errors.
	function handleError(event) {
	console.log('Error loading import: ' + event.target.href);
		//document.write('nie udal osie ' + event.target.href);
	}

	function daty(){
		var mies_s;
		var d_s="";
		var d_ss="";
		
		if(dzien-i+1<10)		d_s="0";
		if (dzien-i+7<10)	d_ss="0";
		if(mies<10)			mies_s="0"+mies;
		else 						mies_s=mies;
		
		document.getElementById("miesiac1").innerHTML =miesiac;
		document.getElementById("tydz").innerHTML =tydzien+" ("+d_s+(dzien-i+1)+"."+mies_s+" - "+d_ss+(dzien-i+7)+"."+mies_s+")";
	}
	
	function change_gaz(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
		document.getElementById("nazwa_gazety").innerHTML = 'MAŁY GOŚĆ NIEDZIELNY';
		}
		};
		xhttp.open("GET", "panel_Beta.php?name_gaz=MAŁY+GOŚĆ+NIEDZIELNY", true);
		xhttp.send();
		
	}

	//DRUKOWANIE
	//DZiałające ale bez gazety:
	/*var elem;
	
	function PrintElem(elem)
{
   Popup($(elem).html());
}

function Popup(data) 
{
   var mywindow = window.open("", "to_print", "height=500,width=600");
   var html = "<html><head><title></title>	<link href='CSS/panel_styles_BETA.css' rel='stylesheet' type='text/css'></head>"+
   "<body style='background-color:white; max-width:900px;' onload='setTimeout(window.focus() window.print() window.close(),10000)'><div id='resultt'>"+
   data+
   "</div><div class='dottedline'></div></body></html>";

   mywindow.document.write(html);
   mywindow.print();
   mywindow.document.close();
   return true;					
}*/
	
	
	var elem;
	
	function PrintElem(elem,el2)
{
	var gazeta = document.getElementById("nazwa_gazety").innerHTML;
   Popup($(elem).html(),gazeta);
}

function Popup(data,data2) 
{
   var mywindow = window.open("", "to_print", "height=500,width=600");
   var html = "<html><head><title></title>	<link href='CSS/panel_styles_BETA.css' rel='stylesheet' type='text/css'></head>"+
   "<body style='background-color:white; max-width:900px;' onload='setTimeout(window.focus() window.print() window.close(),10000)'><div id='resultt'><br/>"+
   data2+
   "<br/><br/>"+
   data+
   "</div><div class='dottedline'></div></body></html>";

   mywindow.document.write(html);
   mywindow.print();
   mywindow.document.close();
   return true;					
}