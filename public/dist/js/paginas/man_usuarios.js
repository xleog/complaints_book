var table='';

$(document).ready(function () {
    carga_usuarios();
});
function carga_usuarios() {
    const url = baseURL + 'datatables/dtusuarios';    
    table = $('#tblrusuarios').DataTable({
        "destroy": true,
        "language": Español,
        "autoWidth": true,
        "responsive": true,
        "ajax": {
            'method': 'GET',
            'url': url,
            'dataSrc': function (json) {
                //console.log(json); // Verifica que los datos sean correctos
                return json.data; 
            }
        },
        "columns": [
            {"data": "idusuarios"},
            {"data": "usuario"},           
            {"data": "clave"},
            {"data": "estado"},
            {"data": "perfil"},

            {
                "data": null,
                "orderable": false, // Deshabilitar el ordenamiento en esta columna
                "render": function(data, type, row) {
                    return `<button class="btn btn-block btn-warning btn-xs" onclick="mostrarDatos(${data.idregla_despacho})">
                                <i class="fas fa-pencil-alt"></i> EDITAR
                            </button>`;
                }
            }
        ]
      });  

}