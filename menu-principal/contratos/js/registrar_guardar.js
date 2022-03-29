

  $("#guardarContrato").click(function(){
    event.preventDefault();

    // Swal.fire({
    //   title: 'Guardando...',
    //   html: 'Espere un momento',
    //   timer: 1800,
    //   timerProgressBar: true,
    //   didOpen: () => {
    //     Swal.showLoading()
    //   }
    // }).then((result) => {
    //   // Toast.fire({
    //   //   icon: 'question',
    //   //   title: 'Tiempo de espera agotado',
    //   //   text: 'Intentelo nuevamente o consulta a la persona del area de TI'
    //   // });
    // });
    Swal.fire({
      icon: 'success',
      title: 'Contrato registrado',
      // text: 'Se recargará...',
      showCloseButton: true,
    })



    });
