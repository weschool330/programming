const add = require("./mathop");

let result = add(2,3);
let expect = 2;

if(result === expect){
    console.log("test pass")
}
else{
    console.log("test fail")
}