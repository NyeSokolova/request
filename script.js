//<input> ожидает телефонный номер, ничего кроме чисел, +, () или - принято не будет
    function checkPhoneKey(key) {
        return (key >= '0' && key <= '9') || key == '+' || key == '(' || key == ')' || key == '-' ||
            key == 'ArrowLeft' || key == 'ArrowRight' || key == 'Delete' || key == 'Backspace';
    }

//Печать
    function CallPrint(edit) {
        var prtContent = document.getElementById(edit);
        var WinPrint = window.open('','print-content','left=50, top=50, width=1500, height=950, toolbar=0, scrollbars=1, status=0');
        WinPrint.document.write('<link rel="stylesheet" href="assets/css/main.css" type="text/css" />');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.write('');
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }

//Присвоение id__ на событие onClick
(function ()
{
    var actions = document.querySelectorAll ('[rel="mode"]');
    for (var i = 0; i < actions.length; i++) actions [i].onclick = function ()
    {
        var HRF = this.href.split ('id__') [0];
        var RBS = document.getElementsByName ('id__');
        for (var j = 0, lj = RBS.length; j < lj; j++) if (RBS [j].checked) break;
        this.href = HRF + '&id=' + RBS [j].value;
    }
}) ();

//Выборка одного radio снятие checked
inputs=document.getElementsByTagName("input");
for(var i=0;i<inputs.length;i++)
{
    if(inputs[i].type==="radio")
    {
        inputs[i].onchange=function()
        {
            let inputs = document.getElementsByTagName("input");
            for(var i=0;i<inputs.length;i++)
            {
                if(inputs[i].type==="radio")
                {
                    inputs[i].checked=false;
                }
                this.checked=true;
                $('#submit').prop('disabled', false) //Если radio checked то кнопка submit активна
                $('#right').prop('disabled', false)
            }
        }
    }
    $('#submit').prop('disabled', true) //Не активна
}

// var addId = document.getElementById('memo_performers');
// addId.addEventListener('click', getID);
// function getID() {
//     var getNum = document.getElementById('memo_performers').value;
//     console.log(getNum)
// }
// function addLp() {
// var lp=$('#memo_performers').val();
// $('#lp').append('<li>'+lp+'</li>'+'<a href="" title="Удалить"> ✖ </a>');
// }

//Добавить согл. лиц


function Add_agr() {
    const x = 0;
    if (x < 1) {
        var str = '<label for="memo_from_name"> Согласующее лицо:  <input type="text" name="memo_from_name" title="Фамилия Имя Отчество согласующего" placeholder="Фамилия Имя Отчество согласующего"  minlength="4" maxlength="60" required="required" />\n' +
            '                                    </label>\n' +
            '                                    <input type="checkbox" name="agreed" title="Cогласовано" value="false" required="required" />\n' +
            '                                    <label for="agreed">Cогласовано</label>\n' +
            '                                    <label for="memo_s"> Дата составления:\n' +
            '                                        <input type="date" name="memo_s" title="Дата составления"  min="2020-01-21" max="2020-12-31" required="required" >\n' +
            '                                    </label>\n' +
            '                                    <label>Файл резолюции:\n' +
            '                                        <input type="file" multiple="false" name="download" placeholder="Файл резолюции"\n' +
            '                                               title="Загрузка" required/>\n' +
            '                                    </label>\n' +
            '                                    <label for="memo_rez"> Дата резолюции:\n' +
            '                                        <input type="date" name="memo_rez" title="Дата резолюции"  min="2020-01-21" max="2020-12-31" required="required" >\n' +
            '                                    </label>' + (x + 1);
        document.getElementById('add_agr_div').innerHTML = str;
    } else
    {
        $('#add_in').prop('disabled', true)
    }

}



$(function (){
    $('#status').change(function(){
        var o=$('#prompt-form');
        if (this.value==='finished') {
            o.show();
        } else {
            o.hide();
        }
    });
});


    // 1 ----------------------------------------------------------------------------------
// Показать полупрозрачный DIV, чтобы затенить страницу

//     function showCover() {
//     let coverDiv = document.createElement('div');
//     coverDiv.id = 'cover-div';
//
//     // убираем возможность прокрутки страницы во время показа модального окна с формой
//     document.body.style.overflowY = 'hidden';
//
//     document.body.append(coverDiv);
// }
//
//     function hideCover() {
//     document.getElementById('cover-div').remove();
//     document.body.style.overflowY = '';
// }
//
//     function showPrompt(text, callback) {
//     showCover();
//     let form = document.getElementById('prompt-form');
//     let container = document.getElementById('prompt-form-container');
//     document.getElementById('prompt-message').innerHTML = text;
//     form.text.value = '';
//
//     function complete(value) {
//     hideCover();
//     container.style.display = 'none';
//     document.onkeydown = null;
//     callback(value);
// }
//
//     form.onsubmit = function() {
//     let value = form.text.value;
//     if (value == '') return false; // игнорируем отправку пустой формы
//
//     complete(value);
//     return false;
// };
//
//     form.cancel.onclick = function() {
//     complete(null);
// };
//
//     document.onkeydown = function(e) {
//     if (e.key == 'Escape') {
//     complete(null);
// }
// };
//
//     let lastElem = form.elements[form.elements.length - 1];
//     let firstElem = form.elements[0];
//
//     lastElem.onkeydown = function(e) {
//     if (e.key == 'Tab' && !e.shiftKey) {
//     firstElem.focus();
//     return false;
// }
// };
//
//     firstElem.onkeydown = function(e) {
//     if (e.key == 'Tab' && e.shiftKey) {
//     lastElem.focus();
//     return false;
// }
// };
//
//     container.style.display = 'block';
//     form.elements.text.focus();
// }
//
//     document.getElementById('show-button').onclick = function() {
//     showPrompt("Заполните поля:", function(value) {
//         alert("Вы ввели: " + value);
//     });
// };


