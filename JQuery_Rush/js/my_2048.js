/*
** CODING-ACADEMY PROJECT, 2017
** 2048
** my_2048.js by Jerome de MOURGUES - 06.60.68.58.08
* Created 11-22-2017 11:17
* Modified 11-23-2017 21:00
**
*/
(function($) // début du pluggin
{
    $.fn.game2048 = function () //function game2048 du plugin
    {
        class Cell {
            constructor(absXj, ordYi, cont = 0, dsp = 'emptyCell', state = '0') {
                this._cont = cont;
                this._dsp = dsp;
                this._state = state;
                this._absXi = absXj;
                this._ordYj = ordYi;

            }

            setCont(cont) {
                this._cont = cont;
            }

            setDsp(dsp) {
                this._dsp = dsp;
            }

            setState(state) {
                this._state = state;
            }

            getCont() {
                return this._cont;
            }

            getState() {
                return this._state;
            }

            displayCell(balise) {
                //      console.log(this._dsp, this._cont);
                balise.append("<td class= " + this._dsp + " abs=" + this._absXi + " ord=" + this._ordYj + "> " + this._cont + "</td>");
            }

            newCell() {
                var difficulty = 30;
                var alea = Math.random() * 100;
                if (alea < difficulty)
                    var newValue = 4;
                else var newValue = 2;
                this._cont = newValue;
            }

        }

        class Gametable {

            constructor(size = 4, posX = 20, posY = 20) {
                this._size = size;
                this._posX = posX;
                this._posY = posY;
                this._score = 0;
                this._maxScore = 0;
                this.table = new Array();


                for (var i = 0; i < size; i++) {
                    this.table[i] = new Array();
                }
            }

            getGameTable() {
                return this.table;
            }

            getSize() {
                return this._size;
            }

            getScore() {
                return this._score
            }

            setScrore(score) {
                this._score = score;
            }

            getMaxScore() {
                return this._maxScore;
            }

            setMaxScore(maxscore) {
                this._maxScore = maxScore;
            }

            clearTable() {
                document.body.innerHTML = "";
            }

            printGameTable() {
                $(".Games").append("<div id = 'title' class = 'title'> My 2048 </div><br>");
                $(".Games").append("<div id = 'menu' class = 'menu'> Menu </div><br>");
                $(".Games").append("<table class = 'score'> <tr><td>score</td><td>Max score</td></tr><tr><td id ='score'>"+this._score+"</td><td>"+this._maxScore+"</td></tr>");
                $(".Games").append("<br>");
                $(".Games").append("<table class = gameTable >");
                for (var j = 0; j < this._size; j++) {
                    var tr = $("<tr>");
                    for (var i = 0; i < this._size; i++) {
                        this.table[i][j].displayCell(tr);
                    }
                    $(".gameTable").append(tr);
                }
                $(".Games").append("<br>");
                $(".Games").append("<table class = 'start'> <tr><td><button id='startButton' onclick='startGame()' class='cmdButton'>start</td><td></td><td><button id = 'exitButton' class='cmdButton'>Exit </td></tr>");
            }

            updateGameTable() {
                for (var j = 0; j < this._size; j++) {
                    for (var i = 0; i < this._size; i++) {
                        $('[abs="' + i + '"][ord="' + j + '"]').text(this.table[i][j].getCont());
                        $('[abs="' + i + '"][ord="' + j + '"]').removeClass();
                        $('[abs="' + i + '"][ord="' + j + '"]').addClass("cell" + this.table[i][j].getCont());
                    }
                }
            }

            resetGame() {
                var j = 0;
                while (j < this._size) {
                    var i = 0;
                    while (i < this._size) {
                        this.table[i][j] = new Cell(i, j);
                        i++
                    }
                    j++;
                }
            }

            cleanState() {
                for (var j = 0; j < this._size; j++) {
                    for (var i = 0; i < this._size; i++) {
                        this.table[i][j].setState(0);
                    }
                }
            }

            collisionCell(originCell, destCell) {

                if ((destCell.getState() === 0) && (originCell.getState() === 0) && (originCell.getCont() !== 0) && (((originCell.getCont()) === (destCell.getCont())) || destCell.getCont() === 0)) {
                    if (destCell.getCont() !== 0) {
                        destCell.setState(1);
                    }
                    this._score = this._score + destCell.getCont()*2;
                    destCell.setCont((destCell.getCont()) + (originCell.getCont()));
                    originCell.setCont(0);
                    $("#score").text(this._score);
                    return true;
                }
                return false;
            }

            moveCellRight() {
                this.cleanState();
                var move = false;
                for (var j = 0; j < this._size; j++) {
                    for (var i = this._size - 2; i >= 0; i--) {
                        for (var k = i; k < this._size - 1; k++) {
                            if (this.collisionCell(this.table[k][j], this.table[k + 1][j]) === false) {
                                break;
                            }
                            move = true;
                        }
                    }
                }
                return move;
            }

            moveCellLeft() {
                this.cleanState();
                var move = false;
                for (var j = 0; j < this._size; j++) {
                    for (var i = 1; i < this._size; i++) {
                        for (var k = i; k > 0; k--) {
                            if (this.collisionCell(this.table[k][j], this.table[k - 1][j]) === false) {
                                break;
                            }
                            move = true;
                        }
                    }
                }
                return move;
            }

            moveCellUp() {
                this.cleanState();
                var move = false;
                for (var i = 0; i < this._size; i++) {
                    for (var j = 1; j < this._size; j++) {
                        for (var k = j; k > 0; k--) {
                            if (this.collisionCell(this.table[i][k], this.table[i][k - 1]) === false) {
                                break;
                            }
                            move = true;
                        }
                    }
                }
                return move;
            }

            moveCellDown() {
                this.cleanState();
                var move = false;
                for (var i = 0; i < this._size; i++) {
                    for (var j = this._size - 2; j >= 0; j--) {
                        for (var k = j; k < this._size - 1; k++) {
                            if (this.collisionCell(this.table[i][k], this.table[i][k + 1]) === false) {
                                break;
                            }
                            move = true;
                        }
                    }
                }
                return move;
            }

            posNew() {

                var aleaX = Math.trunc(Math.random() * this._size);
                var aleaY = Math.trunc(Math.random() * this._size);
                while (this.table[aleaX][aleaY].getCont() !== 0) {
                    aleaX = Math.trunc(Math.random() * this._size);
                    aleaY = Math.trunc(Math.random() * this._size);
                }
                this.table[aleaX][aleaY].newCell()
                $('[abs="' + aleaX + '"][ord="' + aleaY + '"]').text(this.table[aleaX][aleaY].getCont());
            }

            testEnd() {
                for (var j = 0; j < this._size; j++) {
                    for (var i = 0; i < this._size; i++) {
                        if (i > 0 && ((this.table[i - 1][j].getCont() === 0) || (this.table[i][j].getCont() === this.table[i - 1][j].getCont()))) {
                            return true
                        }
                        if (j > 0 && ((this.table[i][j - 1].getCont() === 0) || (this.table[i][j].getCont() === this.table[i][j - 1].getCont()))) {
                            return true
                        }
                        if (i < this._size - 1 && ((this.table[i + 1][j].getCont() === 0) || (this.table[i][j].getCont() === this.table[i + 1][j].getCont()))) {
                            return true
                        }

                        if (j < this._size - 1 && ((this.table[i][j + 1].getCont() === 0) || (this.table[i][j].getCont() === this.table[i][j + 1].getCont()))) {
                            return true
                        }
                    }
                }
                return false
            }
        }


        /* FIN DE CLASSE GAMETABLE */

        function reStart(){
            jQuery.alerts.okButton = 'Yes';
            jQuery.alerts.cancelButton = 'No';
            jConfirm('Are you sure??',  '', function(r) {
            if (r == true) {
                console.log("r = true");
                startGame();
            }
            });
        }

 //    $("#startButton").click(console.log("click"));

// Initialisation de la partie
        var game = new Gametable();
        game.resetGame();
        game.printGameTable();
        game.posNew();
        game.posNew();

// fonction de gestion des évenements (appuie de touches)
        $('html').keydown(function (event) {
            var test_move = false;
            switch (event['key']) {
                case 'ArrowLeft':
                    test_move = game.moveCellLeft();
                    break;
                case 'ArrowUp':
                    test_move = game.moveCellUp();
                    break;
                case 'ArrowRight':
                    test_move = game.moveCellRight();
                    break;
                case 'ArrowDown':
                    test_move = game.moveCellDown();
                    break;
            }
            if (test_move === true){
                console.log("testmove=true")
                game.posNew();
            }
            game.updateGameTable();
            if (game.testEnd() === false)
                alert("GAME OVER");
        });
    }
})(jQuery);








