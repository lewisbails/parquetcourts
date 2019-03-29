var mailingList = [];

const validate = (email) => {
    const expression = /(?!.*\.{2})^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return expression.test(String(email).toLowerCase())
}

document.querySelectorAll('.card').forEach( (card) => card.addEventListener( 'click', function() {
  card.classList.toggle('is-flipped');
}));

document.querySelectorAll('.btn').forEach( (button) => button.addEventListener('click',logEmail));
document.querySelector('input').addEventListener('keydown',logEmail);

var events = ['click', 'focus'];

events.forEach((e) => document.querySelector('input').addEventListener(e,function(){
  	document.querySelector('label').innerHTML = 'Join our mailing list...';
  }
));

function changeParentHeight() {
  let getChildHeight = $(".bio-image").outerHeight();
  // $(".scene").css("height", getChildHeight);
  $(".card").css("height", getChildHeight);

}

$(function() {
  changeParentHeight();
  $(window).on("resize", function() {
    changeParentHeight();
  });
});

function logEmail(event){
	if (event instanceof KeyboardEvent && event.keyCode!=13){
		return;
	}
	var email = document.querySelector('input').value;
	if (validate(email)){
		if (mailingList.indexOf(email)==-1){
			document.querySelector('label').innerHTML = 'Welcome aboard.';
			mailingList.push(email);
		}
		else {
			document.querySelector('label').innerHTML = 'We\'ve seen you before!';
		}
		document.querySelector('input').value = '';
		console.log(mailingList);
	}
	else{
		document.querySelector('label').innerHTML = 'Join our mailing list...';
		alert("Please enter a valid email to join the mailing list.");
	}
	event.preventDefault();
}
