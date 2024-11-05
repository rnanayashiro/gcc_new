function selectCbox(param,f_name) {

	f_name = f_name + "[]";
	//var checkbox = document.main_form.elements[f_name];
	var checkbox = document.toi_form.elements[f_name];

	var str_array = param.split(" ");
	var i=0;
	var j=0;

	for(i=0; i<checkbox.length; i++) {

		j = 0;
		for(j=0; j<str_array.length; j++){

			if(checkbox[i].value == str_array[j]) {
				checkbox[i].checked = true;
			}
		}
	}

}

function selectRbox(param,f_name) {

	//var radio = document.main_form.elements[f_name];
	var radio = document.toi_form.elements[f_name];

	var i=0;

	for(i=0; i<radio.length; i++) {
		if(radio[i].value == param) {
			radio[i].checked = true;
			break;
		}
	}

}

function selectSbox(param,f_name) {

	//var selector = document.main_form.elements[f_name];
	var selector = document.toi_form.elements[f_name];

	var i=0;

	for(i=0; i<selector.length; i++) {
		if(selector.options[i].value == param) {
			selector.options[i].selected = true;
			break;
		}
	}
}
