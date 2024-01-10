export const initFetchCarsFilter = () => {
  console.log('Подключил новый файл')
    fetch('http://78.46.90.228/model')
        .then(response => {
            if (!response.ok) {
                throw new Error('Траблы');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Ошибка:', error);
        });

}