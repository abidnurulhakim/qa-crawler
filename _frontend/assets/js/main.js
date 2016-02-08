;(function ( window, document, undefined ) {
    var path = {
        plugins : myPrefix + 'assets/plugins/'
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
        buttonDelete : function() {
            $(document).on("click", ".btn-delete", function(){
                $href = $(this).data("href");
                $token = $(this).data("token");
                if ($href.trim().length > 0 && $token.trim().length > 0) {
                    $answer = confirm("Anda yakin ingin menghapus tersebut!");
                    if ($answer == true) {
                        $.ajax({
                            url: $href,
                            method: "DELETE",
                            data: { _token: $token }
                        }).done(function() {
                            location.reload();
                        });
                    }
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
