var boxHaru= document.getElementById('nav-bar');
	window.addEventListener('scroll',function(e){
		console.log(window.scrollY);
		if (window.scrollY>80){
			boxHaru.style.boxShadow=" 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)"
		}
		else{
			boxHaru.style.boxShadow="0 0 0 0"
		}
	});