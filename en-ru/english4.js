
var arr;
var english;
var russian;
var id;
var right = 0; //количество правильных ответов
var wrong = 0; //количество неправильных ответов


var request = new XMLHttpRequest();

function EnglishWord(){

    request.onreadystatechange = function () {
	    
		if(request.readyState == 4 && request.status == 200){
		arr = JSON.parse(request.responseText);
		english = arr[0];
		russian = arr[1];
		id = arr[2];
        document.querySelector('#message').innerHTML = english;
        document.getElementById('p1').innerHTML = 'Количество слов в базе: '+id;
        document.getElementById('i').innerHTML = 'Использовано слов: '+right;
        document.getElementById('right').innerHTML = 'Количество правильных ответов: '+right;
        document.getElementById('wrong').innerHTML = 'Неправильных ответов: '+wrong;
        if((right+wrong)!==0){document.getElementById('percent').innerHTML = 'Процент правильных ответов: '+Math.floor((right/(right+wrong))*100)+'%';
        }
      }
    }
request.open('GET','english4.php');
request.send();
}      

document.querySelector('#userinput').addEventListener('keydown',function(e){
	if(e.keyCode===13){ 
       onEnter();
    }
}); //обработчик события по нажатию клавиши Enter
 

function onEnter() {
	
	
	var userinput = document.getElementById('userinput').value; //слово в поле ввода
		if (russian == userinput) {
        document.getElementById('message').innerHTML = english+' - '+russian+' Правильно '; right++; 
        setTimeout(EnglishWord, 1000); 
        document.getElementById('userinput').value = ''; 
        
    }  
    else {
    	document.getElementById('message').innerHTML = 'Неправильно, '+ english+' - '+russian; 
    	 wrong++; document.getElementById('wrong').innerHTML = 'Неправильных ответов: '+wrong;
    }
}

// функции таймера

function starttimer(){
    window.timerId = window.setInterval(timer,1000);
    }

   var i = 0;
   function timer(){
    document.getElementById('timer').innerHTML = 'Таймер: '+i;
    i++;
   }
function stoptimer(){
    window.clearInterval(window.timerId);
}

