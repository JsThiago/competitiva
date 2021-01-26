//Constantes

var SEQUENCES = []; //Sequencia que a soma dão o valor.
var PASTVECTOR = []; //Vetores já avaliados. 



//Adiciona um novo vetor aos avaliados anteriormente.
function addVerify(vector){
    PASTVECTOR[PASTVECTOR.length] = [...vector.sort((a,b)=>{
        return a-b;
    })] 
}
//verifica se o vetor já foi avaliado anteriormente.
function verify(vector){
    vector = [...vector.sort((a,b)=>{
        return a-b;
    })];
    var equal = false;
    for(var i= 0;i<PASTVECTOR.length;i++){
        for(j=0;j<vector.length;j++){
            if(PASTVECTOR[i].length!==vector.length){
                break;
            }
            if(PASTVECTOR[i][j]!==vector[j]){
                break;
            }
        }
        if(j===vector.length){
            equal = true;
            break;
        }
    }
    return equal;
}


function sumVector(vector){
    var sum = 0;
    for(var i = 0;i<vector.length;i++){
        sum = sum + vector[i];
    }
    return sum;
}






function findSequences(vector,value){
    var vectorSum = sumVector(vector);
    //Se for menor que 10 ou já tiver no vetor de anteriores para a recursão
    if(vectorSum<value || verify(vector)){
        return 0;
    }
    //Adiciona o vetor nos anterioes
    addVerify(vector);
    //Se for igual adiciona nas sequencias que dão o valor somados.
    //Pode parar a recursão pois com 1 a menos vai dar menor que o valor esperado.
    //à menos de 0 mas o 0 é tratado na recursão anterior
    if(vectorSum === value){
        SEQUENCES[SEQUENCES.length] = [...vector];
        return 0;
    }
    //Vai chamando sempre a função com 1 à menos
    for(var i = vector.length-1;i>=0;i-- ){
        var aux = [...vector];
        aux.splice(i,1);
        findSequences(aux,value);
    }
}

console.time("app");
findSequences([2,3,4,5,6,5],10);
console.timeEnd("app");
console.log(SEQUENCES);