function kembalian (harga,uang){
 
 var limapuluh = 0
 var duapuluh = 0
 var sepuluh = 0
 var lima = 0

    while (uang > harga){
       
         output= uang - harga
             if (harga > 200000){
             var  cashback = harga * 10/100
             output +=cashback
            }
   
             if(output > 50000){
                output -= 50000
                 limapuluh += 1
            }
            if(output > 20000){
               output -= 20000
                duapuluh += 1
            }
            if(output > 10000){
              output -= 10000
               sepuluh += 1
            }
            if(output > 5000){
             output -= 5000
               lima += 1
            }
            if(output < 5000){
              break;
            }
    }
 console.log("kembalian");
 console.log(limapuluh+"x"+"50.000");
 console.log(duapuluh + "x"+"20.000");
 console.log(sepuluh +"x"+"10.000");
 console.log(lima+"x"+"5.000");
console.log(output+" di sumbangkan karena tidak ada pecahan dibawah 5000")
}

     
kembalian(235000,250000);
kembalian(240000,250000);