// Resultado pretendido: R$ 9,90

var numero = 9.9;
// var formatado = numero.toFixed(2);                                  // "9.90"
// formatado = "R$ " + formatado;                                      // "R$ 9.90"
// formatado = formatado.replace(".", ",");                            // "R$ 9,90"
formatado = "R$ " + numero.toFixed(2).replace(".", ",");            // uma só linha

// console.log(formatado);



// Resultado pretendido: R$ 120.35

var texto = "R$ 120,35";
// var soNumero = texto.replace("R$ ", "");    // "120,35"
// var soNumero = soNumero.replace(",", ".");  // "120.35"
// var valor = parseFloat(soNumero);           // 120.35
var valor = parseFloat(texto.replace("R$ ", "").replace(",", "."));

console.log(texto);
