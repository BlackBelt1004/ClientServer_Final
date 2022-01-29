"use strict";

//alphabet variable for shifting (doesn't change)
const alphabet = 
['A','B','C','D','E','F','G',
'H','I','J','K','L','M','N','O','P','Q','R','S',
'T','U','V','W','X','Y', 'Z' ];

const form = document.forms[0];
const output = document.getElementById('output').value;
const original = document.getElementById("userInput").value;

form.addEventListener ('submit', event=>{
    event.preventDefault();
    //user input string
    let cipherText = form.userInput.value;
    //convert string to an array
    let cipherArray = cipherText.split("");
    let encryptText = cipherArray.map(char=>encrypt(char)).join('')
    document.getElementById('output').innerHTML = encryptText;
});

function encrypt(char){
    const shift = -1;
    if (alphabet.includes(char.toUpperCase())){
        const position = 
        alphabet.indexOf(char.toUpperCase());
            const newPosition = (position + shift);
            return alphabet[newPosition]
    }
    else{return char}
}