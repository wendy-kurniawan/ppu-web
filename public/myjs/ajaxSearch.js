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
                console.log(dataResult);
                let domHtml = ``;
                dataResult.forEach(function (itemEvent) {
                    /*date INDO */
                    let current_datetime = new Date()
                    let currentFormattedDate = current_datetime.getFullYear() + "-" + ("0" + (+current_datetime.getMonth() + 1)).slice(-2) + "-" + current_datetime.getDate()
                    /*Get date TGLMULAI */
                    let getTGLMULAI = itemEvent.TGLMULAI;
                    rvcvgetTGLMULAI = getTGLMULAI.split(' ')[0];
                    /* substring first*/
                    let subTGLMULAI = rvcvgetTGLMULAI.substring(5, 7); //monthTGLMULAI
                    let subDateNow = currentFormattedDate.substring(5, 7); //monthNow
                    /*count monthTglMulai - monthDatenow*/
                    let sumMonth = Math.abs(subTGLMULAI - subDateNow);
                    // console.log(subTGLMULAI, subDateNow, sumMonth);
                    /*count dayTglMulai - dayDatenow*/
                    let dayTGLMULAI = rvcvgetTGLMULAI.substring(8, 10); //dayTGLMULAI
                    let dayDateNow = currentFormattedDate.substring(8, 10); //dayNow
                    let sumDay = Math.abs(dayTGLMULAI - dayDateNow);

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
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            ${rvcvgetTGLMULAI < currentFormattedDate ?
                                `<span class="font-weight-bold">Selesai</span>
                                <span class="disable-links">
                                    <button type="#" class="btn btn-danger" disabled>Pendaftar ditutup</button>   
                                </span>` : ''}
                            ${subDateNow == subTGLMULAI ? 
                                `<span class="font-weight-bold">
                                Tersisa ${sumDay} Hari
                                </span>
                                <a href="#" class="btn btn-primary">Daftar</a>`  
                                : ""}
                            ${rvcvgetTGLMULAI > currentFormattedDate ? 
                                `<span class="font-weight-bold">
                                Tersisa ${sumMonth} Bulan 
                                ${sumDay}Hari
                            </span>
                            <a href="#" class="btn btn-primary">Daftar</a>`
                                : ""}
                        </div>
                    </div>
                    `;
                })
                $("#dataResultEvent").html(domHtml)
            }
        });
    });
})
