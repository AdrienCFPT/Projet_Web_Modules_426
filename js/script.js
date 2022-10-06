let img = document.getElementById('imgCh');
const selectedYear=document.getElementById('winYear');
let winnerImg=document.getElementById('winnerImg');
// let selectYear2018 = document.getElementById('2018');
// let selectYear2014 = document.getElementById('2014');
// let selectYear2010 = document.getElementById('2010');
// let selectYear2006 = document.getElementById('2006');
// let selectYear2002 = document.getElementById('2002');
selectedYear.addEventListener("change", selectedYearChange)

function selectedYearChange(){
if(selectedYear.value=="2018"){
    winnerImg.src="./img/france_cdm.jpg";
}
else if(selectedYear.value==="2014"){
    
    winnerImg.src="./img/germany_cdm-2014.jpg";
}
else if(selectedYear.value=="2010"){
    winnerImg.src="./img/spain_cdm-2014.jpg";
}
else if(selectedYear.value=="2006"){
    winnerImg.src="./img/italy_cdm-2006.jpg";
}
else if(selectedYear.value=="2002"){
    winnerImg.src="./img/brazil_cdm-2002.jpg";
}
}
