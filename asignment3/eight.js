//8. Sum of First n Natural Numbers

let n = 5;
let sum = 0;

// Using for loop
for (let i = 1; i <= n; i++) {
    sum += i;
}
console.log(sum); 

// Output: 15

// Using while loop
sum = 0;
let i = 1;
while (i <= n) {
    sum += i;
    i++;
}
console.log(sum); 

// Output: 15
