function generateFibonacci(limit){
    var fibseries = [0,1];
    for(var i=2;i<limit;i++){
     fibseries[i]=fibseries[i-1]+fibseries[i-2];
    }

  return fibseries;  
}

function printFibonacci(){
limit=10;
 const FibonacciContainer=document.getElementById("fibonacci");
 const fibonacci=generateFibonacci(limit);

FibonacciContainer.textContent=fibonacci.join(",");

}

printFibonacci();