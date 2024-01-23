export const initFetchCars = () => {
    
    // Запрашиваем данные с помощью fetch
    fetch("https://avtopotencial-dv.ru/wp-content/themes/autopotencial/js/japan.js")
    .then(response => {
        // Проверяем, успешно ли выполнен запрос
        if (!response.ok) {
            throw new Error('Network response was not ok');
            
        }
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
        
                if(document.getElementById("brand")) {
                    document.getElementById("brand").addEventListener('change', function () {
                        let value = this.value;
                        let relevantModels = document.querySelectorAll('option[data-id="' + value + '"]');
                        // console.log(relevantModels)
                        let modelSelect = document.getElementById('model');
                       
                        // Отвечает за добавление в option новых моделей,в нем же удаление тех, которые не соот.
                        Array.from(relevantModels).forEach(model => {
                            modelSelect.appendChild(model.cloneNode(true));
                            model.removeAttribute('hidden');
                        });
            
                        // Отображение первой модели соот
                        let firstVisibleModel = modelSelect.querySelector('option:not([hidden])');
                        if (firstVisibleModel) {
                            firstVisibleModel.selected = true;  
                            
                        };
                        showModelsForBrand(value); 
                    });
                }
                
    
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
        }
        
        
          
          
          
          

