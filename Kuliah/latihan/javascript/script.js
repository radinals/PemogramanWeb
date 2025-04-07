//
// let list = [ 1, 2, 3, 4, 5, 6 ]
//
// list.forEach(element => {
//     document.writeln(element);
// });

// document.getElementById("A").innerText = "###";
// document.getElementById("A").innerHTML = "###";
//
//

const boxWrapper = document.getElementById("box-container");


for(let i = 0; i < 100; i+=1) {
    const box5 = document.createElement("div");
    box5.classList.add("box");
    boxWrapper.appendChild(box5);
}

const time = new Date();

function helloWorld() {
    alert("Hello");
}

(function foo() {
    alert("HEEEE");
})()


const dayName = new Intl.DateTimeFormat("id-ID", { weekday: "long" }).format(time);
const monthName = new Intl.DateTimeFormat("id-ID", { month: "long" }).format(time);

document.getElementById("tanggal").innerHTML = time.getDate();
document.getElementById("hari").innerHTML = dayName;
document.getElementById("bulan").innerHTML = monthName;
document.getElementById("tahun").innerHTML = time.getFullYear();
