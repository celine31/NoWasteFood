var a:string='coucou';

function isPair(nombre:number):number{
    return nombre % 2
}

console.log(isPair(4));

function salut(t:Array<string>):void{
  let out=[];
  for (let item of t){
      out.push('salut' + item)
  }
  
}

