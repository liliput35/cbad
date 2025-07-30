 var nameElement = document.getElementById("name-element") ; 
var inputEl = document.getElementById("input-element") ;

function replaceText(){ 
    nameElement.innerHTML = inputEl.value ;
}





var dateElement = document.getElementById("date-element") ;
var timeElement = document.getElementById("time-element") ;

var today = new Date() ;



var minutes = today.getMinutes() ; 
if(minutes < 10){ 
    minutes = '0' + minutes ;
}
console.log(minutes) ; 

var seconds = today.getSeconds() ; 
console.log(seconds) ;  

var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Friday", "Saturday"]

var day = today.getDay() ; 
console.log(days[day]) ;  

var month = (today.getMonth()) + 1 ; 
console.log(month) ; 

var date = today.getDate() ; 
console.log(date) ; 

var year = today.getFullYear() ; 
console.log(year) ;  

var hours = (today.getHours() > 12) ? (today.getHours() - 12) : today.getHours(); 
console.log(hours) ; 

var prepand = "AM" ; 

if(today.getHours() > 12){ 
    prepand = "PM"
}

console.log(prepand) ; 


var finalTime = hours + ':' + minutes + ':' + seconds + ' ' + prepand ; 
console.log(finalTime)

var finalDate = days[day] + ' ' + month + '/' + date + '/' + year ;
console.log(finalDate)


dateElement.innerHTML = finalDate ; 
timeElement.innerHTML = finalTime ;