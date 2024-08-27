//11. Scope of Variables

function scopeExample() {
    var localVar = 'I am local'; // Local scope
    globalVar = 'I am global'; // Global scope (without var, let, or const)
    console.log(localVar);
}

scopeExample();
console.log(globalVar); // Accessible, but localVar is not

//output
I am local
I am global