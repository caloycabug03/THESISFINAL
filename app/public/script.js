
const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');
const modal = document.getElementById('modal');


// top Button
$(document).ready(function(){

    $(window).scroll(function(){
      if($(this).scrollTop() > 40){
        $('#topBtn').fadeIn();
      } else{
        $('#topBtn').fadeOut();
      }
    });

    $("#topBtn").click(function(){
      $('html ,body').animate({scrollTop : 0},800);
    });
  });

  // navigation

  //services button to services
  $("#servicesBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec-width").offset().top},
        'slow');
});
  //facilities button to rooms and function hall
$("#facilitiesBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".rooms").offset().top},
        'slow');
});
 //about us button to footer
 $("#aboutusBtn").click(function() {
  $('html,body').animate({
      scrollTop: $(".footer").offset().top},
      'slow');
});

  //book now button to booking form
  $("#bookBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".service-content button").offset().top},
        'slow');
});

//restriction of past dates in booking form
$(function(){
  var dtToday = new Date();

  var month = dtToday.getMonth() + 1;
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();
  if(month < 10)
      month = '0' + month.toString();
  if(day < 10)
      day = '0' + day.toString();

  var minDate= year + '-' + month + '-' + day;

  $('#theDate').attr('min', minDate);
  $('#checkout-date').attr('min', minDate);

});

  //automatic current date input
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();

      if (month < 10) month = "0" + month;
      if (day < 10) day = "0" + day;

      var today = year + "-" + month + "-" + day;
      document.getElementById("theDate").value = today;
      document.getElementById("checkout-date").value = today;




navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    modal.classList.add('showModal');
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    modal.classList.remove('showModal');
});

window.addEventListener('click', function(event){
    if(event.target === modal){
        sideNav.classList.remove('show');
        modal.classList.remove('showModal');
    }
});
