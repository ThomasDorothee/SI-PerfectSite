carrousel();

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
