



















// --- --- --- --- --- --- EXEMPLOS --- --- --- --- --- ---

// --- --- ---

// new

// --- --- ---

// Criar um Array

// var pessoas = ["João", "José", "Maria", "Sebastião", "António"];

// for (var i = 0; i < pessoas.length; i++) {
//     if (pessoas[i].length === 4) {
//         console.log(pessoas[i]);
//     }
// }

// pessoas.forEach(function (nome) {
//     if (nome.lenght === 4)
//         console.log(nome);
// });

// pessoas.forEach(nome => {
//     if (nome.lenght === 4)
//         console.log(nome);
// });

// var nomesCom4Letras = pessoas.filter(function (nome) {
//     return nome.lenght === 4;
// });
// console.log(nomesCom4Letras);

// var nomesCom4Letras = pessoas.filter(nome => nome.lenght === 4);
// console.log(nomesCom4Letras)

// --- --- ---

// var n = 100;
// var soma2 = (n * (n + 1)) / 2;

// console.log("A soma de 1 até 100 é:", soma2);

// --- --- ---

// var soma = 0;
// for (var i = 1; i <= 100; i++) {
//     soma += i;
// }

// console.log("A soma de 1 até 100 é:", soma);

// --- --- ---

// var i = 1;
// var impares = [];

// while (i <= 10) {
//     if (i % 2 !== 0) {
//         impares.push(i);
//     }
    
//         i++;
// }

// console.log(impares);

// --- --- ---

// for (var i = 1; i <= 10; i++) {
//     if (i % 2 !== 0) {
//         console.log(i);
//     }
// }

// --- --- ---

// var i = 1;
//
// while (i <= 10) {
//     if (i % 2 !== 0) {
//         console.log(i);
//         i++
//     }
// }

// --- --- ---

// var num1 = 2;
// var num2 = 3;
// var nome = "Pedro";

// O que é que é mostrado?
// console.log(num1 + nome + num2);

// O que é que é mostrado?
// console.log(num1 + num2 + nome);

// O que é que é mostrado?
// console.log(nome + num1 + num2);

// O que é que é mostrado?
// console.log(nome + (num1 + num2));

// O que é que é mostrado?
// console.log(nome + num1 * num2);

// ASI: Automatic Semicolon Insertion


// console.log(10-"curso");
// NaN --> Not a Number

// var resultado = 10 - "5"; // NaN
// isNaN(resultado)