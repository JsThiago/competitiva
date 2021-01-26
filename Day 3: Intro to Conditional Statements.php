<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

if($N%2!==0){
    print("Weird");
}else if($N%2==0 && ($N>2 && $N<5)){
    print("Not Weird");

}else if($N%2==0 && $N>2 && $N<5){
    print("Weird");
}else if($N%2 === 0 && $N>20){
    print("Not Weird");
}


fclose($stdin);
