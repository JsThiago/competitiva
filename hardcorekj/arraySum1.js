
function arrayCompare(vector1,vector2){
    var i = 0;
    var j = 0;
    if(vector1.length !== vector2.length){
        return false;
    }
    while(i<vector1.length && j<vector2.length){
        if(vector1[i]===vector2[j]){
            j++;
            i=0;
        }else{
            i++;
        }
        
    }
    if(i===vector1.length){
        return false;
    }
    return true;
}


var sequences = [];
function findSum(vector, value)
{
    var equal = false
    for(var s = 0; s<sequences.length;s++){
        if(arrayCompare(sequences[s],vector)){
            equal = true;
            break;
        }
    }
    if(equal || (vector.length ===1 && vector[0]!==value)){
        return 0;
    }
    for (var i = 0; i < vector.length; i++) {
        
        var sum = vector[i];
        var aux = [vector[i]];
        var index = [i];
        for (var j = i; j < vector.length; j++) {
            if (i !== j) {
                
                sum = sum + vector[j];
                aux[aux.length] = vector[j];
            }
            if (sum === value) {
                var equal = false;
                if(sequences.length===0){
                    sequences[sequences.length] = [...aux];
                }
                for(var s = 0; s<sequences.length;s++){
                    if(arrayCompare(sequences[s],aux)){
                        equal = true;
                        break;
                    }
                }
                if(!equal){
                    sequences[sequences.length] = [...aux];
                }
                
               // aux.pop();
               // sum = sum - vector[j];
            }
            if (sum > value) {
                for (var k = j-1; k >= 0; k--) {
                    
                    
                    var vectorIndex = [...aux];
                    vectorIndex.splice(k,1);
                    findSum(vectorIndex, value);
                }
            }
        }
        if(sum<value){
            break;
        }
    }
    return 0;
}




console.time("app");
var vetor = [2, 3, 4, 5, 6, 5,9,1,1,2,8,0];
findSum(vetor, 10);
console.timeEnd("app");
console.log(sequences);
