function validation() {

	var register = document.forms.register;
	var name = document.forms.register.name.value;
	var surname = document.forms.register.surname.value;
	var photo = document.forms.register.photo.value;
	var email = document.forms.register.email.value;
	var password = document.forms.register.password.value;
	var conpassword = document.forms.register.conpassword.value;

	var vname;
	var vsurname;
	var vphoto;
	var vemail;
	var vpassword;
	var vconpassword;
	
	vname = vsurname = vemail = vpassword = vconpassword = false;
	
	if(name.length<2){
		var nameMes = document.getElementById("nameMes");
		nameMes.innerHTML = "Please enter your name!";
		nameMes.style.display = "initial";
	}
	else{
		vname = true;
		var nameMes = document.getElementById("nameMes");
		nameMes.style.display = "none";
	}
	
	if(surname.length<2){
		var surMes = document.getElementById("surMes");
		surMes.innerHTML = "Please enter your surname!";
		surMes.style.display = "initial";
	}
	else{
		vsurname = true;
		var surMes = document.getElementById("surMes");
		surMes.style.display = "none";
	}
	
	if(photo==""){
		var phoMes = document.getElementById("phoMes");
		phoMes.innerHTML = "Please choose a valid image!";
		phoMes.style.display = "initial";
	}
	else{
		vphoto = true;
		var phoMes = document.getElementById("phoMes");
		phoMes.style.display = "none";
	}

	if(password.length<6){
		var pasMes = document.getElementById("pasMes");
		pasMes.innerHTML = "Password length must be grater than 5!";
		pasMes.style.display = "initial";
	}
	else{
		vpassword = true;
		var pasMes = document.getElementById("pasMes");
		pasMes.style.display = "none";
	}
	
	if(conpassword!==password){
		var conMes = document.getElementById("conMes");
		conMes.innerHTML = "Password doese not match!";
		conMes.style.display = "initial";
	}
	else{
		vconpassword = true;
		var conMes = document.getElementById("conMes");
		conMes.style.display = "none";
	}
	
	if(vname==false || vsurname==false || vpassword==false || vconpassword==false){
		return false;
	}
	else{
		return true;
	}
}