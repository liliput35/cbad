//get current date and time
var timeElement = document.getElementById("timeSpan") ; 
var dateElement = document.getElementById("dateSpan") ;


var today = new Date() ; 

var day = today.getDay() ; 

var dayList = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"] ; 

var dd = today.getDate() < 10 ? '0' + today.getDate() : today.getDate() ; 

var mm = today.getMonth() + 1 < 10 ? '0' + (today.getMonth() + 1) : (today.getMonth() + 1); 

var yyyy = today.getFullYear() ; 

var hour = today.getHours() ; 
var minutes = today.getMinutes() ; 
var seconds = today.getSeconds() ; 

var prepand = (hour >= 12) ? " PM" : " AM" ;

if(hour > 12){ 
    hour -= 12 ;
}

var finalDate = dayList[day] + ", " + mm + "/" + dd + "/" + yyyy ; 
var finalTime = hour + ":" + minutes + ":" + seconds + prepand ; 

timeElement.innerHTML = finalTime + "" ;


console.log( "Today is " + dayList[day] + ", " + mm + "/" + dd + "/" + yyyy) ; 
console.log("It is " + hour + ":" + minutes + ":" + seconds + prepand) ;