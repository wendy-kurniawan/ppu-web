$(function () {
    var el = $("#narasumberDataResult").html();


    $("#searchDataNarasumber").keyup(function () {
        var idUMKM = document.getElementById('IDUMKM').value;
        if (this.value.length == 0) {
            $("#narasumberDataResult").html(el)
            return false
        }
        $.ajax({
            type: 'GET',
            url: $(this).data("url") + "/" + this.value,

            success: function (data) {
                let dataResult = ``;

                data.forEach(function (item) {
                    let dataDate = item.TANGGALLAHIR;
                    let reverseDate = dataDate.split("-").reverse().join("-");
                    dataResult += `
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div  class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="${('http://localhost/Project_Web/laravel/project/ppu-web/public/assetLogin/img/profile/'+ item.GAMBAR)}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>${item.NAMALENGKAP}</h2>
                                <a href="tel:${item.NOHP}" class="dp">Tlp:${item.NOHP}</a>
                                <p class="dp-ag"><b>Tanggal Lahir:</b> ${reverseDate}</p>
                                <a href="${('http://localhost/Project_Web/laravel/project/ppu-web/public/panel/detailnarasumber?&idNarasumber='+item.PROFILE_ID +'&idUMKM='+idUMKM)}" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    `
                })
                $("#narasumberDataResult").html(dataResult)
            }
        });
    });
});
