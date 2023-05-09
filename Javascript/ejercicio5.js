
function buscarA(Obj){
var a = Obj.getElementsByTagName('a')
var cant = 0
for(var i=0; i<a.length; i++) {
    cant++
   }

console.log(cant)
}


function buscarP(){
var p = document.getElementsByTagName('p')
var cantP = 0

for(var j=0;j<p.length;j++) {
    cantP++
    if (cantP==3){
        buscarA(p[j])
    }
    
}

}

buscarA(document)
buscarP()