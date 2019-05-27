$(function () {
    //////////////////
    //Change country combo
    $('#field-form-country-id').on('change', function () {
        //cboLoadState($(this).val())
        $.ajax({
            url: url_sites + "/load-state/" + $(this).val(),
            dataType: 'json',
            method: 'GET',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (responseState) {
                $('#field-form-state-id').html('');
                $("#field-form-state-id").html('<option value=""> Seleccionar uno </option>');
                var first_element = responseState[0].id;
                responseState.forEach(element => {
                    $('#field-form-state-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
                });
                $("#field-form-state-id").selectpicker("refresh");
                //cboLoadCity(first_element)
                $.ajax({
                    url: url_sites + "/load-city/" + first_element,
                    dataType: 'json',
                    method: 'GET',
                    success: function (responseSCat) {

                        $('#field-form-city-id').html('');
                        $("#field-form-city-id").html('<option value="" selected="true"> Seleccionar uno </option>');
                        responseSCat.forEach(element => {
                            $('#field-form-city-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
                        });
                        $("#field-form-city-id").selectpicker("refresh");
                    }
                });
            }
        });
    });
    //////////////////
    //Change state combo
    $('#field-form-state-id').on('change', function () {
        //cboLoadCity($(this).val())
        $.ajax({
            url: url_sites + "/load-city/" + $(this).val(),
            dataType: 'json',
            method: 'GET',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (responseSCat) {
                $('#field-form-city-id').html('');
                $("#field-form-city-id").html('<option value="" selected="true"> Seleccionar uno </option>');
                responseSCat.forEach(element => {
                    $('#field-form-city-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
                });
                $("#field-form-city-id").selectpicker("refresh");
            }
        });
    });
    //////////////////
    //Change departments combo
    $('#field-form-departaments-id').on('change', function () {
        //cboLoadCategories($(this).val())
        $.ajax({
            url: url_sites + "/load-categorie/" + $(this).val(),
            dataType: 'json',
            method: 'GET',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (responseCat) {
                $('#field-form-categories-id').html('');
                $("#field-form-categories-id").html('<option value=""> Seleccionar uno </option>');
                var first_element = responseCat[0].id;
                responseCat.forEach(element => {
                    $('#field-form-categories-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
                });
                $("#field-form-categories-id").selectpicker("refresh");
                //cboLoadSubCategories(first_element)
                $.ajax({
                    url: url_sites + "/load-subcategorie/" + first_element,
                    dataType: 'json',
                    method: 'GET',
                    success: function (responseSCat) {

                        $('#field-form-categories_sub-id').html('');
                        $("#field-form-categories_sub-id").html('<option value="" selected="true"> Seleccionar uno </option>');
                        responseSCat.forEach(element => {
                            $('#field-form-categories_sub-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
                        });
                        $("#field-form-categories_sub-id").selectpicker("refresh");
                    }
                });
            }
        });
    });
    //////////////////
    //Change categorie combo
    $('#field-form-categories-id').on('change', function () {
        //cboLoadSubCategories($(this).val())
        $.ajax({
            url: url_sites + "/load-subcategorie/" + $(this).val(),
            dataType: 'json',
            method: 'GET',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (responseSCat) {

                $('#field-form-categories_sub-id').html('');
                $("#field-form-categories_sub-id").html('<option value="" selected="true"> Seleccionar uno </option>');
                responseSCat.forEach(element => {
                    $('#field-form-categories_sub-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
                });
                $("#field-form-categories_sub-id").selectpicker("refresh");
            }
        });
    });
    //////////////////
    //Change branch combo
    $('#field-form-store-id').on('change', function () {
        //cboLoadBranch($(this).val())
        $.ajax({
            url: url_sites + "/load-branch/" + $(this).val(),
            dataType: 'json',
            method: 'GET',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (responseBranc) {
                $('#field-form-branch-id').html('');
                $("#field-form-branch-id").html('<option value=""> Seleccionar uno </option>');
                responseBranc.forEach(element => {
                    $('#field-form-branch-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
                });
                $("#field-form-branch-id").selectpicker("refresh");
            }
        });
    });
});

function cboLoadState(value) {
    $.ajax({
        url: url_sites + "/load-state/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseState) {

            $('#field-form-state-id').html('');
            $("#field-form-state-id").html('<option value=""> Seleccionar uno </option>');
            var first_element = responseState[0].id;
            responseState.forEach(element => {
                $('#field-form-state-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
            });
            $("#field-form-state-id").selectpicker("refresh");
            cboLoadCity(first_element)
        }
    });
}
function cboLoadCity(value) {
    $.ajax({
        url: url_sites + "/load-city/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseSCat) {

            $('#field-form-city-id').html('');
            $("#field-form-city-id").html('<option value="" selected="true"> Seleccionar uno </option>');
            responseSCat.forEach(element => {
                $('#field-form-city-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
            });
            $("#field-form-city-id").selectpicker("refresh");
        }
    });
}
function cboLoadCategories(value) {
    $.ajax({
        url: url_sites + "/load-categorie/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseCat) {

            $('#field-form-categories-id').html('');
            $("#field-form-categories-id").html('<option value=""> Seleccionar uno </option>');
            var first_element = responseCat[0].id;
            responseCat.forEach(element => {
                $('#field-form-categories-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
            });
            $("#field-form-categories-id").selectpicker("refresh");
            cboLoadSubCategories(first_element)
        }
    });
}
function cboLoadSubCategories(value) {
    $.ajax({
        url: url_sites + "/load-subcategorie/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseSCat) {

            $('#field-form-categories_sub-id').html('');
            $("#field-form-categories_sub-id").html('<option value="" selected="true"> Seleccionar uno </option>');
            responseSCat.forEach(element => {
                $('#field-form-categories_sub-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
            });
            $("#field-form-categories_sub-id").selectpicker("refresh");
        }
    });
}
function cboLoadBranch(value) {
    $.ajax({
        url: url_sites + "/load-branch/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseBranc) {

            $('#field-form-branch-id').html('');
            $("#field-form-branch-id").html('<option value=""> Seleccionar uno </option>');
            responseBranc.forEach(element => {
                $('#field-form-branch-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
            });
            $("#field-form-branch-id").selectpicker("refresh");
        }
    });
}
