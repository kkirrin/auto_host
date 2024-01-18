export const initFormMain = () => {
    // const select1 = document.getElementById('brand');
    // const select2 = document.getElementById('model');
    // const select3 = document.getElementById('fuel');
    // const select4 = document.getElementById('drive');
    // const select5 = document.getElementById('transmition');
    // const select6 = document.getElementById('year_from');
    // const select7 = document.getElementById('year_to');
    // const input8 = document.getElementById('mileage_from');
    // const input9 = document.getElementById('mileage_to');
    // const input10 = document.getElementById('price_from');
    // const input11 = document.getElementById('price_to');
    // const input12 = document.getElementById('value_from');
    // const input13 = document.getElementById('value_to');




    // Бля AJAX запрос 
    const selectElement = document.getElementById('markaAuc');
    // const formSelectElement = document.getElementById('formSelectMarka')

    // selectElement.addEventListener('change', function() {
    //   const selectedValue = selectElement.value;
    //   // formSelectElement.innerHTML = selectElement.value
    //   console.log(formSelectElement.value)

    //   const url = 'https://avtopotencial-dv.ru/%D0%B0%D0%B2%D1%82%D0%BE-%D0%B8%D0%B7-%D1%8F%D0%BF%D0%BE%D0%BD%D0%B8%D0%B8/';
    //   console.log(selectedValue)
    //   const params = selectedValue;
    //   fetch(url, {
    //     method: 'POST',
    //     headers: {
    //       'Content-type': 'application/x-www-form-urlencoded'
    //     },
    //     body: params
    //   })
    //   .then(response => {
    //     if (response.ok) {
    //       console.log(response)
    //       return response.json();
    //     }
    //     throw new Error('Ошибка сети');
    //   })
    //   .then(data => {
    //     console.log(data);
    //   })
    //   .catch(error => {
    //     console.error('Запрос не удался', error);
    //   });
    // });

//  selectElement.addEventListener('change', function (event) {
//   const selectedValue = selectElement.value;
//   const url = "https://avtopotencial-dv.ru/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/?marka=" + selectedValue;

//   // Выполняем GET-запрос при помощи Fetch API
//   fetch(url)
//     .then(function(response) {
//       // Обработка успешного ответа
//       console.log("Успешный ответ:", response);
//       // Можно вставить обработку данных, возвращаемых в ответе
//     })
//     .catch(function(error) {
//       // Обработка ошибки
//       console.log("Произошла ошибка:", error);
//     });

//   event.preventDefault(); // В данном случае этот вызов не нужен
// });



// selectElement.addEventListener('change', function (event) {
//   const selectedValue = selectElement.value;
//   const url = "https://avtopotencial-dv.ru/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/?marka=";
//   console.log(selectedValue);
//   location.href = url + selectedValue;
//   event.preventDefault();
// })


  selectElement.addEventListener('change', async function (event) {
    const selectedValue = selectElement.value;
    const url = '/avtopotencial-dv.ru/wp-content/themes/autopotencial/';
    const data = { marka: selectedValue };

    console.log(data)
    fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      console.log(data); // Содержимое ответа от сервера
    })
    .catch(function(error) {
      // Обработка ошибок, если необходимо
    });
  });



    // Кнопка фильтрации

    // const searchButton = document.getElementById('filterButton');

    // searchButton.addEventListener('click', function(event) {
    //   const url = "https://avtopotencial-dv.ru/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/?marka=";
    //   event.preventDefault();
    // })

    // Я закончился


    console.log('Я ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУ')

    // select1.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue1 = select1.options[select1.selectedIndex].value;
    //     console.log('Текущее значение selectedValue1:', selectedValue1);
    //     document.getElementById('formMainMarka').value = selectedValue1;
    //   };

    // select2.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue2 = select2.options[select2.selectedIndex].value;
    //     console.log('Текущее значение selectedValue2:', selectedValue2);
    //     document.getElementById('formMainModel').value = selectedValue2;
    //   };

    // select3.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue3 = select3.options[select3.selectedIndex].value;
    //     console.log('Текущее значение selectedValue3:', selectedValue3);
    //     document.getElementById('formMainFuel').value = selectedValue3;
    //   };

    // select4.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue4 = select4.options[select4.selectedIndex].value;
    //     console.log('Текущее значение selectedValue4:', selectedValue4);
    //     document.getElementById('formMainPrivod').value = selectedValue4;
    //   };

    // select5.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue5 = select5.options[select5.selectedIndex].value;
    //     console.log('Текущее значение selectedValue5:', selectedValue5);
    //     document.getElementById('formMainKpp').value = selectedValue5;
    //   };

    // select6.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue6 = select6.options[select6.selectedIndex].value;
    //     console.log('Текущее значение selectedValue6:', selectedValue6);
    //     document.getElementById('formMainYearFrom').value = selectedValue6;
    //   };

    // select7.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue7 = select7.options[select7.selectedIndex].value;
    //     console.log('Текущее значение selectedValue7:', selectedValue7);
    //     document.getElementById('formMainYearTo').value = selectedValue7;
    //   };

    // input8.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue8 = input8.value;
    //     console.log('Текущее значение selectedValue8:', selectedValue8);
    //     document.getElementById('formMainMileageFrom').value = selectedValue8;
    //   };

    // input9.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue9 = input9.value;
    //     console.log('Текущее значение selectedValue9:', selectedValue9);
    //     document.getElementById('formMainMileageTo').value = selectedValue9;
    //   };

    // input10.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue10 = input10.value
    //     console.log('Текущее значение selectedValue10:', selectedValue10);
    //     document.getElementById('formMainPriceFrom').value = selectedValue10;
    //   };

    // input11.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue11 = input11.value
    //     console.log('Текущее значение selectedValue11:', selectedValue11);
    //     document.getElementById('formMainPriceTo').value = selectedValue11;
    //   };

    // input12.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue12 = input12.value
    //     console.log('Текущее значение selectedValue12:', selectedValue12);
    //     document.getElementById('formMainValueFrom').value = selectedValue12;
    //   };

    // input13.onchange = function() {
    //     // Перезаписываем значение переменной selectedValue1 при выборе нового Option
    //     const selectedValue13 = input13.value
    //     console.log('Текущее значение selectedValue13:', selectedValue13);
    //     document.getElementById('formMainValueTo').value = selectedValue13;
    //   };


    // console.log('Тут')
    // const hiddenInput = document.getElementById('hidden');
    // hiddenInput.classList.add('display-none');

        
}