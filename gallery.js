var mas = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"] // массив картинок
var to = -1;  // Счетчик, указывающий на текущую картинку


function right_arrow() // Открытие следующей картинки(движение вправо)
{ 
 var obj = document.getElementById("img");
  if (to < mas.length-1)  to++;
   else
     to = 0;
     obj.src = mas[to];	 
}

function left_arrow() // Открытие предыдущей картинки(движение влево)
{     
 var obj = document.getElementById("img");
if (to > 0) to--;
  else
    to = mas.length-1;
    obj.src = mas[to];	  			 
}

function setCookie(name, value, expires, path, domain, secure) // Ф-ция создания куки
{
 if (!name || !value) return false;
    var str = name + '=' + encodeURIComponent(value);
        if (expires) str += '; expires=' + expires.toGMTString();
        if (path)    str += '; path=' + path;
        if (domain)  str += '; domain=' + domain;
        if (secure)  str += '; secure';
  document.cookie = str;
  return true;
}
	 
function getCookie(name)   // Ф-ция получения куки
{
  var pattern = "(?:; )?" + name + "=([^;]*);?";
  var regexp  = new RegExp(pattern);	     
    if (regexp.test(document.cookie))
	    return decodeURIComponent(RegExp["$1"]);  
	    return false;
}


function Load()   // Ф-ция загрузки "сохраненной" картинки
{
var cook_val = getCookie("foo");  // Получаем значение куки по имени
 for (var i = 0 ; i < mas.length; i++)
 {
    if (mas[i] == cook_val)   // Как только встретилась
     {
      document.getElementById("img").src = mas[i];   // Загружаем картинку
      to = i;  // Задаем текущее значение счетчику
      break // выходим
     }	
  }		
} 

