export const initFormMain = () => {
    const select1 = document.getElementById('brand');
    const select2 = document.getElementById('model');
    const select3 = document.getElementById('fuel');
    const select4 = document.getElementById('drive');
    const select5 = document.getElementById('transmition');
    const select6 = document.getElementById('year_from');
    const select7 = document.getElementById('year_to');
    const input8 = document.getElementById('mileage_from');
    const input9 = document.getElementById('mileage_to');
    const input10 = document.getElementById('price_from');
    const input11 = document.getElementById('price_to');
    const input12 = document.getElementById('value_from');
    const input13 = document.getElementById('value_to');


    
    document.addEventListener('DOMContentLoaded', function() {
      const select = document.getElementById('value_to');
      const arrow = document.querySelector('.select-arrow');
    
      select.addEventListener('click', function() {
        arrow.classList.add('open');
      });
    
      select.addEventListener('blur', function() {
        arrow.classList.remove('open');
      });
    });
    if(select1) {
      select1.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue1 = select1.options[select1.selectedIndex].value;
        // console.log('Текущее значение selectedValue1:', selectedValue1);
        document.getElementById('formMainMarka').value = selectedValue1;
      };

    select2.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue2 = select2.options[select2.selectedIndex].value;
        // console.log('Текущее значение selectedValue2:', selectedValue2);
        document.getElementById('formMainModel').value = selectedValue2;
      };

    select3.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue3 = select3.options[select3.selectedIndex].value;
        // console.log('Текущее значение selectedValue3:', selectedValue3);
        document.getElementById('formMainFuel').value = selectedValue3;
      };

    select4.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue4 = select4.options[select4.selectedIndex].value;
        // console.log('Текущее значение selectedValue4:', selectedValue4);
        document.getElementById('formMainPrivod').value = selectedValue4;
      };

    select5.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue5 = select5.options[select5.selectedIndex].value;
        // console.log('Текущее значение selectedValue5:', selectedValue5);
        document.getElementById('formMainKpp').value = selectedValue5;
      };

    select6.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue6 = select6.options[select6.selectedIndex].value;
        // console.log('Текущее значение selectedValue6:', selectedValue6);
        document.getElementById('formMainYearFrom').value = selectedValue6;
      };

    select7.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue7 = select7.options[select7.selectedIndex].value;
        // console.log('Текущее значение selectedValue7:', selectedValue7);
        document.getElementById('formMainYearTo').value = selectedValue7;
      };

    input8.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue8 = input8.value;
        // console.log('Текущее значение selectedValue8:', selectedValue8);
        document.getElementById('formMainMileageFrom').value = selectedValue8;
      };

    input9.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue9 = input9.value;
        // console.log('Текущее значение selectedValue9:', selectedValue9);
        document.getElementById('formMainMileageTo').value = selectedValue9;
      };

    input10.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue10 = input10.value
        // console.log('Текущее значение selectedValue10:', selectedValue10);
        document.getElementById('formMainPriceFrom').value = selectedValue10;
      };

    input11.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue11 = input11.value
        // console.log('Текущее значение selectedValue11:', selectedValue11);
        document.getElementById('formMainPriceTo').value = selectedValue11;
      };

    input12.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue12 = input12.value
        // console.log('Текущее значение selectedValue12:', selectedValue12);
        document.getElementById('formMainValueFrom').value = selectedValue12;
      };

    input13.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue13 = input13.value
        // console.log('Текущее значение selectedValue13:', selectedValue13);
        document.getElementById('formMainValueTo').value = selectedValue13;
      };


    // console.log('Тут')
    const hiddenInput = document.getElementById('hidden');
    // hiddenInput.classList.add('display-none');

    // Найти все теги img
    const allImages = document.querySelectorAll('img');

    // Перебрать все найденные изображения
    allImages.forEach(function(img) {
      // Проверить, имеет ли изображение непустой src
      if (!img.getAttribute('src')) {
        img.style.display = 'none'; // Скрыть изображение, если src пустой
      }
    });
    }
   

    // Найти все теги video
    // const allVideos = document.querySelectorAll('video');

    // // Перебрать все найденные видео
    // allVideos.forEach(function(video) {
    //   // Проверить, имеет ли видео непустой src
    //   if (!video.getAttribute('src')) {
    //     video.style.display = 'none'; // Скрыть видео, если src пустой
    //   }
    // });



}