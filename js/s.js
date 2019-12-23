fetch('http://localhost/webfinal/image.json')
.then(response => response.json())
.then(data => {
    var a = document.getElementById('prezident');
    a.innerHTML = data.image;
    var m = document.getElementById('suretpr');
    m.style = 'width: 150px;margin-bottom:-5px;';

})
.catch(error => console.error(error))

var teachers={m1:"Жумадилов Ержан Есетович",m2:"Тлеукин Нурлан Ермекович",m3:"Саматов Абылай Маранұлы",m4:"Тусюбжанов Айдын Болатович",m5:"Cristiano Ronaldo",m6:"Ахмет Гази Чолак",m7:"Messi",m8:"Basta",nine:"Bilie Eilish"};
var arr=document.querySelectorAll(".mugalimder");
var c=0;
for(var i=0;i<arr.length;i++){
	c++;
	var d="m"+c;
	arr[i].innerHTML=teachers[d];

}

var today=new Date();
document.getElementById("uakit").innerHTML=today;
