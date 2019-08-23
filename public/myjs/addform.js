$(document).ready(function () {
    let maxField = 10; //Input fields increment limitatio
    let btnplus = (".add_button");
    let placeForm = ("#plusInput");
    let fieldHtml = `<div><label>Pertanyaan Tambahan</label> <input type="text" name="field_ques[]" class="form-control" placeholder="Pertanyaan tambahan" required><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-circle fa-2x" aria-hidden="true"></i></div>`;
    let x = 1;

    $(btnplus).click(function () {
        if (x < maxField) {
            x++; //Increment field counter
            $(placeForm).append(fieldHtml); //Add field html
        }
    });

    //Once remove button is clicked
    $(placeForm).on('click', '.remove_button', function (e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
