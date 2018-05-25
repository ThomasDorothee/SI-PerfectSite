carrousel();
var $filterCheckboxes = $('input[type="checkbox"]');

$filterCheckboxes.on('change', function() {

  var selectedFilters = {};

  $filterCheckboxes.filter(':checked').each(function() {

    if (!selectedFilters.hasOwnProperty(this.name)) {
      selectedFilters[this.name] = [];
    }

    selectedFilters[this.name].push(this.value);
  });

  $('.content').addClass('hide');

  if ($filterCheckboxes.filter(':checked').length < 1) {
    $('.content').removeClass('hide');
  }
  $filterCheckboxes.filter(':checked').each(function() {
    $('.content[data-'+ this.name + '=' + this.value +']').removeClass('hide');
  });
});
/*
var checkboxes = document.querySelectorAll('.article-flex-filtre-inputs-choise-checkbox');
var articles = document.querySelectorAll('.article-flex-aside-content');
var type = {
  restaurant:'Restaurant',
  hotel:'Hotel',
  spathalasso:'SpaThalasso',
  bonplan:'BonPlan'
};

for (let i = 0; i < checkboxes.length; i++) {
  var checkbox = checkboxes[i];
  checkbox.addEventListener('change',function(){
    var checked = this.checked;
    var value = this.value;
    filter(checked, value);


  })
}


switch(this.value){
  case 'Restaurant':
  for (var i = 0; i < articles.length; i++) {
    if(articles[i].classList.contains('Restaurant')){
      articles[i].classList.add('show');
    }
  }
  break;
  case 'Hotel':

  break;

  case 'SpaThalasso':
  break;

  case 'BonPlan':
  break;

}

*/
// functions
function filter(checked, value){
  // if it's checked
  if(checked == true){
    console.log("box : " + value + " checked");
  }
  else{
      console.log("box : " + value + " non checked");
  }
}
function carrousel(){

  var arrayBg = document.querySelectorAll('.bg');
  var intervalImage;
  var index=(arrayBg.length-1);
  var istrue = true;
  console.log(index);
      intervalImage = setInterval(function(){
          if(index<arrayBg.length ){
            arrayBg[index].classList.add('hidden');
            index--;
          }
          if(index === 0 ){
            index = arrayBg.length-1;
            for (var i = 1; i < arrayBg.length; i++) {
              arrayBg[i].classList.remove('hidden');
            }
          }

      }, 7000);
}

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});

//NavResponsive

var open= document.querySelector('.header-burger');
var menu= document.querySelector('.header-menuPhone');
var back= document.querySelector('.header-menuBack');

open.addEventListener('click', function(){
  menu.style.display ='block';
});

back.addEventListener('click', function(){
  menu.style.display ='none';
});
