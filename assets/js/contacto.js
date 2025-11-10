console.log("entro")

// RECOGEMOS VARIABLES
const num1 = document.getElementById("num1")
const num2 = document.getElementById("num2")
const respSistem = document.getElementById("respSystem")

let numRnd1 = (Number)(Math.floor(Math.random() * 10))
let numRnd2 = (Number)(Math.floor(Math.random() * 10))
let total= numRnd1 + numRnd2

num1.innerText = numRnd1
num2.innerText = numRnd2
respSistem.value = total