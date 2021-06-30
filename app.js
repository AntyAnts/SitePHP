window.onload=function(){
document.querySelector('.reg_back_btn').addEventListener("click",function(event){
	location.replace("/");
})
document.querySelector('.form_reg_pass_repeat').addEventListener('change',function(event){
	const pass_repeat = event.target.value
	const pass = document.querySelector('.form_reg_pass').value
	if(pass != pass_repeat && pass == ''){
		console.log('У вас пустой пароль')
		document.querySelector('.form_reg_pass').focus()
		document.querySelector('.reg_btn').disabled = true
	}
	else if (pass != pass_repeat) {
		console.log("Не совпадают пароли")
		document.querySelector('.reg_btn').disabled = true
	}
	else if(pass === pass_repeat  && pass !='' && pass_repeat !=''){
		document.querySelector('.reg_btn').disabled = false
	}

})
document.querySelector('.form_reg_pass').addEventListener('change',function(event){
	const pass = event.target.value
	const pass_repeat = document.querySelector('.form_reg_pass_repeat').value
	if(pass != pass_repeat && pass == ''){
		console.log('У вас пустой пароль')
		document.querySelector('.form_reg_pass').focus()
		document.querySelector('.reg_btn').disabled = true
	}
	else if (pass != pass_repeat) {
		console.log("Не совпадают пароли")
		document.querySelector('.reg_btn').disabled = true
	}
	else if(pass === pass_repeat && pass !='' && pass_repeat !=''){
		document.querySelector('.reg_btn').disabled = false
	}

})
let count = 0
document.querySelector(".form_reg_pass_view").addEventListener("click",function(event){
	if(count % 2 == 0){
		document.querySelector(".form_reg_pass").type = "text"
		document.querySelector(".form_reg_pass_view").src = './pass_closed.png'
	}
	if(count % 2){
		document.querySelector(".form_reg_pass").type = "password"
		document.querySelector(".form_reg_pass_view").src = './pass_view.png'
	}
	console.log(count)
	return count++

})
	
}