function reverseString(str) {
 return str.split('').reverse().join('');

}
// document.getElementsById('no3').innerHTML = reverseString("hello")
console.log(reverseString('hello'));


function balikKata(kata) {
  var kalimat = '';
  for (var i = kata.length-1; i >= 0; i--) {
    kalimat = kalimat + kata[i];
  }
  
  return kalimat;
}

console.log(balikKata('hello'))