/*
	Menu Toggle
*/
const menuToggle = document.querySelector('.toggle');
const showcase = document.querySelector('.showcase');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
})

/*
	Scroll event listener
*/
const onScroll = (elem, listener) => {
  elem.addEventListener('scroll', listener)
}

/*
	Scrolls to an element with header offset
*/
const scrollTo = (elem) => {
  let header = document.select('#header')
  let offset = header.offsetHeight

  if (!header.classList.contains('header-scrolled')) {
    offset -= 16
  }

  let elementPos = document.select(elem).offsetTop
  window.scrollTo({
    top: elementPos - offset,
    behavior: 'smooth'
  })
}

/*
	Dropdown with the search info
*/
function dropdown(){
	document.getElementById("topic-drop-search").classList.toggle("show");
}


/*
	Take input from the search bar and update the list shown for topic selection
	From https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_filter
*/
function searchMatch() {
  var input;
  var inputUpperCase;
  var topics;
  var txtValue;
  var btn;
  var i;
  input = document.getElementById("topic-search");
  inputUpperCase = input.value.toUpperCase();
  topics = document.getElementById("topic-drop-search");
  btn = topics.getElementsByTagName("button");
  for (i = 0; i < btn.length; i++) {
    txtValue = btn[i].innerHTML;
    if (txtValue.toUpperCase().indexOf(inputUpperCase) > -1) {
      btn[i].style.display = "";
    } else {
      btn[i].style.display = "none";
    }
  }
}

