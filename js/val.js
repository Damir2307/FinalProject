function valid() {
  var x = document.forms["vform"]["email"].value;
  var y = document.forms["vform"]["ps1"].value;
  if (x == "") {
    var a=document.getElementById("valide");
    a.innerHTML="Email must be filled out";
    document.getElementById("valide").classList.add('noviy1');
    return false;
  }
  if (y == "") {
    var a=document.getElementById("validp");
    a.innerHTML="Password must be filled out";
    document.getElementById("validp").classList.add('noviy1');
    return false;
  }
}