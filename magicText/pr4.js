// tabs

var tabLinks2 = document.querySelectorAll(".tablinks2");
var tabContent2 = document.querySelectorAll(".tabcontent2");


tabLinks2.forEach(function(el) {
   el.addEventListener("click", openTabs);
});


function openTabs(el) {
   var btnTarget = el.currentTarget;
   var country = btnTarget.dataset.country;

   tabContent2.forEach(function(el) {
      el.classList.remove("active");
   });

   tabLinks2.forEach(function(el) {
      el.classList.remove("active");
   });

   document.querySelector("#" + country).classList.add("active");
   
   btnTarget.classList.add("active");
}
