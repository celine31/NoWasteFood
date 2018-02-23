var a = 'coucou';
function isPair(nombre) {
    return nombre % 2;
}
console.log(isPair(4));
function salut(t) {
    var out = [];
    for (var _i = 0, t_1 = t; _i < t_1.length; _i++) {
        var item = t_1[_i];
        out.push('salut' + item);
    }
}
