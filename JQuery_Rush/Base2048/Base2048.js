(function($) // début du pluggin
{
    $.fn.game2048 = function() //function game2048 du pluggin
    {
        // génération du tableau (table, tr, td) vide (rempli de zéros)
        function generate_map()
        {
            var table = $('<table></table>');
            for (var y = 0; y < 4; y++)
            {
                var ligne = $('<tr></tr>');
                for (var x = 0; x < 4; x++)
                {
                    var cases = $('<td>0</td>').attr('x', x).attr('y', y).attr('nbr', 0);
                    ligne.append(cases);
                }
                table.append(ligne);
            }
            return table;
        }

        // génération d'un certain nombre de cases (argument cases) aléatoirement placées sur les cases d'attribut 'nbr=0'
        function generate_case(cases)
        {
            for (var i = 0; i < cases; i++)
            {
                var x = Math.floor((Math.random() * 4));
                var y = Math.floor((Math.random() * 4));
                var value =  2 * (Math.floor((Math.random() * 2) + 1));
                var elem = $('[x="' + x + '"][y="' + y + '"][nbr=0]');

                if (value === 4 && Math.random() > 0.5)
                    value = 2;
                if (!elem[0])
                    generate_case(cases - i);
                else {
                    elem.attr('nbr', value);
                    elem.text(value);
                }
            }
        }

        // fonction de gestion des évenements (appuie de touches)
        $('html').keydown(function(event) {
            switch (event['key']) {
                case 'ArrowLeft':
                    // insérer algo move left
                    break;
                case 'ArrowUp':
                    // insérer algo move up
                    break;
                case 'ArrowRight':
                    // insérer algo move right
                    break;
                case 'ArrowDown':
                    // insérer algo move down
                    break;
            }
        });

        // début du code lancé
        $(this).append(generate_map()); // génération du tableau vide
        generate_case(2); // génération aléatoire de deux cases pleines (2 ou 4)
    }

})(jQuery); // fin du pluggin