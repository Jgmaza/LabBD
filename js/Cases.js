function cases(id_case, fecha_diagnostico, action) {
    this.id_case = id_case;
    this.fecha_diagnostico = fecha_diagnostico;
    this.action = action;
}

cases.prototype.searchCases = function () {
    $.post(this.action, {},function(response){
        $("#resultSearch").html(response);
    });
}