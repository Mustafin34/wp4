$(document).ready(function () {
    $(function () {
        var archs = [
            "NVIDIA Pascal",
            "NVIDIA Turing",
            "NVIDIA Maxwell"
        ];
        $("#archplace").autocomplete({
            source: archs
        });

        $(".videoCard__info").accordion({
            collapsible: true
        });

        $('#alert').dialog({
            autoOpen: false,
            modal: true,
            position: { at: "center top" },
            resizable: false,
            buttons: {
                "Окей": function () {
                    $(this).dialog("close");
                }
            }
        });

        // $('#confirme').dialog({
        //     autoOpen: false,
        //     modal: true,
        //     resizable: false,
        //     buttons: {
        //         "Принять": function () {
        //             $(this).dialog("close");
        //             $("#alert").dialog("open");
        //         },
        //         "Отклонить": function () {
        //             $(this).dialog("close");
        //         }
        //     }
        // });

        $(document).tooltip({
            position: {
                my: "center bottom-20",
                at: "center top",
                using: function (position, feedback) {
                    $(this).css(position);
                    $("<div>")
                        .addClass("arrow")
                        .addClass(feedback.vertical)
                        .addClass(feedback.horizontal)
                        .appendTo(this);
                }
            }
        });

        $("#date").datepicker({
            dateFormat: "dd.mm.yy",
            monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]
        });

        $(".slider-range1").slider({
            range: "max",
            min: 1,
            max: 8,
            value: 1,
            slide: function (event, ui) {
                let slider = $(this);
                slider.siblings(".catval").val(ui.value);
            }
        });

        $(".slider-range2").slider({
            range: "max",
            min: 800,
            max: 1900,
            value: 30,
            slide: function (event, ui) {
                let slider = $(this);
                slider.siblings(".catval").val(ui.value);
            }
        });

        $(".slider-range3").slider({
            range: "max",
            min: 6,
            max: 18,
            value: 1,
            slide: function (event, ui) {
                let slider = $(this);
                slider.siblings(".catval").val(ui.value);
            }
        });

        $(".slider-range4").slider({
            range: "max",
            min: 1,
            max: 8,
            value: 1,
            slide: function (event, ui) {
                let slider = $(this);
                slider.siblings(".catval").val(ui.value);
            }
        });

        $('#new__videoCard-wrapper').dialog({
            autoOpen: false,
            width: 760,
            modal: true,
            resizable: false,
            title: 'Видеокарта'
        });

        $('.tabs').tabs();

        $("#proizvod").selectmenu();
    });


    $("#save__videoCard").click(function () {
        $.ajax({
            type: "POST",
            url: 'php/savevideocard.php',
            method: 'post',
            dataType: 'html',
            data: $(".new__videoCard").serialize(),
            success: function (data) {
                $('#alert').dialog("open");
                $("#new__videoCard-wrapper").dialog("close");
            }
        });
        return false;
    });
});