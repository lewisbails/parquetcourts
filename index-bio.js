document.querySelectorAll('.card').forEach( (card) => card.addEventListener( 'click', function() {
  card.classList.toggle('is-flipped');
}))

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