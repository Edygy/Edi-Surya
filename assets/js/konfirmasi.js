function hapusMenu() {

    Swal.fire({
        title: 'Are you sure?',
            text : "Yakin ingin hapus menu?",
            icon : 'warning',
            showcancelButton : true,
            confirmButtonColor : '#3005d6',
            cancelButtonColor : '#d33',
            confirmBUttonText : 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusRole(url) {

    Swal.fire({
        title: 'Are you sure?',
            text : "Yakin ingin hapus role?",
            icon : 'warning',
            showcancelButton : true,
            confirmButtonColor : '#3005d6',
            cancelButtonColor : '#d33',
            confirmBUttonText : 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusSubMenu(url) {

    Swal.fire({
        title: 'Are you sure?',
            text : "Yakin ingin hapus sub menu?",
            icon : 'warning',
            showcancelButton : true,
            confirmButtonColor : '#3005d6',
            cancelButtonColor : '#d33',
            confirmBUttonText : 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}