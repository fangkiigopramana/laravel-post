const score =  document.getElementById('score');
const tugas =  document.getElementById('tugas');
const putaran =  document.getElementById('putaran');
const pilihanTugas = ['atas','kanan','bawah','kiri'];

var deg = 90;
var posisiPutaran = 0;
var posisiBenar = 0;
var nilai = 0

function randomRange(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

function acakTugas() {
    posisiBenar = randomRange(0 ,3)
    if (posisiPutaran == posisiBenar) {
        acakTugas()
    };
    tugas.innerHTML = pilihanTugas[posisiBenar];
}

function resetPutaran() {
    if (posisiPutaran == 4) {
        posisiPutaran = 0;
    } else if (posisiPutaran == -1){
        posisiPutaran = 3;
    }
}

function apakahBenar() {
    if (posisiPutaran == posisiBenar) {
        nilai += 1 ;
        score.innerHTML = 'Score ' + nilai;
        acakTugas();
    }
}

function rotate(clicked) {
    if (clicked == 'kiri') {
        deg -= 90; posisiPutaran -= 1;
    } else {
        deg += 90; posisiPutaran += 1;
    }

    resetPutaran();
    putaran.style.transform = "rotate(" + deg + "deg)";
    apakahBenar()
}

function init(){
    acakTugas();
    score.innerHTML = "Score " + nilai;
    putaran.style.transform = "rotate(" + deg + "deg)";
}

init();