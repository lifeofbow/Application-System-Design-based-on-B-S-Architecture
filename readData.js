var xmlHttp
function showUser()
{ 
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	}
	var url="http://localhost/RFID/readData.php"
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

function stateChanged() 
{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{ 
		var a=xmlHttp.responseText
		var b=a.split("   ");
		var data = [];
		for(var i=0;i<b.length;i++){
			var c=b[i].split("  ");
			if(c.length==4){
				data.push(c);
			}
		}
		
		var table = $('#example').DataTable({data:data});

		$('#example tbody').on( 'click', 'tr', function () {
			if ( $(this).hasClass('selected') ) {
				$(this).removeClass('selected');
			}
			else {
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
			}
		} );

		$('#button').click( function () {
			table.row('.selected').remove().draw( false );
		} );

	} 
}

function GetXmlHttpObject(){
	var xmlHttp=null;
	try
	{
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
}
catch (e)
{
 //Internet Explorer
 try
 {
 	xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
 }
 catch (e)
 {
 	xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
}
return xmlHttp;
}

$("[href='#user_manage']").click(showUser());

