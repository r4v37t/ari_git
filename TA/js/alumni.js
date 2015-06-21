var xmlhttp;

/*barang*/
function nis(id_nis)
{
 document.getElementById("nis").innerHTML="";
 if(id_nis=="")
 {
  alert("Anda Belum Memilih Nomor Induk Siswa");
  return false;
 }
 else
 {
  var url="alumni.php?";
  var post="id_nis="+id_nis;
  ajax(url,post,'nis');
 }
}
/*--------*/

/**Ajax**/
/*out_response*/
function out_response(response)
{
 if(response=="nis")
 {document.getElementById("info").innerHTML=xmlhttp.responseText;}
 else
 {document.getElementById("detail").innerHTML=xmlhttp.responseText;}
}
/*--------*/

/*ajax*/
function ajax(url,post,response)
{
 xmlhttp=GetXmlHttpObject();
 xmlhttp.onreadystatechange=function()
 {
  if(xmlhttp.readyState==4)
  {
   if(xmlhttp.status==200)
   {
    out_response(response);
   }
   else{ajax_fail();}
  }
 }
 xmlhttp.open("POST",url,true);
 xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xmlhttp.send(post);
}
/*--------*/

/*ajax_fail*/
function ajax_fail()
{
 alert("Maaf ada gangguan penerimaan data, silahkan coba lagi atau refresh browser anda.");
 return false;
}
/*--------*/

/*pilih xmlhttp berdasarkan browser*/
function GetXmlHttpObject()
{
 if(window.XMLHttpRequest)
 {
  return new XMLHttpRequest();
 }
 if(window.ActiveXObject)
 {
  return new ActiveXObject("Microsoft.XMLHTTP");
 }
 else
 {alert("Maaf browser anda tidak mendukung ajax.");}
 return false;
}
/*--------*/
/**--------**/
//-->