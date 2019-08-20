$(function () {
    var el = $("#umkmDataResult").html();

    $("#searchData").keyup(function () {
        if (this.value.length == 0) {
            $("#umkmDataResult").html(el)
            return false
        }
        $.ajax({
            type: 'GET',
            url: $(this).data("url") + "/" + this.value,

            success: function (data) {

                let dataResult = ``;

                data.forEach(function (item) {
                    dataResult += `
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div  class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="${('http://localhost/Project_Web/laravel/project/ppu-web/public/assetLogin/img/profile/'+ item.GAMBAR)}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>${item.NAMAUMKM}</h2>
                                <p class="dp">${item.ALAMATUMKM}</p>
                                <a href="tel:${item.NOHPUMKM}}" class="dp-ag"><b>NoTlp: </b> ${item.NOHPUMKM}</a>
                                <a href="${('detailUMKM/'+ item.PROFILE_ID) }" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    `
                })
                $("#umkmDataResult").html(dataResult)
            }
        });
    });
})
