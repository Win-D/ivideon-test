$(document).ready(function () {
    $('#update').on('click', function () {
        const htmlPreview = $('#html_preview');
        htmlPreview.empty();

        let htmlContent = '<div>' + $('#html_editor').val() + '</div>'; //оборачиваем html из textarea в div, чтобы можно было спокойно работать со всеми дочерними элементами
        htmlContent = $(htmlContent); //преобразуем текст, полученный из textarea в HTML DOM
        htmlContent.find('img').each(function (index, object) {
            const imgCaption = $(object).attr('alt') ? $(object).attr('alt') : 'Подпись'; //если есть атрибут alt, берём его
            const imgWidth = $(object).attr('width') ? parseInt($(object).attr('width'), 10) + 4 : 200; //если есть атрибут width, берём его
            $(object).after('<p>' + imgCaption + '</p>'); //добавляем подпись
            $(object).wrap('<div class="b-image" style="width: ' + imgWidth + 'px;"></div>'); //оборачиваем картинку в div с нужными атрибутами
        });

        htmlPreview.append(htmlContent);
    })
});
