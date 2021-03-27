function check(key,string){
    var arrKeys = key.length;
    var match = false;
    var benar;
    for(i=0; i < arrKeys; i++ ){
        benar=new RegExp(key[i]);
        if(benar.test(string))
           match = true;
    }
    return match;
}

string = "dumbways";

var key = ['dumb','ways','the','best'];

console.log(key[0]+"=>"+check(key[0],string))
console.log(key[1]+"=>"+check(key[1],string))
console.log(key[2]+"=>"+check(key[2],string))
console.log(key[3]+"=>"+check(+key[3],string))