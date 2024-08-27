//7. Day of the Week and Food Menu with Switch

let day = new Date().getDay();
let menu = '';

switch (day) {
    case 0: menu = 'Sunday: Pancakes'; break;
    case 1: menu = 'Monday: Pasta'; break;
    case 2: menu = 'Tuesday: Tacos'; break;
    case 3: menu = 'Wednesday: Pizza'; break;
    case 4: menu = 'Thursday: Burgers'; break;
    case 5: menu = 'Friday: Sushi'; break;
    case 6: menu = 'Saturday: BBQ'; break;
}

console.log(menu); // Output depends on the current day

//output
Tuesday: Tacos