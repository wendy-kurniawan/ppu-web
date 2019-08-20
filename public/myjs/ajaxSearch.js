$(document).ready(function () {
    var el = $("#dataResultEvent").html();

    $("#searchEvent").keyup(function () {
        if (this.value.length == 0) {
            $("#dataResultEvent").html(el);
            return false
        }

        $.ajax({
            type: "GET",
            url: $(this).data("url") + "/" + this.value,

            success: function (dataResult) {
                let A = Date.now();
                let B = A.toString();
                console.log(B);

                console.log(dataResult);
                let domHtml = ``;
                let domFunc = ``;
                dataResult.forEach(function (itemEvent) {
                    domHtml += `
                    <div class="card mx-2 mb-3" style="width: 22rem; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.25)">
                        <p class="card-tag text-white font-weight-bold">${itemEvent.JKKEGIATAN}</p>
                        <img class="card-img-top" src="${('http://localhost/Project_Web/laravel/project/ppu-web/public/assetLogin/img/kegiatan/'+ itemEvent.GAMBAR)}" alt="Foto Tidak Ada">
                        <div class="card-body">
                            <h5 class="card-title text-primary">${itemEvent.JUDULACARA}</h5>
                            <div class="card-author">
                                <p class="font-weight-bold"><small>oleh: </small>${itemEvent.NAMANARASUMBER}</p>
                            </div>
                            <p class="card-text overflow-hidden">${itemEvent.KETKEGIATAN}</p>
                            <div class="card-skills">
                                <h6 class="font-weight-bold">Lokasi</h6>
                                <p>${itemEvent.LOKASI}</p>
                            </div>
                        </div>`;
                })
                $("#dataResultEvent").html(domHtml)
            }
        });
    });
})
