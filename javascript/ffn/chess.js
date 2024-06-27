let size = 8;
for (let row = 0; row < size; row++){
	let boardRow = '';
	for (let col = 0; col < size; col++){
		if ((row + col) % 2 == 0){
			boardRow += ' ';
		}
		else{
			boardRow += '#'
		}
	}
	console.log(boardRow);
}
