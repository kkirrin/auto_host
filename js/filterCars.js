document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('markaAuc').addEventListener('change', function() {
        var selectedValue = this.value;
        
        fetch(MyAjax.ajaxurl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                action: 'my_catalog_request',
                marka: selectedValue
            })
        })
        .then(function(response) {
            return response.text();
        })
        .then(function(data) {
            // Обработка успешного ответа
            console.log(data);
        })
        .catch(function(error) {
            // Обработка ошибок
            console.log('Произошла ошибка:', error);
        });
    });
});
