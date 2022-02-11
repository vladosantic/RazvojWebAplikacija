function funkcija(value){
	if(value == "jeftino"){
		var sortiranje = document.getElementById('proizvodi').children;
		sortiranje = Array.prototype.slice.call(sortiranje, 0);
		var pom;
		for (var i = 0; i < sortiranje.length - 1; i++){
		for(var j = 0; j < sortiranje.length - 1 - i; j++){
			if(sortiranje[j].querySelector('h5').innerHTML.slice(26,31) > sortiranje[j+1].querySelector('h5').innerHTML.slice(26,31)){
				pom = sortiranje[j];
				sortiranje[j] = sortiranje[j+1];
				sortiranje[j+1] = pom;
			} 
		}
	}
		var parent = document.getElementById('proizvodi');
		parent.innerHTML = " ";
		for(i = 0; i < sortiranje.length; i++){
			parent.appendChild(sortiranje[i]);
		}
	}
	else if(value == "skupo"){
		var sortiranje = document.getElementById('proizvodi').children;
		sortiranje = Array.prototype.slice.call(sortiranje, 0);
		var pom;
		for (var i = 0; i < sortiranje.length - 1; i++){
		for(var j = 0; j < sortiranje.length - 1 - i; j++){
			if(sortiranje[j].querySelector('h5').innerHTML.slice(26,31) < sortiranje[j+1].querySelector('h5').innerHTML.slice(26,31)){
				pom = sortiranje[j];
				sortiranje[j] = sortiranje[j+1];
				sortiranje[j+1] = pom;
			} 
		}
	}
		var parent = document.getElementById('proizvodi');
		parent.innerHTML = " ";
		for(i = 0; i < sortiranje.length; i++){
			parent.appendChild(sortiranje[i]);
		}
	}
	else if(value == "abecednoza"){
		var sortiranje = document.getElementById('proizvodi').children;
		sortiranje = Array.prototype.slice.call(sortiranje, 0);
		var pom;
		for (var i = 0; i < sortiranje.length - 1; i++){
		for(var j = 0; j < sortiranje.length - 1 - i; j++){
			if(sortiranje[j].querySelector('h3').innerHTML < sortiranje[j+1].querySelector('h3').innerHTML){
				pom = sortiranje[j];
				sortiranje[j] = sortiranje[j+1];
				sortiranje[j+1] = pom;
			} 
		}
	}
		var parent = document.getElementById('proizvodi');
		parent.innerHTML = " ";
		for(i = 0; i < sortiranje.length; i++){
			parent.appendChild(sortiranje[i]);
		}
	}
	else if(value == "abecednoaz"){
		var sortiranje = document.getElementById('proizvodi').children;
		sortiranje = Array.prototype.slice.call(sortiranje, 0);
		var pom;
		for (var i = 0; i < sortiranje.length - 1; i++){
		for(var j = 0; j < sortiranje.length - 1 - i; j++){
			if(sortiranje[j].querySelector('h3').innerHTML > sortiranje[j+1].querySelector('h3').innerHTML){
				pom = sortiranje[j];
				sortiranje[j] = sortiranje[j+1];
				sortiranje[j+1] = pom;
			} 
		}
	}
		var parent = document.getElementById('proizvodi');
		parent.innerHTML = " ";
		for(i = 0; i < sortiranje.length; i++){
			parent.appendChild(sortiranje[i]);
		}
	}
}