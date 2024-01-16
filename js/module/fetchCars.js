export const initFetchCars = () => {
    
    // Запрашиваем данные с помощью fetch
    // fetch('http://78.46.90.228/api/?code=APTnghDfD64KJ&sql=select%20*%20from%20main%20limit%205')
    fetch("https://avtopotencial-dv.ru/wp-content/themes/autopotencial/js/japan.js")
    .then(response => {
        // Проверяем, успешно ли выполнен запрос
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        // console.log(response)
        return response.json();
    })
    .then(users => {
        let brand = '';
        let model = '';

        // Проходимся по каждому элементу (автомобильному бренду) в данных
        users.forEach(user => {
        brand += "<option>" + user.name + "</option>";

        // Проходимся по каждой модели автомобиля данного бренда
        user.models.forEach(mod => {
            model += "<option data-id=\"" + user.name + "\">" + mod.name + "</option>";
            
        });
        });

        // Заполняем выпадающие списки на странице данными
        document.getElementById('model').innerHTML = model;
        document.getElementById('brand').innerHTML = brand;

        showModelsForBrand("AC");
        

        })

        document.addEventListener('DOMContentLoaded', function() {
          // Убеждаемся, что код будет выполнен только после полной загрузки страницы
          let brandSelect = document.getElementById("brand");
          if (brandSelect) {
              brandSelect.addEventListener('change', function () {
                  let value = this.value;
                  let relevantModels = document.querySelectorAll('option[data-id="' + value + '"]');
                  console.log(relevantModels)
                  let modelSelect = document.getElementById('model');
      
                  if(modelSelect) {
                      // Очищаем текущие опции перед добавлением новых
                      modelSelect.innerHTML = '';
      
                      // Добавляем новые опции в пустой select
                      Array.from(relevantModels).forEach(model => {
                          modelSelect.appendChild(model.cloneNode(true));
                          model.removeAttribute('hidden');
                      });
      
                      // Выбираем первую видимую модель после обновления списка
                      let firstVisibleModel = modelSelect.querySelector('option:not([hidden])');
                      if (firstVisibleModel) {
                          firstVisibleModel.selected = true;  
                      }
      
                      // Показываем модели для выбранного бренда
                      showModelsForBrand(value); 
                  } else {
                      console.error("Элемент 'model' не найден. Убедитесь, что он существует на странице.");
                  }
              });
          } else {
              console.error("Элемент 'brand' не найден. Убедитесь, что он существует на странице.");
          }
      });


        function showModelsForBrand(brandname) {
            let options = document.querySelectorAll('option[data-id]');
            // console.log(options)
            options.forEach(option => {
              option.hidden = true;
            });
          
            let relevantModels = document.querySelectorAll('option[data-id="' + brandname + '"]');
            relevantModels.forEach(model => {
              model.hidden = false;
            });
          }

          async function fetchData(url) {
            try {
              const response = await fetch(url);
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              const data = await response.json(); 
              return data;
            } catch (error) {
              console.error('There has been a problem with your fetch operation:', error);
            }
          }
        


           

        


       
}
