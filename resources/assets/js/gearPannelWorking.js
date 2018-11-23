$(document).ready(function () {
    $('.perso').each(function () {
        var idChar = $(this).attr('id');
        var job = $(this).attr('name');

        function getCharData(idChar) {
            var urlChar = 'https://api.xivdb.com/character/' + idChar;
            $.get(urlChar, function (dataC) {
                $('#avatar' + idChar).html('<img class="img-responsive img-thumbnail avatar" src="' + dataC.data.avatar + '" alt="' + dataC.data.name + '">');
                $('#name' + idChar).html('<b>' + dataC.data.name + '</b>');

                if (dataC.data.name == 'Madeen Heaven') {
                    dataC.data.title = 'ColdSteel';
                }
                if (dataC.data.name == "Neo'queen Serenity") {
                    dataC.data.title = 'La Saliere';
                }
                $('#title' + idChar).html('<i>' + dataC.data.title + '</i>');
            });
        }
        getCharData(idChar);

        function getGearData(idChar) {
            var urlGear = 'https://api.xivdb.com/character/' + idChar + '?data=gearsets';
            $.get(urlGear, function (dataG) {

                for (i = 0; i < 100; i++) {
                    if (dataG[i].role.abbr == job) {
                        console.log("BRAVO CONNARD");
                        break;
                    }
                }

                $('#class' + idChar).html('<img class="img-responsive" src="' + dataG[i].role.icon + '" alt="' + dataG[0].role.abbr + '">');
                $('#ilvl' + idChar).text('ilvl : ' + dataG[i].item_level_avg);

                $('#slot_mainhand' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_mainhand + '"></a><br>');
                $('#slot_offhand' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_offhand + '"></a><br>');
                $('#slot_head' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_head + '"></a><br>');
                $('#slot_body' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_body + '"></a><br>');
                $('#slot_hands' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_hands + '"></a><br>');
                $('#slot_waist' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_waist + '"></a><br>');
                $('#slot_legs' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_legs + '"></a><br>');
                $('#slot_feet' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_feet + '"></a><br>');
                $('#slot_necklace' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_necklace + '"></a><br>');
                $('#slot_earrings' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_earrings + '"></a><br>');
                $('#slot_bracelets' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_bracelets + '"></a><br>');
                $('#slot_ring1' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_ring1 + '"></a><br>');
                $('#slot_ring2' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_ring2 + '"></a><br>');
                $('#slot_soulcrystal' + idChar).html('<a href="http://xivdb.com/item/' + dataG[i].slot_soulcrystal + '"></a><br>');
            });
        }
        getGearData(idChar);

        //Animations
        $("#header" + idChar).click(function () {
            $("#body" + idChar).toggle(500);
        });
    });

    //Btn collapse tout les onglets
    $("#btn2").click(function () {
        $('.perso').each(function () {
            var idChar = $(this).attr('id');
            $("#body" + idChar).hide();
        });
    });

    //Btn revenir en haut
    $('a[href^="#"]').click(function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    //Btn slot - slot_checked
    $('.slot-active').click(function () {
        if ($(this).attr('src') == '/img/slot.png') {
            $(this).attr('src', '/img/slot_checked.png');
        } else if ($(this).attr('src') == '/img/slot_checked.png') {
            $(this).attr('src', '/img/slot.png');
        }
    });
    //var idChar = '15417776';
});
