function prime(){
                
                var num = document.getElementById('no1').value;
                var c = 0;
 
                
                for (i = 1; i <= num; i++) {
                    
                    if (num % i == 0) {
                       
                        c = c + 1;
                    }
                }
                if (c == 2) {
                    document.getElementById('result').innerHTML = num + ' is a Prime number';
                }
				else{
                    document.getElementById('result').innerHTML = num + ' is NOT a Prime number';
                }
            }        