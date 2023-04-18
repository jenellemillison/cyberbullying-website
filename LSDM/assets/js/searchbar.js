// JavaScript Document
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
