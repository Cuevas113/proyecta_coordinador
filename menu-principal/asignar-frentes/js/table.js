  $("#tableContenido").DataTable({
    sDom: '<"top"fli>t<"bottom"p><"clear">r',
    sPaginationType: "full_numbers",
    bProcessing: true,
    bAutoWidth: false,
    language: {
      decimal: "",
      emptyTable: "No hay ningun contrato disponible",
      info: "Mostrando desde el _START_ al _END_ del total de _TOTAL_ registros",
      infoEmpty: "Mostrando desde el 0 al 0 del total de  0 registros",
      infoFiltered: "(Filtrados del total de _MAX_ registros)",
      infoPostFix: "",
      thousands: ",",
      lengthMenu: "Mostrar _MENU_ filas",
      loadingRecords: "Cargando...",
      processing: "Procesando...",
      search: "Filtrar:",
      zeroRecords: "No se ha encontrado nada atraves de ese filtrado.",
      paginate: {
        first: "Primera",
        last: "Última",
        next: "Siguiente",
        previous: "Anterior"
      },
      aria: {
        sortAscending: ": activate to sort column ascending",
        sortDescending: ": activate to sort column descending"
      }
    },
    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
    columnDefs: [{
        width: "3%",
        targets: 0
      },
      {
        width: "9%",
        targets: 1
      },
      {
        width: "auto",
        targets: 2
      },
      {
        width: "auto",
        targets: 3
      },
      {
        width: "auto",
        targets: 4
      },
      {
        width: "13%",
        targets: 5
      }
    ]
  });
