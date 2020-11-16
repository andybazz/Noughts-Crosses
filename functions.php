<script> 

let count = 0;

function fill() {

	if (count % 2 == 0 ) {
		document.getElementById("clickFill").innerHTML = 'X';
		count++
			document.getElementById('countButton').innerHTML = count;
			document.getElementById("clickFill").id = 'filled';

	}
	else {
		document.getElementById("clickFill").innerHTML = 'O';
		count++
			document.getElementById('countButton').innerHTML = count;

	}
}

function showCount() {
	return updatedCount
}

function reset() {
	count = 0
	document.getElementById('countButton').innerHTML = count;
}


</script>
