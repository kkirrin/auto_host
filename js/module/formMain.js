export const initFormMain = () => {
    const select1 = document.getElementById('brand');
    const select2 = document.getElementById('model');
    const select3 = document.getElementById('fuel');
    const select4 = document.getElementById('drive');
    const select5 = document.getElementById('transmition');
    const select6 = document.getElementById('year_from');
    const select7 = document.getElementById('year_to');
    const select8 = document.getElementById('mileage_from');
    const select9 = document.getElementById('mileage_to');
    const select10 = document.getElementById('price_from');
    const select11 = document.getElementById('price_to');
    const select12 = document.getElementById('value_from');
    const select13 = document.getElementById('value_to');

    select1.onchange = function() {
        // Перезаписываем значение переменной selectedValue1 при выборе нового Option
        const selectedValue1 = select1.options[select1.selectedIndex].value;
        console.log('Текущее значение selectedValue1:', selectedValue1);
        document.getElementById('formMainMarka').value = selectedValue1;
      };
    // const selectedValue2 = select1.options[select2.selectedIndex].value;
    // const selectedValue3 = select1.options[select3.selectedIndex].value;
    // const selectedValue4 = select1.options[select4.selectedIndex].value;
    // const selectedValue5 = select1.options[select5.selectedIndex].value;
    // const selectedValue6 = select1.options[select6.selectedIndex].value;


    // console.log(selectedValue1);

    // document.getElementById('formMainMarka').value = selectedValue1;
    // document.getElementById('formMainModel').value = selectedValue2;
    // document.getElementById('formMainFuel').value = selectedValue3;
    // document.getElementById('formMainPrivod').value = selectedValue3;
    // document.getElementById('formMainKpp').value = selectedValue3;
    // document.getElementById('formMainYearFrom').value = selectedValue3;
    // document.getElementById('formMainYearFrom').value = selectedValue3;
    // document.getElementById('formMainMileageFrom').value = selectedValue3;
    // document.getElementById('formMainMileageTo').value = selectedValue3;
    // document.getElementById('formMainPriceFrom').value = selectedValue3;
    // document.getElementById('formMainPriceTo').value = selectedValue3;
    // document.getElementById('formMainValueFrom').value = selectedValue3;
    // document.getElementById('formMainValueTo').value = selectedValue3;


    console.log('Тут')

        
}