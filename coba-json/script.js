
//stringify => object to json
// let mahasiswa = {
//     nama : "Erika Nurhasnah",
//     nrp : "2217020014",
//     email : "erikanurhasnah2609@gmail.com"
// }
// console.log(JSON.stringify(mahasiswa));



//parse => json to object => bisa disimpan bisa ditampilkan
// let tes = new XMLHttpRequest();
// tes.onreadystatechange= function(){
//     let mahasiswa = JSON.parse(this.responseText);
//     // parsing ke JSON.parse agar menjadi object
//     if (tes.readyState == 4 && tes.status == 200){
//         console.log(mahasiswa);
//     }
// }

// // bentuk masih string karena belum di JSON.parse()
// tes.open('GET', 'tes.json', true);
// tes.send();


//versi jquery json to object
$.getJSON('tes.json', function(data){
console.log(data);
});