function angka(num) {
    return num/2
}
let n = 69;
let a
let b

console.log("Angka : "+ n)
console.log("Hasil : ")

if (n%2 == 0) {
    a = angka(n)
    b = angka(n)
} else {
    a = angka(n) + 0.5
    b = angka(n) - 0.5
}

console.log("Jumlah Bilangan Ganjil : " + a)
console.log("Jumlah Bilangan Genap : " + b)
