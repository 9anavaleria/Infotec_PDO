//ejecutar funcion en el evento clic
document.getElementById("btn_open").addEventListener("click", open_close_menu)
// Declarar variables
var side_menu = document.getElementById("side_menu")
var btn_open = document.getElementById("btn_open")
var body = document.getElementById("body")
var barra = document.getElementById("barra")
var session = document.getElementById("session_rol")

// evento para mostrar y ocultar el menu
function open_close_menu (){
    body.classList.toggle("body_move");
    side_menu.classList.toggle("menu_side_mov");
    barra.classList.toggle("barra_borde")
}
// Tabla producto
new DataTable('#tablaprod', {
columnDefs: [
    {
        targets: [0],
        orderData: [0, 1]
    },
    {
        targets: [1],
        orderData: [1, 0]
    },
    {
        targets: [4],
        orderData: [4, 0]
    }
]
});
// Tabla rol
new DataTable('#tablarol', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [1],
            orderData: [1, 0]
        },
        {
            targets: [2],
            orderData: [2, 0]
        }
    ]
});
// Tabla usuario
new DataTable('#tablausuario', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [1],
            orderData: [1, 0]
        },
        {
            targets: [7],
            orderData: [7, 0]
        }
    ]
});

// Tabla cliente

new DataTable('#tablacliente', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [5],
            orderData: [5, 0]
        },{
            }
    ]
});
// Tabla Vehiculo
new DataTable('#tablavehiculo', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [2],
            orderData: [2, 0]
        }
    ]
});
// Tabla categoria
new DataTable('#tablacategoria', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [1],
            orderData: [1, 0]
        }
    ]
});
// Tabla Servicio
new DataTable('#tablaservivio', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [2],
            orderData: [2, 0]
        }
    ]
});
// Tabla factura
new DataTable('#tablafactura', {
    columnDefs: [
        {
            targets: [0],
            orderData: [0, 1]
        },
        {
            targets: [5],
            orderData: [5, 0]
        }
    ]
});