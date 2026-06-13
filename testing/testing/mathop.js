function add(a,b){
    return(a+b)
}

function sub(a,b){
    return(a-b)
}

function multi(a,b){
    return(a*b)
}

function devide(a,b){
    if(b===0){
        console.log("cant devide over 0")
    }
    else{
        return(a/b)
    }
}

module.exports = {
    add,
    sub,
    devide,
    multi
};