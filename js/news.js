const buttons = document.querySelectorAll('.news h4');

[].forEach.call(buttons, function(button) {
  button.addEventListener('click', function() {
    const submenu = button.parentNode.querySelector('[class="info"]');
    submenu.classList.toggle('open');
  });
});
fetch('http://localhost/webfinal/image.json')
.then(response => response.json())
.then(data => {
    var arr=document.querySelectorAll(".info");
    var c=0;
    for(var i=0;i<arr.length;i++){
    	arr[i].innerHTML=data.news[c];
    	c++;
    }

})
.catch(error => console.error(error))