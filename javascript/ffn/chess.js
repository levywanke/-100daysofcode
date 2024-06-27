#!/usr/bin/env node
//defines the size of the chessboard = 8
let size = 8;
//main loop having row and column
for (let row = 0; row < size; row++){
	//declare a boardrow
	let boardRow = '';
	//declare column
	for (let col = 0; col < size; col++){
		//use conditional if....else
		if ((row + col) % 2 == 0){
			boardRow += ' ';
		}
		else{
			boardRow += '#'
		}
	}
	//output using console.log command
	console.log(boardRow);
}
