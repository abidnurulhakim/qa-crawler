;(function ( window, document, undefined ) {
    var path = {
        plugins : $myPrefix + 'assets/plugins/'
    };

    var assets = {
        _jquery_local           : { js : path.plugins + 'jQuery/jQuery-2.1.4.min.js' },
        _bootstrap              : { css : path.plugins + 'bootstrap/css/bootstrap.min.css', js : path.plugins + 'bootstrap/js/bootstrap.min.js' },
        _fastclick              : { js : path.plugins + 'fastclick/fastclick.min.js' },
        _slimscroll             : { js : path.plugins + 'slimScroll/jquery.slimscroll.min.js' },
        _datatables_bootstrap   : { css : path.plugins + 'datatables/dataTables.bootstrap.css', js : path.plugins + 'datatables/dataTables.bootstrap.min.js' },
        _datatables_jquery      : { css : path.plugins + 'datatables/jquery.dataTables.min.css', js : path.plugins + 'datatables/jquery.dataTables.min.js' },
        _datatables_colvis      : { css : path.plugins + 'datatables/extensions/ColVis/css/dataTables.colVis.css', js : path.plugins + 'datatables/extensions/ColVis/js/dataTables.colVis.min.js' },
        _adminlte_2             : { js : path.plugins + 'adminlte2/app.min.js' },
        _icheck                 : { css : path.plugins + 'iCheck/square/blue.css', js : path.plugins + 'iCheck/icheck.min.js' },
        _numeraljs              : { js : path.plugins + 'numeraljs/numeral.js' }
    };

    var Site = {
        init : function() {
            console.log("intialize");
            Site.fastClick();
            Site.slimScroll();
            Site.dataTables();
            Site.lockscreen();
            Site.iCheck();
            Site.addEntryBarang();
            Site.buttonDelete();
        },
        fastClick: function () {
            Modernizr.load({
                load    : assets._fastclick.js,
            });
        },
        slimScroll: function () {
            Modernizr.load({
                load    : assets._slimscroll.js,
            });
        },
        dataTables: function () {
            if ($("#dataTables").length <= 0) return;
            console.log("initialize datatable");
            Modernizr.load({
                load    : [
                    assets._datatables_jquery.js,
                    assets._datatables_bootstrap.js,
                    assets._datatables_bootstrap.css,
                    assets._datatables_colvis.js,
                    assets._datatables_colvis.css
                ],
                complete: function () {
                    $("#dataTables").DataTable({ dom: 'C<"clear">lfrtip' });
                }
            });
        },
        lockscreen : function() {
            if ($("#time").length < 0) return;
            $today = new Date(); $h = $today.getHours(); $m = $today.getMinutes(); $s = $today.getSeconds();
            if ($m < 10) { $m = "0" + $m; }
            if ($s < 10) { $s = "0" + $s; }
            $day_or_night = ($h > 11) ? "PM" : "AM";
            if ($h > 12) $h -= 12;
            $('#time').html($h + ":" + $m + ":" + $s + " " + $day_or_night);
            setTimeout(function() {
                Site.lockscreen();
            }, 500);
        },
        iCheck : function() {
            if ($("input").length < 1) return;
            Modernizr.load([
                {
                    load    : [
                        assets._icheck.css,
                        assets._icheck.js
                    ],
                    complete: function() {
                        $('input').iCheck({
                            checkboxClass: 'icheckbox_square-blue',
                            radioClass: 'iradio_square-blue',
                            increaseArea: '20%' // optional
                        });
                    }
                }
            ]);

        },
        addEntryBarang : function() {
            if ($("#add-entry").length < 1 || $("table.list-entry").length < 1) return;
            console.log("init data entry");
            $(document).on("click", "#btn-add-stuff", function(){
                $inputs = {};
                $inputEntry = $("#add-entry").find(".input-entry");
                $validate = true;
                $inputEntry.each(function(){
                    if ($(this).val().trim().length < 1 || $(this).val() < 1) {
                        $validate = false;
                    } else {
                        $inputs[$(this).prop("id")] = $(this).val().trim();
                    }
                });
                $resultArray = [];
                if ($inputs["inputNamaBarang"] != undefined) {
                    $resultArray.push($inputs["inputNamaBarang"]);
                }
                if ($inputs["inputJumlahBarang"] != undefined) {
                    $resultArray.push($inputs["inputJumlahBarang"]);
                }
                if ($inputs["inputBeratBarang"] != undefined) {
                    $resultArray.push($inputs["inputBeratBarang"]);
                    if ($inputs["inputJenisBarang"] != undefined) {
                        $resultArray.push($inputs["inputJenisBarang"]);
                        $resultArray.push($inputs["inputJenisBarang"] * $inputs["inputBeratBarang"]);
                    }
                }
                if ($validate) {
                    Site.addEntryToTable($resultArray);
                    if ($("table.list-entry > tfoot").length > 0) {
                        $value = $("table.list-entry > tfoot").children("tr").children("td.grand-total").html().trim().substr(4);
                        console.log($value);
                        $value = numeral().unformat($value);
                        $value += $inputs["inputJenisBarang"] * $inputs["inputBeratBarang"];
                        $value = numeral($value).format('0,0');
                        $("table.list-entry > tfoot").children("tr").children("td.grand-total").html("Rp. "+$value);
                    }
                }
            });
        },
        addEntryToTable : function(array) {
            if ($("table.list-entry").length > 0) {
                $table = $("table.list-entry > tbody");
                $row = "<tr>";
                for (var i = 0; i < array.length; i++) {
                    if (typeof array[i] == 'number') {
                        $row += "<td>" + numeral(array[i]).format('0.0') + "</td>";
                    } else {
                        $row += "<td>" + array[i] + "</td>";
                    }
                }
                $row += "<td><div class='btn btn-flat btn-danger btn-xs btn-delete'>Hapus</div></td>";
                $row += "</tr>";
                $table.append($row);
            }
        },
        buttonDelete : function() {
            $(document).on("click", ".btn-delete", function(){
                $href = ($(this).prop("href") != undefined) ?  $(this).prop("href") : (($(this).data("href") != undefined) ? $(this).data("href") : "");
                $token = ($(this).data("token") != undefined) ?  $(this).data("token") : "";
                if ($href.trim().length > 0 && $token.trim().length > 0) {
                    $answer = confirm("Anda yakin ingin menghapus tersebut!");
                    if ($answer == true) {
                        $.ajax({
                            url: $href,
                            method: "DELETE"
                        }).done(function() {
                            $(this).parent().parent().remove();
                        });
                    }
                } else {
                    $td = $(this).parent();
                    if ($("table.list-entry > tfoot").length > 0) {
                       $before = $td.prev();
                       $value = numeral().unformat($before.html());
                       $grandTotal = $("table.list-entry > tfoot").children("tr").children("td.grand-total").html().trim().substr(4);
                       $grandTotal = numeral().unformat($grandTotal);
                       $grandTotal = numeral($grandTotal-$value).format('0,0');
                       $("table.list-entry > tfoot").children("tr").children("td.grand-total").html("Rp. "+$grandTotal);
                    }
                    $(this).parent().parent().remove();
                }
            });
        }

    }
    var checkJquery = function () {
        Modernizr.load([
            {
                test    : window.jQuery,
                nope    : assets._jquery_local.js,
                complete: Site.init
            }
        ]);
    };

    Modernizr.load({
        load    : [
            assets._jquery_local.js,
            assets._bootstrap.js,
            assets._adminlte_2.js,
            assets._numeraljs.js
        ],
        complete: checkJquery
    });
})( window, document );
