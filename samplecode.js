
2
3
var sum = 0;
 
var arr = [ 1, 2, 3, 4, 5 ];
Then this:

1
2
3
4
5
for ( var i = 0, l = arr.length; i < l; i++ ) {
    sum += arr[ i ];
}
 
console.log( sum ); // 15
Can be replaced with this:

1
2
3
4
5
$.each( arr, function( index, value ){
    sum += value;
});
 
console.log( sum ); // 15
