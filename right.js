$("#right").click(function(){
    $.post(
        "right.php",
        {
            id: $('[name = id]').val(),
        },
        alert('Успешно!')
    );
});
