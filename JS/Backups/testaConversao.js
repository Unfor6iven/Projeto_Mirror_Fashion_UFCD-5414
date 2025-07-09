var formatado = numeroParaReal(9.9);
var numero = realParaNumero("R$ 120,35");

// console.log(formatado);
// console.log(numero);

if(formatado == "R$ 9,90") {
    console.log("Conversão da moeda foi feita corretamente!")
}
else {
    console.log("A conversão da moeda está com problemas!")
}